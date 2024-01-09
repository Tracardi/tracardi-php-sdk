<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Last {

  private Geo $geo;

  public function __construct(Geo $geo) {
    $this->geo = $geo;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Geo
   */
  public function getGeo(): Geo {
    return $this->geo;
  }
}
