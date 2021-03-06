<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * JobTemplateSpec describes the data a Job should have when created from a template
 */
class V2alpha1JobTemplateSpec implements JsonSerializable
{
    /**
     * Standard object's metadata of the jobs created from this template. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#metadata
     * @var V1ObjectMeta|null $metadata public property
     */
    public $metadata;

    /**
     * Specification of the desired behavior of the job. More info: http://releases.k8s.io/HEAD/docs/devel/api-conventions.md#spec-and-status
     * @var V1JobSpec|null $spec public property
     */
    public $spec;

    /**
     * Constructor to set initial or default values of member properties
     * @param V1ObjectMeta $metadata Initialization value for $this->metadata
     * @param V1JobSpec    $spec     Initialization value for $this->spec
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->metadata = func_get_arg(0);
            $this->spec     = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['metadata'] = $this->metadata;
        $json['spec']     = $this->spec;

        return $json;
    }
}
