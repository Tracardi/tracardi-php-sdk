<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class System {

  private ?Integrations $integrations;

  private ?Aux $aux;

  public function __construct(?Integrations $integrations, ?Aux $aux) {
    $this->integrations = $integrations;
    $this->aux = $aux;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Integrations|null
   */
  public function getIntegrations(): ?Integrations {
    return $this->integrations;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Aux|null
   */
  public function getAux(): ?Aux {
    return $this->aux;
  }
}
