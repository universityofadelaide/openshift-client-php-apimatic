<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * BuildStatusOutputTo describes the status of the built image with regards to image registry to which
 * it was supposed to be pushed.
 */
class V1BuildStatusOutputTo implements JsonSerializable
{
    /**
     * imageDigest is the digest of the built Docker image. The digest uniquely identifies the image in the registry to which it was pushed.
     * Please note that this field may not always be set even if the push completes successfully - e.g. when the registry returns no digest or returns it in a format that the builder doesn't understand.
     * @var string|null $imageDigest public property
     */
    public $imageDigest;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $imageDigest Initialization value for $this->imageDigest
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->imageDigest = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['imageDigest'] = $this->imageDigest;

        return $json;
    }
}
