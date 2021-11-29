<?php

namespace Tracardi\TracardiPhpSdk;

use Symfony\Component\Serializer\SerializerInterface;
use Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClientInterface;
use Tracardi\TracardiPhpSdk\Repository\ProfileRepository;
use Tracardi\TracardiPhpSdk\Repository\SegmentRepository;
use Tracardi\TracardiPhpSdk\Serializer\SerializerFactory;

class Tracardi {

  /**
   * @var \Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClientInterface
   */
  private ApiClientInterface $apiClient;

  /**
   * @var \Symfony\Component\Serializer\SerializerInterface
   */
  private SerializerInterface $serializer;

  /**
   * @param \Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClientInterface $apiClient
   * @param \Symfony\Component\Serializer\SerializerInterface $serializer
   */
  public function __construct(ApiClientInterface $apiClient, SerializerInterface $serializer) {
    $this->apiClient = $apiClient;
    $this->serializer = $serializer;
  }

  /**
   * @param \Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClientInterface $apiClient
   *
   * @return \Tracardi\TracardiPhpSdk\Tracardi
   */
  public static function withDefaultSerializer(ApiClientInterface $apiClient): Tracardi {
    return new static($apiClient, SerializerFactory::create());
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Repository\ProfileRepository
   */
  public function profiles(): ProfileRepository {
    return new ProfileRepository($this->apiClient, $this->serializer);
  }

  /**
   * @return \Tracardi\TracardiPhpSdk\Repository\SegmentRepository
   */
  public function segments(): SegmentRepository {
    return new SegmentRepository($this->apiClient, $this->serializer);
  }

}
