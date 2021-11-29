<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Traits {

  private array $private;

  private array $public;

  public function __construct(array $private, array $public) {
    $this->private = $private;
    $this->public = $public;
  }

  /**
   * @return array
   */
  public function getPrivate(): array {
    return $this->private;
  }

  /**
   * @return array
   */
  public function getPublic(): array {
    return $this->public;
  }

}
