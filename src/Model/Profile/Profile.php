<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Profile
{

  private string $id;

  private array $ids;

  private Metadata $metadata;

  private Stats $stats;

  private Traits $traits;

  private array $segments;

  private ?Interests $interests;

  private Consents $consents;

  private bool $active;

  private Aux $aux;

  private Data $data;

  private ?Meta $meta;

  public function __construct(string $id, array $ids, Metadata $metadata, Stats $stats, Traits $traits, array $segments, ?Interests $interests, Consents $consents, bool $active, Aux $aux, Data $data, ?Meta $meta)
  {
    $this->id = $id;
    $this->ids = $ids;
    $this->metadata = $metadata;
    $this->stats = $stats;
    $this->traits = $traits;
    $this->segments = $segments;
    $this->interests = $interests;
    $this->consents = $consents;
    $this->active = $active;
    $this->aux = $aux;
    $this->data = $data;
    $this->meta = $meta;
  }

  /**
   * @return string
   */
  public function getId(): string
  {
    return $this->id;
  }

  /**
   * @return array
   */
  public function getIds(): array
  {
    return $this->ids;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Metadata
   */
  public function getMetadata(): Metadata
  {
    return $this->metadata;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Stats
   */
  public function getStats(): Stats
  {
    return $this->stats;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Traits
   */
  public function getTraits(): Traits
  {
    return $this->traits;
  }

  /**
   * @return array
   */
  public function getSegments(): array
  {
    return $this->segments;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Interests
   */
  public function getInterests(): ?Interests
  {
    return $this->interests;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Consents
   */
  public function getConsents(): Consents
  {
    return $this->consents;
  }

  /**
   * @return bool
   */
  public function isActive(): bool
  {
    return $this->active;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Aux
   */
  public function getAux(): Aux
  {
    return $this->aux;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Data
   */
  public function getData(): Data
  {
    return $this->data;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Meta
   */
  public function getMeta(): ?Meta
  {
    return $this->meta;
  }
}
