<?php

namespace Tracardi\TracardiPhpSdk\Http\ApiClient;

use Http\Discovery\Exception\DiscoveryFailedException;
use Http\Discovery\Psr17FactoryDiscovery;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Tracardi\TracardiPhpSdk\Request\RequestInterface;

class ApiClient implements ApiClientInterface {

  private ClientInterface $httpClient;

  private ?AbstractProvider $provider;

  private ?AccessTokenInterface $accessToken;

  private ?RequestFactoryInterface $requestFactory;

  public function __construct(
    ClientInterface $httpClient,
    ?AbstractProvider $provider = null,
    ?AccessTokenInterface $accessToken = null,
    ?RequestFactoryInterface $requestFactory = null
  ) {
    $this->provider = $provider;
    $this->httpClient = $httpClient;
    $this->accessToken = $accessToken;
    $this->requestFactory = $requestFactory;
  }

  /**
   * Instantiate the API client with a League OAuth provider. The provider
   * will be used to perform requests.
   */
  public static function withProvider(
    ClientInterface $httpClient,
    AbstractProvider $provider,
    AccessTokenInterface $accessToken
  ): ApiClient {
    return new static($httpClient, $provider, $accessToken);
  }

  /**
   * Instantiate the API client with an HTTP client only. It is your own
   * responsibility that the HTTP client performs authenticated requests.
   */
  public static function withClient(
    ClientInterface $httpClient,
    ?RequestFactoryInterface $requestFactory = null
  ): ApiClient {
    return new static($httpClient, null, null, $requestFactory);
  }

  /**
   * @inheritdoc
   */
  public function handle(RequestInterface $request): ResponseInterface {
    $options = [];
    $body = $request->getBody();

    // Always request application/json
    $headers = [
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
    ];

    if (!empty($body)) {
      $body = json_encode($body, JSON_THROW_ON_ERROR);
    }

    if ($this->provider) {
      // Set the body.
      if (!empty($body)) {
        $options['body'] = $body;
      }
      // Set the headers.
      $options['headers'] = $headers;

      $psrRequest = $this->provider->getAuthenticatedRequest(
        $request->getMethod(),
        $request->getEndpoint(),
        $this->accessToken,
        $options
      );

      return $this->httpClient->sendRequest($psrRequest);
    }

    // If no provider was given. execute the request directly.
    $psrRequest = $this->getRequestFactory()->createRequest(
      $request->getMethod(),
      $request->getEndpoint(),
      $headers,
      !empty($body) ? $body : ''
    );

    return $this->httpClient->sendRequest($psrRequest);
  }

  private function getRequestFactory(): RequestFactoryInterface {
    return $this->requestFactory ?: Psr17FactoryDiscovery::findRequestFactory();
  }
}
