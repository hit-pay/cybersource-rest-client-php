<?php
/**
 * PtsV2PaymentsCapturesPost201ResponseProcessorInformation
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
 * PtsV2PaymentsCapturesPost201ResponseProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsCapturesPost201ResponseProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsCapturesPost201Response_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'string',
        'networkTransactionId' => 'string',
        'responseDetails' => 'string',
        'responseCode' => 'string',
        'providerResponse' => 'string',
        'updateTimeUtc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'networkTransactionId' => null,
        'responseDetails' => null,
        'responseCode' => null,
        'providerResponse' => null,
        'updateTimeUtc' => null
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
        'transactionId' => 'transactionId',
        'networkTransactionId' => 'networkTransactionId',
        'responseDetails' => 'responseDetails',
        'responseCode' => 'responseCode',
        'providerResponse' => 'providerResponse',
        'updateTimeUtc' => 'updateTimeUtc'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'networkTransactionId' => 'setNetworkTransactionId',
        'responseDetails' => 'setResponseDetails',
        'responseCode' => 'setResponseCode',
        'providerResponse' => 'setProviderResponse',
        'updateTimeUtc' => 'setUpdateTimeUtc'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'networkTransactionId' => 'getNetworkTransactionId',
        'responseDetails' => 'getResponseDetails',
        'responseCode' => 'getResponseCode',
        'providerResponse' => 'getProviderResponse',
        'updateTimeUtc' => 'getUpdateTimeUtc'
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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['networkTransactionId'] = isset($data['networkTransactionId']) ? $data['networkTransactionId'] : null;
        $this->container['responseDetails'] = isset($data['responseDetails']) ? $data['responseDetails'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['providerResponse'] = isset($data['providerResponse']) ? $data['providerResponse'] : null;
        $this->container['updateTimeUtc'] = isset($data['updateTimeUtc']) ? $data['updateTimeUtc'] : null;
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
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Processor transaction ID.  This value identifies the transaction on a host system. This value is supported only for Moneris. It contains this information:   - Terminal used to process the transaction  - Shift during which the transaction took place  - Batch number  - Transaction number within the batch  You must store this value. If you give the customer a receipt, display this value on the receipt.  Example For the value 66012345001069003:   - Terminal ID = 66012345  - Shift number = 001  - Batch number = 069  - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets networkTransactionId
     * @return string
     */
    public function getNetworkTransactionId()
    {
        return $this->container['networkTransactionId'];
    }

    /**
     * Sets networkTransactionId
     * @param string $networkTransactionId Network Transaction Identifier Applicable for online capture transactions only.
     * @return $this
     */
    public function setNetworkTransactionId($networkTransactionId)
    {
        $this->container['networkTransactionId'] = $networkTransactionId;

        return $this;
    }

    /**
     * Gets responseDetails
     * @return string
     */
    public function getResponseDetails()
    {
        return $this->container['responseDetails'];
    }

    /**
     * Sets responseDetails
     * @param string $responseDetails The processor code that describes why the transaction state is pending or reversed.
     * @return $this
     */
    public function setResponseDetails($responseDetails)
    {
        $this->container['responseDetails'] = $responseDetails;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode For most processors, this is the error message sent directly from the bank. Returned only when the processor returns this value.  **Important** Do not use this field to evaluate the result of the authorization.  #### PIN debit Response value that is returned by the processor or bank. **Important** Do not use this field to evaluate the results of the transaction request.  Returned by PIN debit credit, PIN debit purchase, and PIN debit reversal.  #### AIBMS If this value is `08`, you can accept the transaction if the customer provides you with identification.  #### Atos This value is the response code sent from Atos and it might also include the response code from the bank. Format: `aa,bb` with the two values separated by a comma and where: - `aa` is the two-digit error message from Atos. - `bb` is the optional two-digit error message from the bank.  #### Comercio Latino This value is the status code and the error or response code received from the processor separated by a colon. Format: [status code]:E[error code] or [status code]:R[response code] Example `2:R06`  #### JCN Gateway Processor-defined detail error code. The associated response category code is in the `processorInformation.responseCategoryCode` field. String (3)  #### paypalgateway Processor generated ID for the itemized detail.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets providerResponse
     * @return string
     */
    public function getProviderResponse()
    {
        return $this->container['providerResponse'];
    }

    /**
     * Sets providerResponse
     * @param string $providerResponse Processor response to the API request.
     * @return $this
     */
    public function setProviderResponse($providerResponse)
    {
        $this->container['providerResponse'] = $providerResponse;

        return $this;
    }

    /**
     * Gets updateTimeUtc
     * @return string
     */
    public function getUpdateTimeUtc()
    {
        return $this->container['updateTimeUtc'];
    }

    /**
     * Sets updateTimeUtc
     * @param string $updateTimeUtc The date and time when the transaction was last updated, in Internet date and time format.
     * @return $this
     */
    public function setUpdateTimeUtc($updateTimeUtc)
    {
        $this->container['updateTimeUtc'] = $updateTimeUtc;

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


