<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Contact {

  private Email $email;

  private Phone $phone;

  private App $app;

  private Address $address;

  private ?array $confirmations;

  public function __construct(
    Email $email,
    Phone $phone,
    App $app,
    Address $address,
    ?array $confirmations
  ) {
    $this->email = $email;
    $this->phone = $phone;
    $this->app = $app;
    $this->address = $address;
    $this->confirmations = $confirmations;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Email
   */
  public function getEmail(): Email {
    return $this->email;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Phone
   */
  public function getPhone(): Phone {
    return $this->phone;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\App
   */
  public function getApp(): App {
    return $this->app;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Address
   */
  public function getAddress(): Address {
    return $this->address;
  }

  /**
   * @return array
   */
  public function getConfirmations(): ?array {
    return $this->confirmations;
  }
}
