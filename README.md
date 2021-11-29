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
$apiClient = new ApiClient($provider, $psrClient, $accessToken);
```

### 4. Start using the repositories
```
use Tracardi\TracardiPhpSdk\Tracardi;

$profile = Tracardi::withDefaultSerializer($apiClient)
  ->profiles()
  ->getProfile('<ID>');
```
