<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Preferences {

  private array $purchases;

  private array $colors;

  private array $sizes;

  private array $devices;

  private array $channels;

  private array $payments;

  private array $brands;

  private array $fragrances;

  private array $services;

  private array $other;

  public function __construct(
    array $purchases = [],
    array $colors = [],
    array $sizes = [],
    array $devices = [],
    array $channels = [],
    array $payments = [],
    array $brands = [],
    array $fragrances = [],
    array $services = [],
    array $other = []
  ) {
    $this->purchases = $purchases;
    $this->colors = $colors;
    $this->sizes = $sizes;
    $this->devices = $devices;
    $this->channels = $channels;
    $this->payments = $payments;
    $this->brands = $brands;
    $this->fragrances = $fragrances;
    $this->services = $services;
    $this->other = $other;
  }

  /**
   * @return array
   */
  public function getPurchases(): array {
    return $this->purchases;
  }

  /**
   * @return array
   */
  public function getColors(): array {
    return $this->colors;
  }

  /**
   * @return array
   */
  public function getSizes(): array {
    return $this->sizes;
  }

  /**
   * @return array
   */
  public function getDevices(): array {
    return $this->devices;
  }

  /**
   * @return array
   */
  public function getChannels(): array {
    return $this->channels;
  }

  /**
   * @return array
   */
  public function getPayments(): array {
    return $this->payments;
  }

  /**
   * @return array
   */
  public function getBrands(): array {
    return $this->brands;
  }

  /**
   * @return array
   */
  public function getFragrances(): array {
    return $this->fragrances;
  }

  /**
   * @return array
   */
  public function getServices(): array {
    return $this->services;
  }

  /**
   * @return array
   */
  public function getOther(): array {
    return $this->other;
  }
}
