<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * Event represents a single event to a watched resource.
 */
class V1WatchEvent implements JsonSerializable
{
    /**
     * Object is:
     *  * If Type is Added or Modified: the new state of the object.
     *  * If Type is Deleted: the state of the object immediately before deletion.
     *  * If Type is Error: *Status is recommended; other types may make sense
     *    depending on context.
     * @required
     * @var RuntimeRawExtension $object public property
     */
    public $object;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param RuntimeRawExtension $object Initialization value for $this->object
     * @param string              $type   Initialization value for $this->type
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->object = func_get_arg(0);
            $this->type   = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['object'] = $this->object;
        $json['type']   = $this->type;

        return $json;
    }
}
