<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * TLSConfig defines config used to secure a route and provide termination
 */
class V1TLSConfig implements JsonSerializable
{
    /**
     * termination indicates termination type.
     * @required
     * @var string $termination public property
     */
    public $termination;

    /**
     * caCertificate provides the cert authority certificate contents
     * @var string|null $caCertificate public property
     */
    public $caCertificate;

    /**
     * certificate provides certificate contents
     * @var string|null $certificate public property
     */
    public $certificate;

    /**
     * destinationCACertificate provides the contents of the ca certificate of the final destination.  When using reencrypt termination this file should be provided in order to have routers use it for health checks on the secure connection. If this field is not specified, the router may provide its own destination CA and perform hostname validation using the short service name (service.namespace.svc), which allows infrastructure generated certificates to automatically verify.
     * @var string|null $destinationCACertificate public property
     */
    public $destinationCACertificate;

    /**
     * insecureEdgeTerminationPolicy indicates the desired behavior for insecure connections to a route. While each router may make its own decisions on which ports to expose, this is normally port 80.
     * * Allow - traffic is sent to the server on the insecure port (default) * Disable - no traffic is allowed on the insecure port. * Redirect - clients are redirected to the secure port.
     * @var string|null $insecureEdgeTerminationPolicy public property
     */
    public $insecureEdgeTerminationPolicy;

    /**
     * key provides key file contents
     * @var string|null $key public property
     */
    public $key;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $termination                   Initialization value for $this->termination
     * @param string $caCertificate                 Initialization value for $this->caCertificate
     * @param string $certificate                   Initialization value for $this->certificate
     * @param string $destinationCACertificate      Initialization value for $this->destinationCACertificate
     * @param string $insecureEdgeTerminationPolicy Initialization value for $this->insecureEdgeTerminationPolicy
     * @param string $key                           Initialization value for $this->key
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->termination                   = func_get_arg(0);
            $this->caCertificate                 = func_get_arg(1);
            $this->certificate                   = func_get_arg(2);
            $this->destinationCACertificate      = func_get_arg(3);
            $this->insecureEdgeTerminationPolicy = func_get_arg(4);
            $this->key                           = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['termination']                   = $this->termination;
        $json['caCertificate']                 = $this->caCertificate;
        $json['certificate']                   = $this->certificate;
        $json['destinationCACertificate']      = $this->destinationCACertificate;
        $json['insecureEdgeTerminationPolicy'] = $this->insecureEdgeTerminationPolicy;
        $json['key']                           = $this->key;

        return $json;
    }
}
