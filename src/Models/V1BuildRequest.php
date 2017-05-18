<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * BuildRequest is the resource used to pass parameters to build generator
 */
class V1BuildRequest implements JsonSerializable
{
    /**
     * triggeredBy describes which triggers started the most recent update to the build configuration and contains information about those triggers.
     * @required
     * @var V1BuildTriggerCause[] $triggeredBy public property
     */
    public $triggeredBy;

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * binary indicates a request to build from a binary provided to the builder
     * @var V1BinaryBuildSource|null $binary public property
     */
    public $binary;

    /**
     * DockerStrategyOptions contains additional docker-strategy specific options for the build
     * @var V1DockerStrategyOptions|null $dockerStrategyOptions public property
     */
    public $dockerStrategyOptions;

    /**
     * env contains additional environment variables you want to pass into a builder container. ValueFrom is not supported.
     * @var V1EnvVar[]|null $env public property
     */
    public $env;

    /**
     * from is the reference to the ImageStreamTag that triggered the build.
     * @var V1ObjectReference|null $from public property
     */
    public $from;

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * lastVersion (optional) is the LastVersion of the BuildConfig that was used to generate the build. If the BuildConfig in the generator doesn't match, a build will not be generated.
     * @var integer|null $lastVersion public property
     */
    public $lastVersion;

    /**
     * metadata for BuildRequest.
     * @var V1ObjectMeta|null $metadata public property
     */
    public $metadata;

    /**
     * revision is the information from the source for a specific repo snapshot.
     * @var V1SourceRevision|null $revision public property
     */
    public $revision;

    /**
     * triggeredByImage is the Image that triggered this build.
     * @var V1ObjectReference|null $triggeredByImage public property
     */
    public $triggeredByImage;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                   $triggeredBy           Initialization value for $this->triggeredBy
     * @param string                  $apiVersion            Initialization value for $this->apiVersion
     * @param V1BinaryBuildSource     $binary                Initialization value for $this->binary
     * @param V1DockerStrategyOptions $dockerStrategyOptions Initialization value for $this->dockerStrategyOptions
     * @param array                   $env                   Initialization value for $this->env
     * @param V1ObjectReference       $from                  Initialization value for $this->from
     * @param string                  $kind                  Initialization value for $this->kind
     * @param integer                 $lastVersion           Initialization value for $this->lastVersion
     * @param V1ObjectMeta            $metadata              Initialization value for $this->metadata
     * @param V1SourceRevision        $revision              Initialization value for $this->revision
     * @param V1ObjectReference       $triggeredByImage      Initialization value for $this->triggeredByImage
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->triggeredBy           = func_get_arg(0);
            $this->apiVersion            = func_get_arg(1);
            $this->binary                = func_get_arg(2);
            $this->dockerStrategyOptions = func_get_arg(3);
            $this->env                   = func_get_arg(4);
            $this->from                  = func_get_arg(5);
            $this->kind                  = func_get_arg(6);
            $this->lastVersion           = func_get_arg(7);
            $this->metadata              = func_get_arg(8);
            $this->revision              = func_get_arg(9);
            $this->triggeredByImage      = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['triggeredBy']           = $this->triggeredBy;
        $json['apiVersion']            = $this->apiVersion;
        $json['binary']                = $this->binary;
        $json['dockerStrategyOptions'] = $this->dockerStrategyOptions;
        $json['env']                   = $this->env;
        $json['from']                  = $this->from;
        $json['kind']                  = $this->kind;
        $json['lastVersion']           = $this->lastVersion;
        $json['metadata']              = $this->metadata;
        $json['revision']              = $this->revision;
        $json['triggeredByImage']      = $this->triggeredByImage;

        return $json;
    }
}