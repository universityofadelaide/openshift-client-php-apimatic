<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * SelfSubjectAccessReviewSpec is a description of the access request.  Exactly one of
 * ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must be set
 */
class V1SelfSubjectAccessReviewSpec implements JsonSerializable
{
    /**
     * NonResourceAttributes describes information for a non-resource access request
     * @var V1NonResourceAttributes|null $nonResourceAttributes public property
     */
    public $nonResourceAttributes;

    /**
     * ResourceAuthorizationAttributes describes information for a resource access request
     * @var V1ResourceAttributes|null $resourceAttributes public property
     */
    public $resourceAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1NonResourceAttributes $nonResourceAttributes Initialization value for $this->nonResourceAttributes
     * @param V1ResourceAttributes    $resourceAttributes    Initialization value for $this->resourceAttributes
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->nonResourceAttributes = func_get_arg(0);
            $this->resourceAttributes    = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['nonResourceAttributes'] = $this->nonResourceAttributes;
        $json['resourceAttributes']    = $this->resourceAttributes;

        return $json;
    }
}
