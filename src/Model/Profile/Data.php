<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Data
{
  private bool $anonymous;
  private Pii $pii;
  private Contact $contact;
  private Identifier $identifier;
  private Devices $devices;
  private Media $media;
  private Preferences $preferences;
  private Job $job;
  private Metrics $metrics;
  private Loyalty $loyalty;

  public function __construct(
    bool $anonymous,
    Pii $pii,
    Contact $contact,
    Identifier $identifier,
    Devices $devices,
    Media $media,
    Preferences $preferences,
    Job $job,
    Metrics $metrics,
    Loyalty $loyalty
  ) {
    $this->anonymous = $anonymous;
    $this->pii = $pii;
    $this->contact = $contact;
    $this->identifier = $identifier;
    $this->devices = $devices;
    $this->media = $media;
    $this->preferences = $preferences;
    $this->job = $job;
    $this->metrics = $metrics;
    $this->loyalty = $loyalty;
  }

  /**
   * @return bool
   */
  public function isAnonymous(): bool
  {
    return $this->anonymous;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Pii
   */
  public function getPii(): Pii
  {
    return $this->pii;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Contact
   */
  public function getContact(): Contact
  {
    return $this->contact;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Identifier
   */
  public function getIdentifier(): Identifier
  {
    return $this->identifier;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Devices
   */
  public function getDevices(): Devices
  {
    return $this->devices;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Media
   */
  public function getMedia(): Media
  {
    return $this->media;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Preferences
   */
  public function getReferences(): Preferences
  {
    return $this->preferences;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Job
   */
  public function getJob(): Job
  {
    return $this->job;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Metrics
   */
  public function getMetrics(): Metrics
  {
    return $this->metrics;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Loyalty
   */
  public function getLoyalty(): Loyalty
  {
    return $this->loyalty;
  }
}
