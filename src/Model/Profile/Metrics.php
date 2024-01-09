<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Metrics {

  private float $ltv;

  private float $ltcosc;

  private float $ltcocc;

  private float $ltcop;

  private float $ltcosv;

  private float $ltcocv;

  private ?float $next;

  private ?CustomMetrics $custom;

  public function __construct(
    float $ltv = 0,
    float $ltcosc = 0,
    float $ltcocc = 0,
    float $ltcop = 0,
    float $ltcosv = 0,
    float $ltcocv = 0,
    ?float $next = null,
    ?CustomMetrics $custom = null
  ) {
    $this->ltv = $ltv;
    $this->ltcosc = $ltcosc;
    $this->ltcocc = $ltcocc;
    $this->ltcop = $ltcop;
    $this->ltcosv = $ltcosv;
    $this->ltcocv = $ltcocv;
    $this->next = $next;
    $this->custom = $custom;
  }

  /**
   * @return float
   */
  public function getLtv(): float {
    return $this->ltv;
  }

  /**
   * @return float
   */
  public function getLtcosc(): float {
    return $this->ltcosc;
  }

  /**
   * @return float
   */
  public function getLtcocc(): float {
    return $this->ltcocc;
  }

  /**
   * @return float
   */
  public function getLtcop(): float {
    return $this->ltcop;
  }

  /**
   * @return float
   */
  public function getLtcosv(): float {
    return $this->ltcosv;
  }

  /**
   * @return float
   */
  public function getLtcocv(): float {
    return $this->ltcocv;
  }

  /**
   * @return float|null
   */
  public function getNext(): ?float {
    return $this->next;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\CustomMetrics|null
   */
  public function getCustom(): ?CustomMetrics {
    return $this->custom;
  }
}
