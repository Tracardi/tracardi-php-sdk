<?php

namespace Tracardi\TracardiPhpSdk\Request;

abstract class BaseRequest implements RequestInterface {

  /**
   * @var array
   */
  protected array $body = [];

  /**
   * @inheritdoc
   */
  abstract public function getEndpoint(): string;

  /**
   * @inheritdoc
   */
  public function getBody(): array {
    return $this->body;
  }

  /**
   * @inheritdoc
   */
  abstract public function getMethod(): string;

}
