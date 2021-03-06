<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ObjectReference contains enough information to let you inspect or modify the referred object.
 */
class V1ObjectReference implements JsonSerializable
{
    /**
     * API version of the referent.
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * If referring to a piece of an object instead of an entire object, this string should contain a valid JSON/Go field access statement, such as desiredState.manifest.containers[2]. For example, if the object reference is to a container within a pod, this would take on a value like: "spec.containers{name}" (where "name" refers to the name of the container that triggered the event) or if no container name is specified "spec.containers[2]" (container with index 2 in this pod). This syntax is chosen only to have some well-defined way of referencing a part of an object.
     * @var string|null $fieldPath public property
     */
    public $fieldPath;

    /**
     * Kind of the referent. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     * @var string|null $name public property
     */
    public $name;

    /**
     * Namespace of the referent. More info: http://kubernetes.io/docs/user-guide/namespaces
     * @maps namespace
     * @var string|null $mnamespace public property
     */
    public $mnamespace;

    /**
     * Specific resourceVersion to which this reference is made, if any. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#concurrency-control-and-consistency
     * @var string|null $resourceVersion public property
     */
    public $resourceVersion;

    /**
     * UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     * @var string|null $uid public property
     */
    public $uid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $apiVersion      Initialization value for $this->apiVersion
     * @param string $fieldPath       Initialization value for $this->fieldPath
     * @param string $kind            Initialization value for $this->kind
     * @param string $name            Initialization value for $this->name
     * @param string $mnamespace      Initialization value for $this->mnamespace
     * @param string $resourceVersion Initialization value for $this->resourceVersion
     * @param string $uid             Initialization value for $this->uid
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->apiVersion      = func_get_arg(0);
            $this->fieldPath       = func_get_arg(1);
            $this->kind            = func_get_arg(2);
            $this->name            = func_get_arg(3);
            $this->mnamespace      = func_get_arg(4);
            $this->resourceVersion = func_get_arg(5);
            $this->uid             = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['apiVersion']      = $this->apiVersion;
        $json['fieldPath']       = $this->fieldPath;
        $json['kind']            = $this->kind;
        $json['name']            = $this->name;
        $json['namespace']       = $this->mnamespace;
        $json['resourceVersion'] = $this->resourceVersion;
        $json['uid']             = $this->uid;

        return $json;
    }
}
