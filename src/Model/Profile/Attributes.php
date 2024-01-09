<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Attributes
{
  private ?float $height;

  private ?float $weight;

  private ?int $shoe_number;

  public function __construct(?float $height = null, ?float $weight = null, ?int $shoe_number = null)
  {
    $this->height = $height;
    $this->weight = $weight;
    $this->shoe_number = $shoe_number;
  }

  public function getHeight(): ?float
  {
    return $this->height;
  }

  public function getWeight(): ?float
  {
    return $this->weight;
  }

  public function getShoeNumber(): ?int
  {
    return $this->shoe_number;
  }
}
