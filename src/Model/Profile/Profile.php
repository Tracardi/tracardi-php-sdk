<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Profile {

  private string $id;

  private ?string $mergedWith;

  private Metadata $metadata;

  private Operation $operation;

  private Stats $stats;

  private Traits $traits;

  private Pii $pii;

  private array $segments;

  private array $consents;

  private bool $active;

  public function __construct(string $id, ?string $mergedWith, Metadata $metadata, Operation $operation, Stats $stats, Traits $traits, Pii $pii, array $segments, array $consents, bool $active) {
    $this->id = $id;
    $this->mergedWith = $mergedWith;
    $this->metadata = $metadata;
    $this->operation = $operation;
    $this->stats = $stats;
    $this->traits = $traits;
    $this->pii = $pii;
    $this->segments = $segments;
    $this->consents = $consents;
    $this->active = $active;
  }

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @return string|null
   */
  public function getMergedWith(): ?string {
    return $this->mergedWith;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Metadata
   */
  public function getMetadata(): Metadata {
    return $this->metadata;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Operation
   */
  public function getOperation(): Operation {
    return $this->operation;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Stats
   */
  public function getStats(): Stats {
    return $this->stats;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Traits
   */
  public function getTraits(): Traits {
    return $this->traits;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Pii
   */
  public function getPii(): Pii {
    return $this->pii;
  }

  /**
   * @return array
   */
  public function getSegments(): array {
    return $this->segments;
  }

  /**
   * @return array
   */
  public function getConsents(): array {
    return $this->consents;
  }

  /**
   * @return bool
   */
  public function isActive(): bool {
    return $this->active;
  }

}
