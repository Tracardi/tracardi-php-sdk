<?php

namespace Tracardi\TracardiPhpSdk\Request;

abstract class PostRequest extends BaseRequest {

  /**
   * @inheritdoc
   */
  public function getMethod(): string {
    return 'POST';
  }

}
