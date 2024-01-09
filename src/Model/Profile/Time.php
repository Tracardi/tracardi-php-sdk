<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Time
{

  private string $insert;

  private string $create;

  private string $update;

  private ?bool $segmentation;

  private Visit $visit;

  public function __construct(string $insert, string $create, string $update, ?bool $segmentation, Visit $visit)
  {
    $this->insert = $insert;
    $this->create = $create;
    $this->update = $update;
    $this->segmentation = $segmentation;
    $this->visit = $visit;
  }

  /**
   * @return string
   */
  public function getInsert(): string
  {
    return $this->insert;
  }

  /**
   * @return string
   */
  public function getCreate(): string
  {
    return $this->create;
  }

  /**
   * @return string
   */
  public function getUpdate(): string
  {
    return $this->update;
  }

  /**
   * @return bool|null
   */
  public function getSegmentation(): ?bool
  {
    return $this->segmentation;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Visit
   */
  public function getVisit(): Visit
  {
    return $this->visit;
  }
}
