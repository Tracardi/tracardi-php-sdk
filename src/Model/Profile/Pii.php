<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Pii {

  private ?string $name;

  private ?string $surname;

  private ?string $birthDate;

  private ?string $email;

  private ?string $telephone;

  private ?string $twitter;

  private ?string $facebook;

  private ?string $whatsapp;

  private array $other;

  public function __construct(?string $name, ?string $surname, ?string $birthDate, ?string $email, ?string $telephone, ?string $twitter, ?string $facebook, ?string $whatsapp, array $other) {
    $this->name = $name;
    $this->surname = $surname;
    $this->birthDate = $birthDate;
    $this->email = $email;
    $this->telephone = $telephone;
    $this->twitter = $twitter;
    $this->facebook = $facebook;
    $this->whatsapp = $whatsapp;
    $this->other = $other;
  }

  /**
   * @return string|null
   */
  public function getName(): ?string {
    return $this->name;
  }

  /**
   * @return string|null
   */
  public function getSurname(): ?string {
    return $this->surname;
  }

  /**
   * @return string|null
   */
  public function getBirthDate(): ?string {
    return $this->birthDate;
  }

  /**
   * @return string|null
   */
  public function getEmail(): ?string {
    return $this->email;
  }

  /**
   * @return string|null
   */
  public function getTelephone(): ?string {
    return $this->telephone;
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
  public function getWhatsapp(): ?string {
    return $this->whatsapp;
  }

  /**
   * @return array
   */
  public function getOther(): array {
    return $this->other;
  }

}
