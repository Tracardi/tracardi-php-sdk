<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Devices {

  private array $push;

  private array $other;

  private ?Last $last;

  public function __construct(array $push, array $other, ?Last $last = null) {
    $this->push = $push;
    $this->other = $other;
    $this->last = $last;
  }

  /**
   * @return array
   */
  public function getPush(): array {
    return $this->push;
  }

  /**
   * @return array
   */
  public function getOther(): array {
    return $this->other;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Last|null
   */
  public function getLast(): ?Last {
    return $this->last;
  }
}
