<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Models;

use JsonSerializable;

/**
 * RawExtension is used to hold extensions in external versions.
 *
 * To use this, make a field which has RawExtension as its type in your external, versioned struct, and
 * Object in your internal struct. You also need to register your various plugin types.
 *
 * // Internal package: type MyAPIObject struct {
 * runtime.TypeMeta `json:",inline"`
 * MyPlugin runtime.Object `json:"myPlugin"`
 * } type PluginA struct {
 * AOption string `json:"aOption"`
 * }
 *
 * // External package: type MyAPIObject struct {
 * runtime.TypeMeta `json:",inline"`
 * MyPlugin runtime.RawExtension `json:"myPlugin"`
 * } type PluginA struct {
 * AOption string `json:"aOption"`
 * }
 *
 * // On the wire, the JSON will look something like this: {
 * "kind":"MyAPIObject",
 * "apiVersion":"v1",
 * "myPlugin": {
 * "kind":"PluginA",
 * "aOption":"foo",
 * },
 * }
 *
 * So what happens? Decode first uses json or yaml to unmarshal the serialized data into your external
 * MyAPIObject. That causes the raw JSON to be stored, but not unpacked. The next step is to copy
 * (using pkg/conversion) into the internal struct. The runtime package's DefaultScheme has conversion
 * functions installed which will unpack the JSON stored in RawExtension, turning it into the correct
 * object type, and storing it in the Object. (TODO: In the case where the object is of an unknown type,
 * a runtime.Unknown object will be created and stored.)
 */
class RuntimeRawExtension implements JsonSerializable
{
    /**
     * Raw is the underlying serialization of this object.
     * @required
     * @maps Raw
     * @var string $raw public property
     */
    public $raw;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $raw Initialization value for $this->raw
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->raw = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Raw'] = $this->raw;

        return $json;
    }
}
