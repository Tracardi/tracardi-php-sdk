# Tracardi PHP SDK

## Getting started

### 1. Create a Guzzle client
https://github.com/guzzle/guzzle
```
use GuzzleHttp\Client;

$baseUrl = 'https://<TRACARDI_API_URL>';

$client = new Client([
  'base_uri' => $baseUrl
]);
```

### 2. Create the OAuth2 provider & retrieve an access token
https://github.com/thephpleague/oauth2-client
```
use League\OAuth2\Client\Provider\GenericProvider;

$provider = new GenericProvider([
  'urlAuthorize' => $baseUrl . '/authorize',
  'urlAccessToken' => $baseUrl . '/token',
  'urlResourceOwnerDetails' => $baseUrl. '/resource',
]);

$accessToken = $provider->getAccessToken('password', [
  'username' => '<USERNAME>',
  'password' => '<PASSWORD>'
]);
```

### 3. Combine the above to get the Tracardi client
```
use Http\Adapter\Guzzle6\Client as ClientAdapter;
use Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClient;

$psrClient = new ClientAdapter($client);
$apiClient = ApiClient::withProvider($psrClient, $provider, $accessToken);
```

### 4. Start using the repositories
```
use Tracardi\TracardiPhpSdk\Tracardi;

$profile = Tracardi::withDefaultSerializer($apiClient)
  ->profiles()
  ->getProfile('<ID>');
```

## 5. Using your own HTTP client

It is not strictly required to use the League OAuth provider, alternatively you can
instantiate the API client with an HTTP client only. It is your own responsibility that
this HTTP client performs authenticated requests.

This flow requires some PSR-7 request factory to be present, e.g. `composer require nyholm/psr7`.
See the [php-http docs](https://docs.php-http.org/en/latest/discovery.html) for more information.

```php
use Http\Adapter\Guzzle6\Client as ClientAdapter;
use Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClient;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

// When using Guzzle you could create your own custom middleware
// that fetches the access token from e.g. the database.
$middleware = function (callable $handler): callable {
  return function (RequestInterface $request, array $options) use ($handler) {
    $request = $request->withHeader('Authorization', 'Bearer ' . fetchToken());

    return $handler($request, $options);
  };
};
$stack = HandlerStack::create();
$stack->push($middleware);

$client = new Client([
  'base_uri' => 'https://<TRACARDI_API_URL>',
  'handler' => $stack
]);

$psrClient = new ClientAdapter($client);
$apiClient = ApiClient::withClient($psrClient);
```
