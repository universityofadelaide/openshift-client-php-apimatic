<?php
/*
 * OpenShiftAPIWithKubernetesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace OpenShiftAPIWithKubernetesLib\Controllers;

use OpenShiftAPIWithKubernetesLib\APIException;
use OpenShiftAPIWithKubernetesLib\APIHelper;
use OpenShiftAPIWithKubernetesLib\Configuration;
use OpenShiftAPIWithKubernetesLib\Models;
use OpenShiftAPIWithKubernetesLib\Exceptions;
use OpenShiftAPIWithKubernetesLib\Http\HttpRequest;
use OpenShiftAPIWithKubernetesLib\Http\HttpResponse;
use OpenShiftAPIWithKubernetesLib\Http\HttpMethod;
use OpenShiftAPIWithKubernetesLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class NetworkOpenshiftIoController extends BaseController
{
    /**
     * @var NetworkOpenshiftIoController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return NetworkOpenshiftIoController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * get information of a group
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getNetworkOpenshiftIoAPIGroup()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/apis/network.openshift.io/';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'OpenShiftAPIWithKubernetesLib\\Models\\V1APIGroup');
    }
}
