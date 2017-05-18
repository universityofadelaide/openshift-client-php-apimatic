<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * OAuthClient describes an OAuth client
 */
class V1OAuthClient implements JsonSerializable
{
    /**
     * AdditionalSecrets holds other secrets that may be used to identify the client.  This is useful for rotation and for service account token validation
     * @var array|null $additionalSecrets public property
     */
    public $additionalSecrets;

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * GrantMethod determines how to handle grants for this client. If no method is provided, the cluster default grant handling method will be used. Valid grant handling methods are:
     *  - auto:   always approves grant requests, useful for trusted clients
     *  - prompt: prompts the end user for approval of grant requests, useful for third-party clients
     *  - deny:   always denies grant requests, useful for black-listed clients
     * @var string|null $grantMethod public property
     */
    public $grantMethod;

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#types-kinds
     * @var string|null $kind public property
     */
    public $kind;

    /**
     * Standard object's metadata.
     * @var V1ObjectMeta|null $metadata public property
     */
    public $metadata;

    /**
     * RedirectURIs is the valid redirection URIs associated with a client
     * @var array|null $redirectURIs public property
     */
    public $redirectURIs;

    /**
     * RespondWithChallenges indicates whether the client wants authentication needed responses made in the form of challenges instead of redirects
     * @var bool|null $respondWithChallenges public property
     */
    public $respondWithChallenges;

    /**
     * ScopeRestrictions describes which scopes this client can request.  Each requested scope is checked against each restriction.  If any restriction matches, then the scope is allowed. If no restriction matches, then the scope is denied.
     * @var V1ScopeRestriction[]|null $scopeRestrictions public property
     */
    public $scopeRestrictions;

    /**
     * Secret is the unique secret associated with a client
     * @var string|null $secret public property
     */
    public $secret;

    /**
     * Constructor to set initial or default values of member properties
     * @param array        $additionalSecrets     Initialization value for $this->additionalSecrets
     * @param string       $apiVersion            Initialization value for $this->apiVersion
     * @param string       $grantMethod           Initialization value for $this->grantMethod
     * @param string       $kind                  Initialization value for $this->kind
     * @param V1ObjectMeta $metadata              Initialization value for $this->metadata
     * @param array        $redirectURIs          Initialization value for $this->redirectURIs
     * @param bool         $respondWithChallenges Initialization value for $this->respondWithChallenges
     * @param array        $scopeRestrictions     Initialization value for $this->scopeRestrictions
     * @param string       $secret                Initialization value for $this->secret
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->additionalSecrets     = func_get_arg(0);
            $this->apiVersion            = func_get_arg(1);
            $this->grantMethod           = func_get_arg(2);
            $this->kind                  = func_get_arg(3);
            $this->metadata              = func_get_arg(4);
            $this->redirectURIs          = func_get_arg(5);
            $this->respondWithChallenges = func_get_arg(6);
            $this->scopeRestrictions     = func_get_arg(7);
            $this->secret                = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['additionalSecrets']     = $this->additionalSecrets;
        $json['apiVersion']            = $this->apiVersion;
        $json['grantMethod']           = $this->grantMethod;
        $json['kind']                  = $this->kind;
        $json['metadata']              = $this->metadata;
        $json['redirectURIs']          = $this->redirectURIs;
        $json['respondWithChallenges'] = $this->respondWithChallenges;
        $json['scopeRestrictions']     = $this->scopeRestrictions;
        $json['secret']                = $this->secret;

        return $json;
    }
}
