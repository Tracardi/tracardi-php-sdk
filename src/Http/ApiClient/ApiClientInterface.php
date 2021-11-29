<?php

namespace Tracardi\TracardiPhpSdk\Http\ApiClient;

use Psr\Http\Message\ResponseInterface;
use Tracardi\TracardiPhpSdk\Request\RequestInterface;

interface ApiClientInterface {

  /**
   * @param \Tracardi\TracardiPhpSdk\Request\RequestInterface $request
   *
   * @return \Psr\Http\Message\ResponseInterface
   */
  public function handle(RequestInterface $request): ResponseInterface;

}
