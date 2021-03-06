<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * OAuthAuthorizeToken describes an OAuth authorization token
 */
class V1OAuthAuthorizeToken implements JsonSerializable
{
    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * ClientName references the client that created this token.
     * @var string|null $clientName public property
     */
    public $clientName;

    /**
     * CodeChallenge is the optional code_challenge associated with this authorization code, as described in rfc7636
     * @var string|null $codeChallenge public property
     */
    public $codeChallenge;

    /**
     * CodeChallengeMethod is the optional code_challenge_method associated with this authorization code, as described in rfc7636
     * @var string|null $codeChallengeMethod public property
     */
    public $codeChallengeMethod;

    /**
     * ExpiresIn is the seconds from CreationTime before this token expires.
     * @var integer|null $expiresIn public property
     */
    public $expiresIn;

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
     * RedirectURI is the redirection associated with the token.
     * @var string|null $redirectURI public property
     */
    public $redirectURI;

    /**
     * Scopes is an array of the requested scopes.
     * @var array|null $scopes public property
     */
    public $scopes;

    /**
     * State data from request
     * @var string|null $state public property
     */
    public $state;

    /**
     * UserName is the user name associated with this token
     * @var string|null $userName public property
     */
    public $userName;

    /**
     * UserUID is the unique UID associated with this token. UserUID and UserName must both match for this token to be valid.
     * @var string|null $userUID public property
     */
    public $userUID;

    /**
     * Constructor to set initial or default values of member properties
     * @param string       $apiVersion          Initialization value for $this->apiVersion
     * @param string       $clientName          Initialization value for $this->clientName
     * @param string       $codeChallenge       Initialization value for $this->codeChallenge
     * @param string       $codeChallengeMethod Initialization value for $this->codeChallengeMethod
     * @param integer      $expiresIn           Initialization value for $this->expiresIn
     * @param string       $kind                Initialization value for $this->kind
     * @param V1ObjectMeta $metadata            Initialization value for $this->metadata
     * @param string       $redirectURI         Initialization value for $this->redirectURI
     * @param array        $scopes              Initialization value for $this->scopes
     * @param string       $state               Initialization value for $this->state
     * @param string       $userName            Initialization value for $this->userName
     * @param string       $userUID             Initialization value for $this->userUID
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->apiVersion          = func_get_arg(0);
            $this->clientName          = func_get_arg(1);
            $this->codeChallenge       = func_get_arg(2);
            $this->codeChallengeMethod = func_get_arg(3);
            $this->expiresIn           = func_get_arg(4);
            $this->kind                = func_get_arg(5);
            $this->metadata            = func_get_arg(6);
            $this->redirectURI         = func_get_arg(7);
            $this->scopes              = func_get_arg(8);
            $this->state               = func_get_arg(9);
            $this->userName            = func_get_arg(10);
            $this->userUID             = func_get_arg(11);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['apiVersion']          = $this->apiVersion;
        $json['clientName']          = $this->clientName;
        $json['codeChallenge']       = $this->codeChallenge;
        $json['codeChallengeMethod'] = $this->codeChallengeMethod;
        $json['expiresIn']           = $this->expiresIn;
        $json['kind']                = $this->kind;
        $json['metadata']            = $this->metadata;
        $json['redirectURI']         = $this->redirectURI;
        $json['scopes']              = $this->scopes;
        $json['state']               = $this->state;
        $json['userName']            = $this->userName;
        $json['userUID']             = $this->userUID;

        return $json;
    }
}
