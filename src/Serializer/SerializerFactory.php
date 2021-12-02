<?php

namespace Tracardi\TracardiPhpSdk\Serializer;

use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SerializerFactory {

  public static function create(): Serializer {
    return new Serializer(
      [new GroupDenormalizer(), new ArrayDenormalizer(), new ObjectNormalizer(null, null, null, new PhpDocExtractor())],
      [new JsonEncoder()]
    );
  }

}
