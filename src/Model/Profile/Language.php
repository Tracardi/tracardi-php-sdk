<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Language
{
  private ?bool $native;

  private ?array $spoken;

  public function __construct(?bool $native = null, ?array $spoken = null)
  {
    $this->native = $native;
    $this->spoken = $spoken;
  }

  public function isNative(): ?bool
  {
    return $this->native;
  }

  public function getSpoken(): ?array
  {
    return $this->spoken;
  }
}
