<?php

namespace Tracardi\TracardiPhpSdk\Repository;

use Tracardi\TracardiPhpSdk\Model\Profile\Profile;
use Tracardi\TracardiPhpSdk\Request\Profile\ProfileInfoRequest;

class ProfileRepository extends RepositoryBase {

  /**
   * @param string $id
   *
   * @return \Tracardi\TracardiPhpSdk\Model\Profile\Profile
   * @throws \Exception
   */
  public function getProfile(string $id): Profile {
    $request = new ProfileInfoRequest($id);

    return $this->handleRequest(
      $request,
      Profile::class
    );
  }

}
