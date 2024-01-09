<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Identifier {

  private ?string $id;

  private ?string $badge;

  private ?string $passport;

  private ?string $credit_card;

  private ?string $token;

  private ?string $coupons;

  public function __construct(
    ?string $id = null,
    ?string $badge = null,
    ?string $passport = null,
    ?string $credit_card = null,
    ?string $token = null,
    ?string $coupons = null
  ) {
    $this->id = $id;
    $this->badge = $badge;
    $this->passport = $passport;
    $this->credit_card = $credit_card;
    $this->token = $token;
    $this->coupons = $coupons;
  }

  /**
   * @return string|null
   */
  public function getId(): ?string {
    return $this->id;
  }

  /**
   * @return string|null
   */
  public function getBadge(): ?string {
    return $this->badge;
  }

  /**
   * @return string|null
   */
  public function getPassport(): ?string {
    return $this->passport;
  }

  /**
   * @return string|null
   */
  public function getCreditCard(): ?string {
    return $this->credit_card;
  }

  /**
   * @return string|null
   */
  public function getToken(): ?string {
    return $this->token;
  }

  /**
   * @return string|null
   */
  public function getCoupons(): ?string {
    return $this->coupons;
  }
}
