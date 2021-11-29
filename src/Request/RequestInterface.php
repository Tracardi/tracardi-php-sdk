<?php

namespace Tracardi\TracardiPhpSdk\Request;

interface RequestInterface {

  /**
   * @return string
   */
  public function getEndpoint(): string;

  /**
   * @return array
   */
  public function getBody(): array;

  /**
   * @return string
   */
  public function getMethod(): string;

}
