<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * ClusterResourceQuotaSelector is used to select projects.  At least one of LabelSelector or
 * AnnotationSelector must present.  If only one is present, it is the only selection criteria.  If
 * both are specified, the project must match both restrictions.
 */
class V1ClusterResourceQuotaSelector implements JsonSerializable
{
    /**
     * AnnotationSelector is used to select projects by annotation.
     * @required
     * @var array $annotations public property
     */
    public $annotations;

    /**
     * LabelSelector is used to select projects by label.
     * @required
     * @var V1LabelSelector $labels public property
     */
    public $labels;

    /**
     * Constructor to set initial or default values of member properties
     * @param array           $annotations Initialization value for $this->annotations
     * @param V1LabelSelector $labels      Initialization value for $this->labels
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->annotations = func_get_arg(0);
            $this->labels      = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['annotations'] = $this->annotations;
        $json['labels']      = $this->labels;

        return $json;
    }
}