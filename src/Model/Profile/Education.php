<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Education
{

  private ?string $level;

  public function __construct(?bool $level = null)
  {
    $this->$level = $level;
  }

  public function getLevel(): ?string
  {
    return $this->$level;
  }
}
