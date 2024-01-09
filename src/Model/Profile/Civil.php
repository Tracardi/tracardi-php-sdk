<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Civil
{
  private ?string $status;

  public function __construct(?string $status = null)
  {
    $this->status = $status;
  }

  public function getStatus(): ?string
  {
    return $this->status;
  }
}
