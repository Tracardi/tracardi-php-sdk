<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Loyalty {

  private array $codes;

  private ?Card $card;

  public function __construct(array $codes = [], ?Card $card = null) {
    $this->codes = $codes;
    $this->card = $card;
  }

  /**
   * @return array
   */
  public function getCodes(): array {
    return $this->codes;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Card|null
   */
  public function getCard(): ?Card {
    return $this->card;
  }
}
