<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * HTTPIngressPath associates a path regex with a backend. Incoming urls matching the path are
 * forwarded to the backend.
 */
class V1beta1HTTPIngressPath implements JsonSerializable
{
    /**
     * Backend defines the referenced service endpoint to which the traffic will be forwarded to.
     * @required
     * @var V1beta1IngressBackend $backend public property
     */
    public $backend;

    /**
     * Path is an extended POSIX regex as defined by IEEE Std 1003.1, (i.e this follows the egrep/unix syntax, not the perl syntax) matched against the path of an incoming request. Currently it can contain characters disallowed from the conventional "path" part of a URL as defined by RFC 3986. Paths must begin with a '/'. If unspecified, the path defaults to a catch all sending traffic to the backend.
     * @var string|null $path public property
     */
    public $path;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1beta1IngressBackend $backend Initialization value for $this->backend
     * @param string                $path    Initialization value for $this->path
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->backend = func_get_arg(0);
            $this->path    = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['backend'] = $this->backend;
        $json['path']    = $this->path;

        return $json;
    }
}
