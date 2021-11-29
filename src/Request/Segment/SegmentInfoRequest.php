<?php

namespace Tracardi\TracardiPhpSdk\Request\Segment;

use Tracardi\TracardiPhpSdk\Request\GetRequest;

class SegmentInfoRequest extends GetRequest {

  /**
   * @var string
   */
  private string $id;

  /**
   * @param string $id
   */
  public function __construct(string $id) {
    $this->id = $id;
  }

  /**
   * @inheritdoc
   */
  public function getEndpoint(): string {
    return 'segment/' . $this->id;
  }

}
