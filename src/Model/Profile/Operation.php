<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Operation {

  private bool $new;

  private bool $update;

  private bool $segment;

  private array $merge;

  public function __construct(bool $new, bool $update, bool $segment, array $merge) {
    $this->new = $new;
    $this->update = $update;
    $this->segment = $segment;
    $this->merge = $merge;
  }

  /**
   * @return bool
   */
  public function isNew(): bool {
    return $this->new;
  }

  /**
   * @return bool
   */
  public function isUpdate(): bool {
    return $this->update;
  }

  /**
   * @return bool
   */
  public function isSegment(): bool {
    return $this->segment;
  }

  /**
   * @return array
   */
  public function getMerge(): array {
    return $this->merge;
  }

}
