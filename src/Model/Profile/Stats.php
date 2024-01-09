<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Stats {

  private int $visits;

  private int $views;

  private ?array $counters;

  public function __construct(int $visits, int $views, ?array $counters) {
    $this->visits = $visits;
    $this->views = $views;
    $this->counters = $counters;
  }

  /**
   * @return int
   */
  public function getVisits(): int {
    return $this->visits;
  }

  /**
   * @return int
   */
  public function getViews(): int {
    return $this->views;
  }

  /**
   * @return array
   */
  public function getCounters(): ?array {
    return $this->counters;
  }
}
