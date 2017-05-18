<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * TagEvent is used by ImageStreamStatus to keep a historical record of images associated with a tag.
 */
class V1TagEvent implements JsonSerializable
{
    /**
     * Created holds the time the TagEvent was created
     * @required
     * @var string $created public property
     */
    public $created;

    /**
     * DockerImageReference is the string that can be used to pull this image
     * @required
     * @var string $dockerImageReference public property
     */
    public $dockerImageReference;

    /**
     * Generation is the spec tag generation that resulted in this tag being updated
     * @required
     * @var integer $generation public property
     */
    public $generation;

    /**
     * Image is the image
     * @required
     * @var string $image public property
     */
    public $image;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $created              Initialization value for $this->created
     * @param string  $dockerImageReference Initialization value for $this->dockerImageReference
     * @param integer $generation           Initialization value for $this->generation
     * @param string  $image                Initialization value for $this->image
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->created              = func_get_arg(0);
            $this->dockerImageReference = func_get_arg(1);
            $this->generation           = func_get_arg(2);
            $this->image                = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['created']              = $this->created;
        $json['dockerImageReference'] = $this->dockerImageReference;
        $json['generation']           = $this->generation;
        $json['image']                = $this->image;

        return $json;
    }
}