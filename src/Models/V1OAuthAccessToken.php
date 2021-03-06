<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * OAuthAccessToken describes an OAuth access token
 */
class V1OAuthAccessToken implements JsonSerializable
{
    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert recognized schemas to the latest internal value, and may reject unrecognized values. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#resources
     * @var string|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * AuthorizeToken contains the token that authorized this token
     * @var string|null $authorizeToken public property
     */
    public $authorizeToken;

    /**
     * ClientName references the client that created this token.
     * @var string|null $clientName public property
     */
    public $clientName;

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
     * RefreshToken is the value by which this token can be renewed. Can be blank.
     * @var string|null $refreshToken public property
     */
    public $refreshToken;

    /**
     * Scopes is an array of the requested scopes.
     * @var array|null $scopes public property
     */
    public $scopes;

    /**
     * UserName is the user name associated with this token
     * @var string|null $userName public property
     */
    public $userName;

    /**
     * UserUID is the unique UID associated with this token
     * @var string|null $userUID public property
     */
    public $userUID;

    /**
     * Constructor to set initial or default values of member properties
     * @param string       $apiVersion     Initialization value for $this->apiVersion
     * @param string       $authorizeToken Initialization value for $this->authorizeToken
     * @param string       $clientName     Initialization value for $this->clientName
     * @param integer      $expiresIn      Initialization value for $this->expiresIn
     * @param string       $kind           Initialization value for $this->kind
     * @param V1ObjectMeta $metadata       Initialization value for $this->metadata
     * @param string       $redirectURI    Initialization value for $this->redirectURI
     * @param string       $refreshToken   Initialization value for $this->refreshToken
     * @param array        $scopes         Initialization value for $this->scopes
     * @param string       $userName       Initialization value for $this->userName
     * @param string       $userUID        Initialization value for $this->userUID
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->apiVersion     = func_get_arg(0);
            $this->authorizeToken = func_get_arg(1);
            $this->clientName     = func_get_arg(2);
            $this->expiresIn      = func_get_arg(3);
            $this->kind           = func_get_arg(4);
            $this->metadata       = func_get_arg(5);
            $this->redirectURI    = func_get_arg(6);
            $this->refreshToken   = func_get_arg(7);
            $this->scopes         = func_get_arg(8);
            $this->userName       = func_get_arg(9);
            $this->userUID        = func_get_arg(10);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['apiVersion']     = $this->apiVersion;
        $json['authorizeToken'] = $this->authorizeToken;
        $json['clientName']     = $this->clientName;
        $json['expiresIn']      = $this->expiresIn;
        $json['kind']           = $this->kind;
        $json['metadata']       = $this->metadata;
        $json['redirectURI']    = $this->redirectURI;
        $json['refreshToken']   = $this->refreshToken;
        $json['scopes']         = $this->scopes;
        $json['userName']       = $this->userName;
        $json['userUID']        = $this->userUID;

        return $json;
    }
}
