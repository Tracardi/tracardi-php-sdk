<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class App {

  private ?string $whatsapp;

  private ?string $discord;

  private ?string $slack;

  private ?string $twitter;

  private ?string $telegram;

  private ?string $wechat;

  private ?string $viber;

  private ?string $signal;

  private ?Other $other;

  public function __construct(
    ?string $whatsapp = null,
    ?string $discord = null,
    ?string $slack = null,
    ?string $twitter = null,
    ?string $telegram = null,
    ?string $wechat = null,
    ?string $viber = null,
    ?string $signal = null,
    ?Other $other = null
  ) {
    $this->whatsapp = $whatsapp;
    $this->discord = $discord;
    $this->slack = $slack;
    $this->twitter = $twitter;
    $this->telegram = $telegram;
    $this->wechat = $wechat;
    $this->viber = $viber;
    $this->signal = $signal;
    $this->other = $other;
  }

  /**
   * @return string|null
   */
  public function getWhatsapp(): ?string {
    return $this->whatsapp;
  }

  /**
   * @return string|null
   */
  public function getDiscord(): ?string {
    return $this->discord;
  }

  /**
   * @return string|null
   */
  public function getSlack(): ?string {
    return $this->slack;
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
  public function getTelegram(): ?string {
    return $this->telegram;
  }

  /**
   * @return string|null
   */
  public function getWechat(): ?string {
    return $this->wechat;
  }

  /**
   * @return string|null
   */
  public function getViber(): ?string {
    return $this->viber;
  }

  /**
   * @return string|null
   */
  public function getSignal(): ?string {
    return $this->signal;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Other|null
   */
  public function getOther(): ?Other {
    return $this->other;
  }
}
