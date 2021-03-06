<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\SwarmInfo';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\SwarmInfo;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\SwarmInfo();
        if (property_exists($data, 'NodeID') && $data->{'NodeID'} !== null) {
            $object->setNodeID($data->{'NodeID'});
        }
        if (property_exists($data, 'NodeAddr') && $data->{'NodeAddr'} !== null) {
            $object->setNodeAddr($data->{'NodeAddr'});
        }
        if (property_exists($data, 'LocalNodeState') && $data->{'LocalNodeState'} !== null) {
            $object->setLocalNodeState($data->{'LocalNodeState'});
        }
        if (property_exists($data, 'ControlAvailable') && $data->{'ControlAvailable'} !== null) {
            $object->setControlAvailable($data->{'ControlAvailable'});
        }
        if (property_exists($data, 'Error') && $data->{'Error'} !== null) {
            $object->setError($data->{'Error'});
        }
        if (property_exists($data, 'RemoteManagers') && $data->{'RemoteManagers'} !== null) {
            $values = [];
            foreach ($data->{'RemoteManagers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\PeerNode', 'json', $context);
            }
            $object->setRemoteManagers($values);
        }
        if (property_exists($data, 'Nodes') && $data->{'Nodes'} !== null) {
            $object->setNodes($data->{'Nodes'});
        }
        if (property_exists($data, 'Managers') && $data->{'Managers'} !== null) {
            $object->setManagers($data->{'Managers'});
        }
        if (property_exists($data, 'Cluster') && $data->{'Cluster'} !== null) {
            $object->setCluster($this->denormalizer->denormalize($data->{'Cluster'}, 'Docker\\API\\Model\\ClusterInfo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNodeID()) {
            $data->{'NodeID'} = $object->getNodeID();
        }
        if (null !== $object->getNodeAddr()) {
            $data->{'NodeAddr'} = $object->getNodeAddr();
        }
        if (null !== $object->getLocalNodeState()) {
            $data->{'LocalNodeState'} = $object->getLocalNodeState();
        }
        if (null !== $object->getControlAvailable()) {
            $data->{'ControlAvailable'} = $object->getControlAvailable();
        }
        if (null !== $object->getError()) {
            $data->{'Error'} = $object->getError();
        }
        if (null !== $object->getRemoteManagers()) {
            $values = [];
            foreach ($object->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'RemoteManagers'} = $values;
        }
        if (null !== $object->getNodes()) {
            $data->{'Nodes'} = $object->getNodes();
        }
        if (null !== $object->getManagers()) {
            $data->{'Managers'} = $object->getManagers();
        }
        if (null !== $object->getCluster()) {
            $data->{'Cluster'} = $this->normalizer->normalize($object->getCluster(), 'json', $context);
        }

        return $data;
    }
}
