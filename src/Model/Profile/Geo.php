<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Geo
{

  private ?string $city;

  private ?string $county;

  private ?string $postal;

  private ?float $latitude;

  private ?float $longitude;

  private ?string $location;

  public function __construct(
    ?array $markets,
    ?string $continent,
    ?string $city,
    ?string $county,
    ?string $postal,
    ?float $latitude,
    ?float $longitude,
    ?string $location
  ) {
    $this->city = $city;
    $this->county = $county;
    $this->postal = $postal;
    $this->latitude = $latitude;
    $this->longitude = $longitude;
    $this->location = $location;
  }

  /**
   * @return string|null
   */
  public function getCity(): ?string {
    return $this->city;
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
  public function getPostal(): ?string {
    return $this->postal;
  }

  /**
   * @return float|null
   */
  public function getLatitude(): ?float {
    return $this->latitude;
  }

  /**
   * @return float|null
   */
  public function getLongitude(): ?float {
    return $this->longitude;
  }

  /**
   * @return string|null
   */
  public function getLocation(): ?string {
    return $this->location;
  }
}
