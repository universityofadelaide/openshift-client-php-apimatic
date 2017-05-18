<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * PolicyRule holds information that describes a policy rule, but does not contain information about
 * who the rule applies to or which namespace the rule applies to.
 */
class V1beta1PolicyRule implements JsonSerializable
{
    /**
     * Verbs is a list of Verbs that apply to ALL the ResourceKinds and AttributeRestrictions contained in this rule.  VerbAll represents all kinds.
     * @required
     * @var array $verbs public property
     */
    public $verbs;

    /**
     * APIGroups is the name of the APIGroup that contains the resources.  If multiple API groups are specified, any action requested against one of the enumerated resources in any API group will be allowed.
     * @var array|null $apiGroups public property
     */
    public $apiGroups;

    /**
     * NonResourceURLs is a set of partial urls that a user should have access to.  *s are allowed, but only as the full, final step in the path Since non-resource URLs are not namespaced, this field is only applicable for ClusterRoles referenced from a ClusterRoleBinding. Rules can either apply to API resources (such as "pods" or "secrets") or non-resource URL paths (such as "/api"),  but not both.
     * @var array|null $nonResourceURLs public property
     */
    public $nonResourceURLs;

    /**
     * ResourceNames is an optional white list of names that the rule applies to.  An empty set means that everything is allowed.
     * @var array|null $resourceNames public property
     */
    public $resourceNames;

    /**
     * Resources is a list of resources this rule applies to.  ResourceAll represents all resources.
     * @var array|null $resources public property
     */
    public $resources;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $verbs           Initialization value for $this->verbs
     * @param array $apiGroups       Initialization value for $this->apiGroups
     * @param array $nonResourceURLs Initialization value for $this->nonResourceURLs
     * @param array $resourceNames   Initialization value for $this->resourceNames
     * @param array $resources       Initialization value for $this->resources
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->verbs           = func_get_arg(0);
            $this->apiGroups       = func_get_arg(1);
            $this->nonResourceURLs = func_get_arg(2);
            $this->resourceNames   = func_get_arg(3);
            $this->resources       = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['verbs']           = $this->verbs;
        $json['apiGroups']       = $this->apiGroups;
        $json['nonResourceURLs'] = $this->nonResourceURLs;
        $json['resourceNames']   = $this->resourceNames;
        $json['resources']       = $this->resources;

        return $json;
    }
}