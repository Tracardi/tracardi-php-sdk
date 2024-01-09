<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Traits {

  private ?PublicTrait $public;

  public function __construct(?PublicTrait $public) {
    $this->public = $public;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\PublicTrait
   */
  public function getVisit(): ?PublicTrait
  {
    return $this->public;
  }

}
