<?php

namespace Tracardi\TracardiPhpSdk\Serializer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Tracardi\TracardiPhpSdk\Model\Segment\Group;
use Tracardi\TracardiPhpSdk\Model\Segment\Segment;

class GroupDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface {

use DenormalizerAwareTrait;

  public function denormalize($data, $type, $format = NULL, array $context = []) {
    return array_map(function (string $key, array $segments) {
      return new Group($key, $this->denormalizer->denormalize($segments, Segment::class . '[]'));
    }, array_keys($data), $data);
  }

  public function supportsDenormalization($data, $type, $format = NULL) {
    return $type === Group::class . '[]';
  }

}
