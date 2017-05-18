<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * TagImageHook is a request to tag the image in a particular container onto an ImageStreamTag.
 */
class V1TagImageHook implements JsonSerializable
{
    /**
     * ContainerName is the name of a container in the deployment config whose image value will be used as the source of the tag. If there is only a single container this value will be defaulted to the name of that container.
     * @required
     * @var string $containerName public property
     */
    public $containerName;

    /**
     * To is the target ImageStreamTag to set the container's image onto.
     * @required
     * @var V1ObjectReference $to public property
     */
    public $to;

    /**
     * Constructor to set initial or default values of member properties
     * @param string            $containerName Initialization value for $this->containerName
     * @param V1ObjectReference $to            Initialization value for $this->to
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->containerName = func_get_arg(0);
            $this->to            = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['containerName'] = $this->containerName;
        $json['to']            = $this->to;

        return $json;
    }
}
