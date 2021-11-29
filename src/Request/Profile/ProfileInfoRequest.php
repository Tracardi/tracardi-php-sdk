<?php

namespace Tracardi\TracardiPhpSdk\Request\Profile;

use Tracardi\TracardiPhpSdk\Request\GetRequest;

class ProfileInfoRequest extends GetRequest {

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
    return 'profile/' . $this->id;
  }

}
