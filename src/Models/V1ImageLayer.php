<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ImageLayer represents a single layer of the image. Some images may have multiple layers. Some may
 * have none.
 */
class V1ImageLayer implements JsonSerializable
{
    /**
     * MediaType of the referenced object.
     * @required
     * @var string $mediaType public property
     */
    public $mediaType;

    /**
     * Name of the layer as defined by the underlying store.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Size of the layer in bytes as defined by the underlying store.
     * @required
     * @var integer $size public property
     */
    public $size;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $mediaType Initialization value for $this->mediaType
     * @param string  $name      Initialization value for $this->name
     * @param integer $size      Initialization value for $this->size
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->mediaType = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->size      = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['mediaType'] = $this->mediaType;
        $json['name']      = $this->name;
        $json['size']      = $this->size;

        return $json;
    }
}
