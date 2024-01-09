<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Email {

  private ?string $main;

  private ?string $private;

  private ?string $business;

  public function __construct(?string $main = null, ?string $private = null, ?string $business = null) {
    $this->main = $main;
    $this->private = $private;
    $this->business = $business;
  }

  /**
   * @return string|null
   */
  public function getMain(): ?string {
    return $this->main;
  }

  /**
   * @return string|null
   */
  public function getPrivate(): ?string {
    return $this->private;
  }

  /**
   * @return string|null
   */
  public function getBusiness(): ?string {
    return $this->business;
  }
}
