<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Card {

  private ?string $id;

  private ?string $name;

  private ?string $issuer;

  private ?string $expires;

  private float $points;

  public function __construct(?string $id = null, ?string $name = null, ?string $issuer = null, ?string $expires = null, float $points) {
    $this->id = $id;
    $this->name = $name;
    $this->issuer = $issuer;
    $this->expires = $expires;
    $this->points = $points;
  }

  /**
   * @return string|null
   */
  public function getId(): ?string {
    return $this->id;
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
  public function getIssuer(): ?string {
    return $this->issuer;
  }

  /**
   * @return string|null
   */
  public function getExpires(): ?string {
    return $this->expires;
  }

  /**
   * @return float
   */
  public function getPoints(): int {
    return $this->points;
  }
}
