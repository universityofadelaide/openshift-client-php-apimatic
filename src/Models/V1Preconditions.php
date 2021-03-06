<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Preconditions must be fulfilled before an operation (update, delete, etc.) is carried out.
 */
class V1Preconditions implements JsonSerializable
{
    /**
     * Specifies the target UID.
     * @var string|null $uid public property
     */
    public $uid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $uid Initialization value for $this->uid
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->uid = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['uid'] = $this->uid;

        return $json;
    }
}
