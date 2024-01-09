<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Media {

  private ?string $image;

  private ?string $webpage;

  private ?Social $social;

  public function __construct(?string $image = null, ?string $webpage = null, ?Social $social = null) {
    $this->image = $image;
    $this->webpage = $webpage;
    $this->social = $social;
  }

  /**
   * @return string|null
   */
  public function getImage(): ?string {
    return $this->image;
  }

  /**
   * @return string|null
   */
  public function getWebpage(): ?string {
    return $this->webpage;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Social|null
   */
  public function getSocial(): ?Social {
    return $this->social;
  }
}
