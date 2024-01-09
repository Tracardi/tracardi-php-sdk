<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Company {

  private ?string $name;

  private ?string $size;

  private ?string $segment;

  private ?string $country;

  public function __construct(?string $name = null, ?string $size = null, ?string $segment = null, ?string $country = null) {
    $this->name = $name;
    $this->size = $size;
    $this->segment = $segment;
    $this->country = $country;
  }

  /**
   * @return string|null
   */
  public function getName(): ?string {
    return $this->name;
  }

  /**
   * @return string|null
   */
  public function getSize(): ?string {
    return $this->size;
  }

  /**
   * @return string|null
   */
  public function getSegment(): ?string {
    return $this->segment;
  }

  /**
   * @return string|null
   */
  public function getCountry(): ?string {
    return $this->country;
  }
}
