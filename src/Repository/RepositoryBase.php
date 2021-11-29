<?php

namespace Tracardi\TracardiPhpSdk\Repository;

use Symfony\Component\Serializer\SerializerInterface;
use Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClientInterface;
use Tracardi\TracardiPhpSdk\Request\RequestInterface;

abstract class RepositoryBase {

  /**
   * @var ApiClientInterface
   */
  protected ApiClientInterface $apiClient;

  /**
   * @var SerializerInterface
   */
  protected SerializerInterface $serializer;

  /**
   * @param \Tracardi\TracardiPhpSdk\Http\ApiClient\ApiClientInterface $apiClient
   * @param \Symfony\Component\Serializer\SerializerInterface $serializer
   */
  public function __construct(ApiClientInterface $apiClient, SerializerInterface $serializer) {
    $this->apiClient = $apiClient;
    $this->serializer = $serializer;
  }

  /**
   * @param $data
   * @param array $context
   *
   * @return mixed
   */
  protected function normalize($data, array $context = []) {
    return $this->serializer->normalize($data, 'json', $context);
  }

  /**
   * @param \Tracardi\TracardiPhpSdk\Request\RequestInterface $request
   * @param $responseClass
   *
   * @return mixed
   */
  protected function handleRequest(RequestInterface $request, $responseClass) {
    $response = $this->apiClient->handle($request);
    $responseBody = $response->getBody()->getContents();
    return $this->deserialize($responseBody, $responseClass);
  }

  /**
   * @param $data
   * @param $type
   *
   * @return mixed
   */
  protected function deserialize($data, $type) {
    return $this->serializer->deserialize($data, $type, 'json');
  }

  /**
   * @param \Tracardi\TracardiPhpSdk\Request\RequestInterface $request
   *
   * @return object
   */
  protected function handleRawRequest(RequestInterface $request): object {
    $response = $this->apiClient->handle($request);
    $responseBody = $response->getBody()->getContents();
    return json_decode($responseBody);
  }

}
