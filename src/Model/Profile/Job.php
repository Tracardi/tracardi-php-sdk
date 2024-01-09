<?php

namespace Tracardi\TracardiPhpSdk\Model\Profile;

class Job {

  private ?string $position;

  private ?float $salary;

  private ?string $type;

  private ?Company $company;

  private ?string $department;

  public function __construct(?string $position = null, ?float $salary = null, ?string $type = null, ?Company $company = null, ?string $department = null) {
    $this->position = $position;
    $this->salary = $salary;
    $this->type = $type;
    $this->company = $company;
    $this->department = $department;
  }

  /**
   * @return string|null
   */
  public function getPosition(): ?string {
    return $this->position;
  }

  /**
   * @return float|null
   */
  public function getSalary(): ?float {
    return $this->salary;
  }

  /**
   * @return string|null
   */
  public function getType(): ?string {
    return $this->type;
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Company|null
   */
  public function getCompany(): ?Company {
    return $this->company;
  }

  /**
   * @return string|null
   */
  public function getDepartment(): ?string {
    return $this->department;
  }
}
