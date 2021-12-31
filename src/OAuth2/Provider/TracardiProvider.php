<?php

namespace Tracardi\TracardiPhpSdk\OAuth2\Provider;

use League\OAuth2\Client\Provider\GenericProvider;

class TracardiProvider extends GenericProvider
{
  public function __construct(array $options = [], array $collaborators = []) {
    $baseUrl = $options['baseUrl'];
    if (!is_string($baseUrl)) {
      throw new \InvalidArgumentException("The 'baseUrl' option must be a string");
    }

    if (substr($baseUrl, -1) !== '/') {
      $baseUrl .= '/';
    }

    $options['urlAuthorize'] = $options['urlAuthorize'] ?? $baseUrl . 'authorize';
    $options['urlAccessToken'] = $options['urlAccessToken'] ?? $baseUrl . 'token';
    $options['urlResourceOwnerDetails'] = $options['urlResourceOwnerDetails'] ?? $baseUrl . 'resource';

    parent::__construct($options);
  }

  protected function getRequiredOptions(): array {
    return ['baseUrl'];
  }

  protected function getConfigurableOptions(): array {
    $defaultOptions = parent::getConfigurableOptions();
    $newOptionalOptions = [
      'urlAuthorize',
      'urlAccessToken',
      'urlResourceOwnerDetails'
    ];

    return array_merge($defaultOptions, $newOptionalOptions);
  }
}
