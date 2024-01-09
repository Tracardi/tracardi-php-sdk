<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Social {

  private ?string $twitter;

  private ?string $facebook;

  private ?string $youtube;

  private ?string $instagram;

  private ?string $tiktok;

  private ?string $linkedin;

  private ?string $reddit;

  private ?Other $other;

  public function __construct(
    ?string $twitter = null,
    ?string $facebook = null,
    ?string $youtube = null,
    ?string $instagram = null,
    ?string $tiktok = null,
    ?string $linkedin = null,
    ?string $reddit = null,
    ?Other $other = null
  ) {
    $this->twitter = $twitter;
    $this->facebook = $facebook;
    $this->youtube = $youtube;
    $this->instagram = $instagram;
    $this->tiktok = $tiktok;
    $this->linkedin = $linkedin;
    $this->reddit = $reddit;
    $this->other = $other;
  }

  /**
   * @return string|null
   */
  public function getTwitter(): ?string {
    return $this->twitter;
  }

  /**
   * @return string|null
   */
  public function getFacebook(): ?string {
    return $this->facebook;
  }

  /**
   * @return string|null
   */
  public function getYoutube(): ?string {
    return $this->youtube;
  }

  /**
   * @return string|null
   */
  public function getInstagram(): ?string {
    return $this->instagram;
  }

  /**
   * @return string|null
   */
  public function getTiktok(): ?string {
    return $this->tiktok;
  }

  /**
   * @return string|null
   */
  public function getLinkedin(): ?string {
    return $this->linkedin;
  }

  /**
   * @return string|null
   */
  public function getReddit(): ?string {
    return $this->reddit;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Other|null
   */
  public function getOther(): ?Other {
    return $this->other;
  }
}
