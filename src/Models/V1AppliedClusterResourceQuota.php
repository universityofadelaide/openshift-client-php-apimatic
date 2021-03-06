<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * AppliedClusterResourceQuota mirrors ClusterResourceQuota at a project scope, for projection into a
 * project.  It allows a project-admin to know which ClusterResourceQuotas are applied to his project
 * and their associated usage.
 */
class V1AppliedClusterResourceQuota implements JsonSerializable
{
    /**
     * Standard object's metadata.
     * @required
     * @var V1ObjectMeta $metadata public property
     */
    public $metadata;

    /**
     * Spec defines the desired quota
     * @required
     * @var V1ClusterResourceQuotaSpec $spec public property
     */
    public $spec;

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * Status defines the actual enforced quota and its current usage
     * @var V1ClusterResourceQuotaStatus|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1ObjectMeta                 $metadata   Initialization value for $this->metadata
     * @param V1ClusterResourceQuotaSpec   $spec       Initialization value for $this->spec
     * @param string                       $apiVersion Initialization value for $this->apiVersion
     * @param string                       $kind       Initialization value for $this->kind
     * @param V1ClusterResourceQuotaStatus $status     Initialization value for $this->status
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->metadata   = func_get_arg(0);
            $this->spec       = func_get_arg(1);
            $this->apiVersion = func_get_arg(2);
            $this->kind       = func_get_arg(3);
            $this->status     = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['metadata']   = $this->metadata;
        $json['spec']       = $this->spec;
        $json['apiVersion'] = $this->apiVersion;
        $json['kind']       = $this->kind;
        $json['status']     = $this->status;

        return $json;
    }
}
