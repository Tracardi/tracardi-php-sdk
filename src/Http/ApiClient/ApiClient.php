<?php

namespace Tracardi\TracardiPhpSdk\Http\ApiClient;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use Nyholm\Psr7\Request;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Tracardi\TracardiPhpSdk\Request\RequestInterface;

class ApiClient implements ApiClientInterface {

  /**
   * @var AbstractProvider
   */
  protected AbstractProvider $provider;

  /**
   * @var ClientInterface
   */
  protected ClientInterface $httpClient;

  /**
   * @var AccessToken
   */
  private AccessToken $accessToken;

  /**
   * @param $provider
   * @param \Psr\Http\Client\ClientInterface $httpClient
   * @param $accessToken
   */
  public function __construct($provider, ClientInterface $httpClient, $accessToken) {
    $this->provider = $provider;
    $this->httpClient = $httpClient;
    $this->accessToken = $accessToken;
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
      $body = json_encode($body);
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
    $psrRequest = new Request(
      $request->getMethod(),
      $request->getEndpoint(),
      $headers,
      $body
    );
    return $this->httpClient->sendRequest($psrRequest);
  }


}
