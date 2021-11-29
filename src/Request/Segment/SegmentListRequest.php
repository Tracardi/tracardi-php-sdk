<?php

namespace Tracardi\TracardiPhpSdk\Request\Segment;

use Tracardi\TracardiPhpSdk\Request\GetRequest;

class SegmentListRequest extends GetRequest {

  /**
   * @inheritdoc
   */
  public function getEndpoint(): string {
    return 'segments';
  }

}
