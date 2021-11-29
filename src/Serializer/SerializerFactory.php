<?php

namespace Tracardi\TracardiPhpSdk\Serializer;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory {

  public static function create(): Serializer {
    return new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
  }

}
