<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * IngressRule represents the rules mapping the paths under a specified host to the related backend
 * services. Incoming requests are first evaluated for a host match, then routed to the backend
 * associated with the matching IngressRuleValue.
 */
class V1beta1IngressRule implements JsonSerializable
{
    /**
     * Host is the fully qualified domain name of a network host, as defined by RFC 3986. Note the following deviations from the "host" part of the URI as defined in the RFC: 1. IPs are not allowed. Currently an IngressRuleValue can only apply to the
     * 	  IP in the Spec of the parent Ingress.
     * 2. The `:` delimiter is not respected because ports are not allowed.
     * 	  Currently the port of an Ingress is implicitly :80 for http and
     * 	  :443 for https.
     * Both these may change in the future. Incoming requests are matched against the host before the IngressRuleValue. If the host is unspecified, the Ingress routes all traffic based on the specified IngressRuleValue.
     * @var string|null $host public property
     */
    public $host;

    /**
     * HTTPIngressRuleValue is a list of http selectors pointing to backends. In the example: http://<host>/<path>?<searchpart> -> backend where where parts of the url correspond to RFC 3986, this resource will be used to match against everything after the last '/' and before the first '?' or '#'.
     * @var V1beta1HTTPIngressRuleValue|null $http public property
     */
    public $http;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                      $host Initialization value for $this->host
     * @param V1beta1HTTPIngressRuleValue $http Initialization value for $this->http
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->host = func_get_arg(0);
            $this->http = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['host'] = $this->host;
        $json['http'] = $this->http;

        return $json;
    }
}