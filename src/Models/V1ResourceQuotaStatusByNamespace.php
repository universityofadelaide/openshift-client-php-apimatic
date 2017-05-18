<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ResourceQuotaStatusByNamespace gives status for a particular project
 */
class V1ResourceQuotaStatusByNamespace implements JsonSerializable
{
    /**
     * Namespace the project this status applies to
     * @required
     * @maps namespace
     * @var string $mnamespace public property
     */
    public $mnamespace;

    /**
     * Status indicates how many resources have been consumed by this project
     * @required
     * @var V1ResourceQuotaStatus $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                $mnamespace Initialization value for $this->mnamespace
     * @param V1ResourceQuotaStatus $status     Initialization value for $this->status
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->mnamespace = func_get_arg(0);
            $this->status     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['namespace'] = $this->mnamespace;
        $json['status']    = $this->status;

        return $json;
    }
}