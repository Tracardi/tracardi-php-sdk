<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Pii {

  private ?string $firstname;

  private ?string $lastname;

  private ?string $display_name;

  private ?string $birthday;

  private Language $language;

  private ?string $gender;

  private Education $education;

  private Civil $civil;

  private Attributes $attributes;

  /**
   * Pii constructor.
   * @param string|null $firstname
   * @param string|null $lastname
   * @param string|null $display_name
   * @param string|null $birthday
   * @param Language $language
   * @param string|null $gender
   * @param Education $education
   * @param Civil $civil
   * @param Attributes $attributes
   */
  public function __construct(
    ?string $firstname,
    ?string $lastname,
    ?string $display_name,
    ?string $birthday,
    Language $language,
    ?string $gender,
    Education $education,
    Civil $civil,
    Attributes $attributes
  ) {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->display_name = $display_name;
    $this->birthday = $birthday;
    $this->language = $language;
    $this->gender = $gender;
    $this->education = $education;
    $this->civil = $civil;
    $this->attributes = $attributes;
  }

  /**
   * @return string|null
   */
  public function getFirstname(): ?string {
    return $this->firstname;
  }

  /**
   * @return string|null
   */
  public function getLastname(): ?string {
    return $this->lastname;
  }

  /**
   * @return string|null
   */
  public function getDisplayName(): ?string {
    return $this->display_name;
  }

  /**
   * @return string|null
   */
  public function getBirthday(): ?string {
    return $this->birthday;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Language
   */
  public function getLanguage(): Language {
    return $this->language;
  }

  /**
   * @return string|null
   */
  public function getGender(): ?string {
    return $this->gender;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Education
   */
  public function getEducation(): Education {
    return $this->education;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Civil
   */
  public function getCivil(): Civil {
    return $this->civil;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Attributes
   */
  public function getAttributes(): Attributes {
    return $this->attributes;
  }
}
