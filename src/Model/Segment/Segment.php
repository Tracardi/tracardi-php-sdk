<?php

namespace Tracardi\TracardiPhpSdk\Model\Segment;

class Segment {

  private string $id;

  private string $name;

  private string $description;

  private string $eventType;

  private string $condition;

  private bool $enabled;

  public function __construct(string $id, string $name, string $description, string $eventType, string $condition, bool $enabled) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->eventType = $eventType;
    $this->condition = $condition;
    $this->enabled = $enabled;
  }

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @return string
   */
  public function getDescription(): string {
    return $this->description;
  }

  /**
   * @return string
   */
  public function getEventType(): string {
    return $this->eventType;
  }

  /**
   * @return string
   */
  public function getCondition(): string {
    return $this->condition;
  }

  /**
   * @return bool
   */
  public function isEnabled(): bool {
    return $this->enabled;
  }

}
