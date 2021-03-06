<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * NodeStatus is information about the current status of a node.
 */
class V1NodeStatus implements JsonSerializable
{
    /**
     * List of addresses reachable to the node. Queried from cloud provider, if available. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-addresses
     * @var V1NodeAddress[]|null $addresses public property
     */
    public $addresses;

    /**
     * Allocatable represents the resources of a node that are available for scheduling. Defaults to Capacity.
     * @var array|null $allocatable public property
     */
    public $allocatable;

    /**
     * Capacity represents the total resources of a node. More info: http://kubernetes.io/docs/user-guide/persistent-volumes#capacity for more details.
     * @var array|null $capacity public property
     */
    public $capacity;

    /**
     * Conditions is an array of current observed node conditions. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-condition
     * @var V1NodeCondition[]|null $conditions public property
     */
    public $conditions;

    /**
     * Endpoints of daemons running on the Node.
     * @var V1NodeDaemonEndpoints|null $daemonEndpoints public property
     */
    public $daemonEndpoints;

    /**
     * List of container images on this node
     * @var V1ContainerImage[]|null $images public property
     */
    public $images;

    /**
     * Set of ids/uuids to uniquely identify the node. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-info
     * @var V1NodeSystemInfo|null $nodeInfo public property
     */
    public $nodeInfo;

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More info: http://releases.k8s.io/HEAD/docs/admin/node.md#node-phase The field is never populated, and now is deprecated.
     * @var string|null $phase public property
     */
    public $phase;

    /**
     * List of volumes that are attached to the node.
     * @var V1AttachedVolume[]|null $volumesAttached public property
     */
    public $volumesAttached;

    /**
     * List of attachable volumes in use (mounted) by the node.
     * @var array|null $volumesInUse public property
     */
    public $volumesInUse;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                 $addresses       Initialization value for $this->addresses
     * @param array                 $allocatable     Initialization value for $this->allocatable
     * @param array                 $capacity        Initialization value for $this->capacity
     * @param array                 $conditions      Initialization value for $this->conditions
     * @param V1NodeDaemonEndpoints $daemonEndpoints Initialization value for $this->daemonEndpoints
     * @param array                 $images          Initialization value for $this->images
     * @param V1NodeSystemInfo      $nodeInfo        Initialization value for $this->nodeInfo
     * @param string                $phase           Initialization value for $this->phase
     * @param array                 $volumesAttached Initialization value for $this->volumesAttached
     * @param array                 $volumesInUse    Initialization value for $this->volumesInUse
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->addresses       = func_get_arg(0);
            $this->allocatable     = func_get_arg(1);
            $this->capacity        = func_get_arg(2);
            $this->conditions      = func_get_arg(3);
            $this->daemonEndpoints = func_get_arg(4);
            $this->images          = func_get_arg(5);
            $this->nodeInfo        = func_get_arg(6);
            $this->phase           = func_get_arg(7);
            $this->volumesAttached = func_get_arg(8);
            $this->volumesInUse    = func_get_arg(9);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['addresses']       = $this->addresses;
        $json['allocatable']     = $this->allocatable;
        $json['capacity']        = $this->capacity;
        $json['conditions']      = $this->conditions;
        $json['daemonEndpoints'] = $this->daemonEndpoints;
        $json['images']          = $this->images;
        $json['nodeInfo']        = $this->nodeInfo;
        $json['phase']           = $this->phase;
        $json['volumesAttached'] = $this->volumesAttached;
        $json['volumesInUse']    = $this->volumesInUse;

        return $json;
    }
}
