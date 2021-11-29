<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Time {

  private string $insert;

  private ?string $lastVisit;

  public function __construct(string $insert, ?string $lastVisit) {
    $this->insert = $insert;
    $this->lastVisit = $lastVisit;
  }

  /**
   * @return string
   */
  public function getInsert(): string {
    return $this->insert;
  }

  /**
   * @return string|null
   */
  public function getLastVisit(): ?string {
    return $this->lastVisit;
  }

}
