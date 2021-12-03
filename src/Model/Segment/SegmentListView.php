<?php

namespace Tracardi\TracardiPhpSdk\Model\Segment;

class SegmentListView {

  private int $total;

  /**
   * @var \Tracardi\TracardiPhpSdk\Model\Segment\Group[]
   */
  private array $grouped;

  /**
   * @param int $total
   * @param \Tracardi\TracardiPhpSdk\Model\Segment\Group[] $grouped
   */
  public function __construct(int $total, array $grouped) {
    $this->total = $total;
    $this->grouped = $grouped;
  }

  /**
   * @return int
   */
  public function getTotal(): int {
    return $this->total;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Segment\Group[]
   */
  public function getGroups(): array {
    return $this->grouped;
  }

}
