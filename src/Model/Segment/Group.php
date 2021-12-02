<?php

namespace Tracardi\TracardiPhpSdk\Model\Segment;

class Group {

  private array $segments;

  private string $name;

  /**
   * @param string $name
   * @param \Tracardi\TracardiPhpSdk\Model\Segment\Segment[] $segments
   */
  public function __construct(string $name, array $segments) {
    $this->name = $name;
    $this->segments = $segments;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Segment\Segment[]
   */
  public function getSegments(): array {
    return $this->segments;
  }

}
