<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * An empty preferred scheduling term matches all objects with implicit weight 0 (i.e. it's a no-op). A
 * null preferred scheduling term matches no objects (i.e. is also a no-op).
 */
class V1PreferredSchedulingTerm implements JsonSerializable
{
    /**
     * A node selector term, associated with the corresponding weight.
     * @required
     * @var V1NodeSelectorTerm $preference public property
     */
    public $preference;

    /**
     * Weight associated with matching the corresponding nodeSelectorTerm, in the range 1-100.
     * @required
     * @var integer $weight public property
     */
    public $weight;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1NodeSelectorTerm $preference Initialization value for $this->preference
     * @param integer            $weight     Initialization value for $this->weight
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->preference = func_get_arg(0);
            $this->weight     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['preference'] = $this->preference;
        $json['weight']     = $this->weight;

        return $json;
    }
}