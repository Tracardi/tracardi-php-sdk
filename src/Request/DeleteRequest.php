<?php

namespace Tracardi\TracardiPhpSdk\Request;

abstract class DeleteRequest extends BaseRequest {

  /**
   * @inheritdoc
   */
  public function getMethod(): string {
    return 'DELETE';
  }

}
