<?php

namespace Tracardi\TracardiPhpSdk\Request;

abstract class PutRequest extends BaseRequest {

  /**
   * @inheritdoc
   */
  public function getMethod(): string {
    return 'PUT';
  }

}
