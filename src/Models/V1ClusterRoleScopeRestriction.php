<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ClusterRoleScopeRestriction describes restrictions on cluster role scopes
 */
class V1ClusterRoleScopeRestriction implements JsonSerializable
{
    /**
     * AllowEscalation indicates whether you can request roles and their escalating resources
     * @required
     * @var bool $allowEscalation public property
     */
    public $allowEscalation;

    /**
     * Namespaces is the list of namespaces that can be referenced.  * means any of them (including *)
     * @required
     * @var array $namespaces public property
     */
    public $namespaces;

    /**
     * RoleNames is the list of cluster roles that can referenced.  * means anything
     * @required
     * @var array $roleNames public property
     */
    public $roleNames;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool  $allowEscalation Initialization value for $this->allowEscalation
     * @param array $namespaces      Initialization value for $this->namespaces
     * @param array $roleNames       Initialization value for $this->roleNames
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->allowEscalation = func_get_arg(0);
            $this->namespaces      = func_get_arg(1);
            $this->roleNames       = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['allowEscalation'] = $this->allowEscalation;
        $json['namespaces']      = $this->namespaces;
        $json['roleNames']       = $this->roleNames;

        return $json;
    }
}
