<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Phone {

  private ?string $main;

  private ?string $business;

  private ?string $mobile;

  private ?string $whatsapp;

  public function __construct(?string $main = null, ?string $business = null, ?string $mobile = null, ?string $whatsapp = null) {
    $this->main = $main;
    $this->business = $business;
    $this->mobile = $mobile;
    $this->whatsapp = $whatsapp;
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
  public function getBusiness(): ?string {
    return $this->business;
  }

  /**
   * @return string|null
   */
  public function getMobile(): ?string {
    return $this->mobile;
  }

  /**
   * @return string|null
   */
  public function getWhatsapp(): ?string {
    return $this->whatsapp;
  }
}
