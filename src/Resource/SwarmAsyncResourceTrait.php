<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait SwarmAsyncResourceTrait
{
    /**
     * @param array                  $parameters        List of parameters
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmInspectNotFoundException
     * @throws \Docker\API\Exception\SwarmInspectInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInspectServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\Swarm>
     */
    public function swarmInspect(array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/swarm';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\Swarm', 'json');
                }
                if (404 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmInspectNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmInspectInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmInspectServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param \Docker\API\Model\SwarmInitPostBody $body
     * @param array                               $parameters        List of parameters
     * @param string                              $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken              $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmInitBadRequestException
     * @throws \Docker\API\Exception\SwarmInitInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmInitServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function swarmInit(\Docker\API\Model\SwarmInitPostBody $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/swarm/init';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json'], 'Content-Type' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return json_decode((yield $response->getBody()));
                }
                if (400 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmInitBadRequestException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmInitInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmInitServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param \Docker\API\Model\SwarmJoinPostBody $body
     * @param array                               $parameters        List of parameters
     * @param string                              $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken              $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmJoinBadRequestException
     * @throws \Docker\API\Exception\SwarmJoinInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmJoinServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function swarmJoin(\Docker\API\Model\SwarmJoinPostBody $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/swarm/join';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json'], 'Content-Type' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return null;
                }
                if (400 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmJoinBadRequestException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmJoinInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmJoinServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param array $parameters {
     *
     *     @var bool $force Force leave swarm, even if this is the last manager or that it will break the cluster.
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmLeaveInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmLeaveServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function swarmLeave(array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->addQueryParameter('force', false, ['bool'], false);
            $url = '/swarm/leave';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return null;
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmLeaveInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmLeaveServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param \Docker\API\Model\SwarmSpec $body
     * @param array                       $parameters {
     *
     *     @var int $version The version number of the swarm object being updated. This is required to avoid conflicting writes.
     *     @var bool $rotateWorkerToken rotate the worker join token
     *     @var bool $rotateManagerToken rotate the manager join token
     *     @var bool $rotateManagerUnlockKey Rotate the manager unlock key.
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmUpdateBadRequestException
     * @throws \Docker\API\Exception\SwarmUpdateInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUpdateServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function swarmUpdate(\Docker\API\Model\SwarmSpec $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->addQueryParameter('version', true, ['int']);
            $queryParam->addQueryParameter('rotateWorkerToken', false, ['bool'], false);
            $queryParam->addQueryParameter('rotateManagerToken', false, ['bool'], false);
            $queryParam->addQueryParameter('rotateManagerUnlockKey', false, ['bool'], false);
            $url = '/swarm/update';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json'], 'Content-Type' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return null;
                }
                if (400 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUpdateBadRequestException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUpdateInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUpdateServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param array                  $parameters        List of parameters
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmUnlockkeyInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUnlockkeyServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\SwarmUnlockkeyGetResponse200>
     */
    public function swarmUnlockkey(array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/swarm/unlockkey';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\SwarmUnlockkeyGetResponse200', 'json');
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUnlockkeyInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUnlockkeyServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param \Docker\API\Model\SwarmUnlockPostBody $body
     * @param array                                 $parameters        List of parameters
     * @param string                                $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken                $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\SwarmUnlockInternalServerErrorException
     * @throws \Docker\API\Exception\SwarmUnlockServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function swarmUnlock(\Docker\API\Model\SwarmUnlockPostBody $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/swarm/unlock';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json'], 'Content-Type' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatus()) {
                    return null;
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUnlockInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\SwarmUnlockServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }
}
