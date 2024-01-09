<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Address {

  private ?string $town;

  private ?string $county;

  private ?string $country;

  private ?string $postcode;

  private ?string $street;

  private ?string $other;

  public function __construct(
    ?string $town = null,
    ?string $county = null,
    ?string $country = null,
    ?string $postcode = null,
    ?string $street = null,
    ?string $other = null
  ) {
    $this->town = $town;
    $this->county = $county;
    $this->country = $country;
    $this->postcode = $postcode;
    $this->street = $street;
    $this->other = $other;
  }

  /**
   * @return string|null
   */
  public function getTown(): ?string {
    return $this->town;
  }

  /**
   * @return string|null
   */
  public function getCounty(): ?string {
    return $this->county;
  }

  /**
   * @return string|null
   */
  public function getCountry(): ?string {
    return $this->country;
  }

  /**
   * @return string|null
   */
  public function getPostcode(): ?string {
    return $this->postcode;
  }

  /**
   * @return string|null
   */
  public function getStreet(): ?string {
    return $this->street;
  }

  /**
   * @return string|null
   */
  public function getOther(): ?string {
    return $this->other;
  }
}
