<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * HorizontalPodAutoscaler is the configuration for a horizontal pod autoscaler, which automatically
 * manages the replica count of any resource implementing the scale subresource based on the metrics
 * specified.
 */
class V2alpha1HorizontalPodAutoscaler implements JsonSerializable
{
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
     * metadata is the standard object metadata. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata
     * @var V1ObjectMeta|null $metadata public property
     */
    public $metadata;

    /**
     * spec is the specification for the behaviour of the autoscaler. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status.
     * @var V2alpha1HorizontalPodAutoscalerSpec|null $spec public property
     */
    public $spec;

    /**
     * status is the current information about the autoscaler.
     * @var V2alpha1HorizontalPodAutoscalerStatus|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                                $apiVersion Initialization value for $this->apiVersion
     * @param string                                $kind       Initialization value for $this->kind
     * @param V1ObjectMeta                          $metadata   Initialization value for $this->metadata
     * @param V2alpha1HorizontalPodAutoscalerSpec   $spec       Initialization value for $this->spec
     * @param V2alpha1HorizontalPodAutoscalerStatus $status     Initialization value for $this->status
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->apiVersion = func_get_arg(0);
            $this->kind       = func_get_arg(1);
            $this->metadata   = func_get_arg(2);
            $this->spec       = func_get_arg(3);
            $this->status     = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['apiVersion'] = $this->apiVersion;
        $json['kind']       = $this->kind;
        $json['metadata']   = $this->metadata;
        $json['spec']       = $this->spec;
        $json['status']     = $this->status;

        return $json;
    }
}
