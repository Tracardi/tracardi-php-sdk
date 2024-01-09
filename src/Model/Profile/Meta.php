<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Meta {

  private ?string $id;

  private ?string $index;

  public function __construct(?string $id = null, ?string $index = null) {
    $this->id = $id;
    $this->index = $index;
  }

  /**
   * @return string|null
   */
  public function getId(): ?string {
    return $this->id;
  }

  /**
   * @return string|null
   */
  public function getIndex(): ?string {
    return $this->index;
  }
}
