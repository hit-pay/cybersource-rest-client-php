<?php
/**
 * Ptsv2paymentsProcessingInformationPurchaseOptions
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
 * Ptsv2paymentsProcessingInformationPurchaseOptions Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2paymentsProcessingInformationPurchaseOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2payments_processingInformation_purchaseOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isElectronicBenefitsTransfer' => 'bool',
        'type' => 'string',
        'eligibilityIndicator' => 'string',
        'benefitAmount' => 'string',
        'benefitType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'isElectronicBenefitsTransfer' => null,
        'type' => null,
        'eligibilityIndicator' => null,
        'benefitAmount' => null,
        'benefitType' => null
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
        'isElectronicBenefitsTransfer' => 'isElectronicBenefitsTransfer',
        'type' => 'type',
        'eligibilityIndicator' => 'eligibilityIndicator',
        'benefitAmount' => 'benefitAmount',
        'benefitType' => 'benefitType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'isElectronicBenefitsTransfer' => 'setIsElectronicBenefitsTransfer',
        'type' => 'setType',
        'eligibilityIndicator' => 'setEligibilityIndicator',
        'benefitAmount' => 'setBenefitAmount',
        'benefitType' => 'setBenefitType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'isElectronicBenefitsTransfer' => 'getIsElectronicBenefitsTransfer',
        'type' => 'getType',
        'eligibilityIndicator' => 'getEligibilityIndicator',
        'benefitAmount' => 'getBenefitAmount',
        'benefitType' => 'getBenefitType'
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
        $this->container['isElectronicBenefitsTransfer'] = isset($data['isElectronicBenefitsTransfer']) ? $data['isElectronicBenefitsTransfer'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['eligibilityIndicator'] = isset($data['eligibilityIndicator']) ? $data['eligibilityIndicator'] : null;
        $this->container['benefitAmount'] = isset($data['benefitAmount']) ? $data['benefitAmount'] : null;
        $this->container['benefitType'] = isset($data['benefitType']) ? $data['benefitType'] : null;
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
     * Gets isElectronicBenefitsTransfer
     * @return bool
     */
    public function getIsElectronicBenefitsTransfer()
    {
        return $this->container['isElectronicBenefitsTransfer'];
    }

    /**
     * Sets isElectronicBenefitsTransfer
     * @param bool $isElectronicBenefitsTransfer Flag that indicates whether this transaction is an EBT transaction. Possible values: - `true` - `false`  #### PIN debit Required field for EBT and EBT voucher transactions that use PIN debit credit or PIN debit purchase; otherwise, not used.
     * @return $this
     */
    public function setIsElectronicBenefitsTransfer($isElectronicBenefitsTransfer)
    {
        $this->container['isElectronicBenefitsTransfer'] = $isElectronicBenefitsTransfer;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Flag that indicates an EBT voucher transaction. Possible value: - `EBT_VOUCHER`: Indicates the PIN debit transaction is an EBT voucher. - `BUY` - `RENT` - `BOOK` - `SUBSCRIBE` - `DOWNLOAD` - `ORDER` - `CONTINUE`  #### PIN debit Required field for EBT voucher transactions that use PIN debit purchase; otherwise, not used.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets eligibilityIndicator
     * @return string
     */
    public function getEligibilityIndicator()
    {
        return $this->container['eligibilityIndicator'];
    }

    /**
     * Sets eligibilityIndicator
     * @param string $eligibilityIndicator This field contains installment data defined by MasterCard. Possible values:   - Y = eligible   - N = not eligile
     * @return $this
     */
    public function setEligibilityIndicator($eligibilityIndicator)
    {
        $this->container['eligibilityIndicator'] = $eligibilityIndicator;

        return $this;
    }

    /**
     * Gets benefitAmount
     * @return string
     */
    public function getBenefitAmount()
    {
        return $this->container['benefitAmount'];
    }

    /**
     * Sets benefitAmount
     * @param string $benefitAmount Workplace benefit amount.
     * @return $this
     */
    public function setBenefitAmount($benefitAmount)
    {
        $this->container['benefitAmount'] = $benefitAmount;

        return $this;
    }

    /**
     * Gets benefitType
     * @return string
     */
    public function getBenefitType()
    {
        return $this->container['benefitType'];
    }

    /**
     * Sets benefitType
     * @param string $benefitType Workplace benefit type. Possible values: - 70 = employee benefit - 4T = transportation / transit - 52 = general benefit - 53 = meal voucher - 54 = fuel - 55 = ecological / sustainability - 58 = philanthropy / patronage / consumption - 59 = gift - 5S = sport / culture - 5T = book / education
     * @return $this
     */
    public function setBenefitType($benefitType)
    {
        $this->container['benefitType'] = $benefitType;

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


