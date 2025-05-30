<?php
/**
 * InlineResponse2012
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * InlineResponse2012 Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2012 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'submitTimeUtc' => '\DateTime',
        'status' => 'string',
        'registrationInformation' => '\CyberSource\Model\InlineResponse2012RegistrationInformation',
        'integrationInformation' => '\CyberSource\Model\InlineResponse2012IntegrationInformation',
        'organizationInformation' => '\CyberSource\Model\InlineResponse2012OrganizationInformation',
        'productInformationSetups' => '\CyberSource\Model\InlineResponse2012ProductInformationSetups[]',
        'message' => 'string',
        'details' => 'map[string,object[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'submitTimeUtc' => 'date-time',
        'status' => null,
        'registrationInformation' => null,
        'integrationInformation' => null,
        'organizationInformation' => null,
        'productInformationSetups' => null,
        'message' => null,
        'details' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'submitTimeUtc' => 'submitTimeUtc',
        'status' => 'status',
        'registrationInformation' => 'registrationInformation',
        'integrationInformation' => 'integrationInformation',
        'organizationInformation' => 'organizationInformation',
        'productInformationSetups' => 'productInformationSetups',
        'message' => 'message',
        'details' => 'details'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'submitTimeUtc' => 'setSubmitTimeUtc',
        'status' => 'setStatus',
        'registrationInformation' => 'setRegistrationInformation',
        'integrationInformation' => 'setIntegrationInformation',
        'organizationInformation' => 'setOrganizationInformation',
        'productInformationSetups' => 'setProductInformationSetups',
        'message' => 'setMessage',
        'details' => 'setDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'submitTimeUtc' => 'getSubmitTimeUtc',
        'status' => 'getStatus',
        'registrationInformation' => 'getRegistrationInformation',
        'integrationInformation' => 'getIntegrationInformation',
        'organizationInformation' => 'getOrganizationInformation',
        'productInformationSetups' => 'getProductInformationSetups',
        'message' => 'getMessage',
        'details' => 'getDetails'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['submitTimeUtc'] = isset($data['submitTimeUtc']) ? $data['submitTimeUtc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['registrationInformation'] = isset($data['registrationInformation']) ? $data['registrationInformation'] : null;
        $this->container['integrationInformation'] = isset($data['integrationInformation']) ? $data['integrationInformation'] : null;
        $this->container['organizationInformation'] = isset($data['organizationInformation']) ? $data['organizationInformation'] : null;
        $this->container['productInformationSetups'] = isset($data['productInformationSetups']) ? $data['productInformationSetups'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets submitTimeUtc
     * @return \DateTime
     */
    public function getSubmitTimeUtc()
    {
        return $this->container['submitTimeUtc'];
    }

    /**
     * Sets submitTimeUtc
     * @param \DateTime $submitTimeUtc Time of request in UTC. `Format: YYYY-MM-DDThh:mm:ssZ`  Example 2016-08-11T22:47:57Z equals August 11, 2016, at 22:47:57 (10:47:57 p.m.). The T separates the date and the time. The Z indicates UTC.
     * @return $this
     */
    public function setSubmitTimeUtc($submitTimeUtc)
    {
        $this->container['submitTimeUtc'] = $submitTimeUtc;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status of Registration request Possible Values:   - 'INITIALIZED'   - 'RECEIVED'   - 'PROCESSING'   - 'SUCCESS'   - 'FAILURE'   - 'PARTIAL'
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets registrationInformation
     * @return \CyberSource\Model\InlineResponse2012RegistrationInformation
     */
    public function getRegistrationInformation()
    {
        return $this->container['registrationInformation'];
    }

    /**
     * Sets registrationInformation
     * @param \CyberSource\Model\InlineResponse2012RegistrationInformation $registrationInformation
     * @return $this
     */
    public function setRegistrationInformation($registrationInformation)
    {
        $this->container['registrationInformation'] = $registrationInformation;

        return $this;
    }

    /**
     * Gets integrationInformation
     * @return \CyberSource\Model\InlineResponse2012IntegrationInformation
     */
    public function getIntegrationInformation()
    {
        return $this->container['integrationInformation'];
    }

    /**
     * Sets integrationInformation
     * @param \CyberSource\Model\InlineResponse2012IntegrationInformation $integrationInformation
     * @return $this
     */
    public function setIntegrationInformation($integrationInformation)
    {
        $this->container['integrationInformation'] = $integrationInformation;

        return $this;
    }

    /**
     * Gets organizationInformation
     * @return \CyberSource\Model\InlineResponse2012OrganizationInformation
     */
    public function getOrganizationInformation()
    {
        return $this->container['organizationInformation'];
    }

    /**
     * Sets organizationInformation
     * @param \CyberSource\Model\InlineResponse2012OrganizationInformation $organizationInformation
     * @return $this
     */
    public function setOrganizationInformation($organizationInformation)
    {
        $this->container['organizationInformation'] = $organizationInformation;

        return $this;
    }

    /**
     * Gets productInformationSetups
     * @return \CyberSource\Model\InlineResponse2012ProductInformationSetups[]
     */
    public function getProductInformationSetups()
    {
        return $this->container['productInformationSetups'];
    }

    /**
     * Sets productInformationSetups
     * @param \CyberSource\Model\InlineResponse2012ProductInformationSetups[] $productInformationSetups
     * @return $this
     */
    public function setProductInformationSetups($productInformationSetups)
    {
        $this->container['productInformationSetups'] = $productInformationSetups;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets details
     * @return map[string,object[]]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param map[string,object[]] $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


