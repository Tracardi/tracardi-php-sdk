<?php

namespace Tracardi\TracardiPhpSdk\Request;

abstract class GetRequest extends BaseRequest {

  /**
   * @inheritdoc
   */
  public function getMethod(): string {
    return 'GET';
  }

}
