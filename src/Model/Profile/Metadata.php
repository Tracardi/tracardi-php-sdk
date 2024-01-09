<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Metadata {

  private Time $time;

  private ?Aux $aux;

  private ?bool $status;

  private System $system;

  public function __construct(Time $time, ?Aux $aux, ?bool $status, System $system) {
    $this->time = $time;
    $this->aux = $aux;
    $this->status = $status;
    $this->system = $system;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Time
   */
  public function getTime(): Time {
    return $this->time;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Aux|null
   */
  public function getAux(): ?Aux {
    return $this->aux;
  }

  /**
   * @return bool
   */
  public function getStatus(): ?bool {
    return $this->status;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\System
   */
  public function getSystem(): System {
    return $this->system;
  }
}
