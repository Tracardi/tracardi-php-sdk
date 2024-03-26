<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Visit
{
  private ?string $last;

  private string $current;

  private int $count;

  private string $tz;

  public function __construct(?string $last, string $current, int $count, string $tz)
  {
    $this->last = $last;
    $this->current = $current;
    $this->count = $count;
    $this->tz = $tz;
  }

  /**
   * @return string
   */
  public function getLast(): string
  {
    return $this->last;
  }

  /**
   * @return string
   */
  public function getCurrent(): string
  {
    return $this->current;
  }

  /**
   * @return int
   */
  public function getCount(): int
  {
    return $this->count;
  }

  /**
   * @return string
   */
  public function getTz(): string
  {
    return $this->tz;
  }
}
