<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Metadata {

  private Time $time;

  private ?string $ip;

  public function __construct(Time $time, ?string $ip) {
    $this->time = $time;
    $this->ip = $ip;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Time
   */
  public function getTime(): Time {
    return $this->time;
  }

  /**
   * @return string|null
   */
  public function getIp(): ?string {
    return $this->ip;
  }

}
