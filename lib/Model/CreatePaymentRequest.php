<?php
/**
 * CreatePaymentRequest
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
 * CreatePaymentRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreatePaymentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createPaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clientReferenceInformation' => '\CyberSource\Model\Ptsv2paymentsClientReferenceInformation',
        'processingInformation' => '\CyberSource\Model\Ptsv2paymentsProcessingInformation',
        'issuerInformation' => '\CyberSource\Model\Ptsv2paymentsIssuerInformation',
        'paymentInformation' => '\CyberSource\Model\Ptsv2paymentsPaymentInformation',
        'orderInformation' => '\CyberSource\Model\Ptsv2paymentsOrderInformation',
        'buyerInformation' => '\CyberSource\Model\Ptsv2paymentsBuyerInformation',
        'senderInformation' => '\CyberSource\Model\Ptsv2paymentsSenderInformation',
        'recipientInformation' => '\CyberSource\Model\Ptsv2paymentsRecipientInformation',
        'deviceInformation' => '\CyberSource\Model\Ptsv2paymentsDeviceInformation',
        'merchantInformation' => '\CyberSource\Model\Ptsv2paymentsMerchantInformation',
        'aggregatorInformation' => '\CyberSource\Model\Ptsv2paymentsAggregatorInformation',
        'consumerAuthenticationInformation' => '\CyberSource\Model\Ptsv2paymentsConsumerAuthenticationInformation',
        'pointOfSaleInformation' => '\CyberSource\Model\Ptsv2paymentsPointOfSaleInformation',
        'merchantDefinedInformation' => '\CyberSource\Model\Ptsv2paymentsMerchantDefinedInformation[]',
        'merchantDefinedSecureInformation' => '\CyberSource\Model\Ptsv2paymentsMerchantDefinedSecureInformation',
        'installmentInformation' => '\CyberSource\Model\Ptsv2paymentsInstallmentInformation',
        'travelInformation' => '\CyberSource\Model\Ptsv2paymentsTravelInformation',
        'healthCareInformation' => '\CyberSource\Model\Ptsv2paymentsHealthCareInformation',
        'promotionInformation' => '\CyberSource\Model\Ptsv2paymentsPromotionInformation',
        'tokenInformation' => '\CyberSource\Model\Ptsv2paymentsTokenInformation',
        'invoiceDetails' => '\CyberSource\Model\Ptsv2paymentsInvoiceDetails',
        'processorInformation' => '\CyberSource\Model\Ptsv2paymentsProcessorInformation',
        'agreementInformation' => '\CyberSource\Model\Ptsv2paymentsAgreementInformation',
        'riskInformation' => '\CyberSource\Model\Ptsv2paymentsRiskInformation',
        'acquirerInformation' => '\CyberSource\Model\Ptsv2paymentsAcquirerInformation',
        'recurringPaymentInformation' => '\CyberSource\Model\Ptsv2paymentsRecurringPaymentInformation',
        'unscheduledPaymentInformation' => '\CyberSource\Model\Ptsv2paymentsUnscheduledPaymentInformation',
        'hostedPaymentInformation' => '\CyberSource\Model\Ptsv2paymentsHostedPaymentInformation',
        'watchlistScreeningInformation' => '\CyberSource\Model\Ptsv2paymentsWatchlistScreeningInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clientReferenceInformation' => null,
        'processingInformation' => null,
        'issuerInformation' => null,
        'paymentInformation' => null,
        'orderInformation' => null,
        'buyerInformation' => null,
        'senderInformation' => null,
        'recipientInformation' => null,
        'deviceInformation' => null,
        'merchantInformation' => null,
        'aggregatorInformation' => null,
        'consumerAuthenticationInformation' => null,
        'pointOfSaleInformation' => null,
        'merchantDefinedInformation' => null,
        'merchantDefinedSecureInformation' => null,
        'installmentInformation' => null,
        'travelInformation' => null,
        'healthCareInformation' => null,
        'promotionInformation' => null,
        'tokenInformation' => null,
        'invoiceDetails' => null,
        'processorInformation' => null,
        'agreementInformation' => null,
        'riskInformation' => null,
        'acquirerInformation' => null,
        'recurringPaymentInformation' => null,
        'unscheduledPaymentInformation' => null,
        'hostedPaymentInformation' => null,
        'watchlistScreeningInformation' => null
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
        'clientReferenceInformation' => 'clientReferenceInformation',
        'processingInformation' => 'processingInformation',
        'issuerInformation' => 'issuerInformation',
        'paymentInformation' => 'paymentInformation',
        'orderInformation' => 'orderInformation',
        'buyerInformation' => 'buyerInformation',
        'senderInformation' => 'senderInformation',
        'recipientInformation' => 'recipientInformation',
        'deviceInformation' => 'deviceInformation',
        'merchantInformation' => 'merchantInformation',
        'aggregatorInformation' => 'aggregatorInformation',
        'consumerAuthenticationInformation' => 'consumerAuthenticationInformation',
        'pointOfSaleInformation' => 'pointOfSaleInformation',
        'merchantDefinedInformation' => 'merchantDefinedInformation',
        'merchantDefinedSecureInformation' => 'merchantDefinedSecureInformation',
        'installmentInformation' => 'installmentInformation',
        'travelInformation' => 'travelInformation',
        'healthCareInformation' => 'healthCareInformation',
        'promotionInformation' => 'promotionInformation',
        'tokenInformation' => 'tokenInformation',
        'invoiceDetails' => 'invoiceDetails',
        'processorInformation' => 'processorInformation',
        'agreementInformation' => 'agreementInformation',
        'riskInformation' => 'riskInformation',
        'acquirerInformation' => 'acquirerInformation',
        'recurringPaymentInformation' => 'recurringPaymentInformation',
        'unscheduledPaymentInformation' => 'unscheduledPaymentInformation',
        'hostedPaymentInformation' => 'hostedPaymentInformation',
        'watchlistScreeningInformation' => 'watchlistScreeningInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'clientReferenceInformation' => 'setClientReferenceInformation',
        'processingInformation' => 'setProcessingInformation',
        'issuerInformation' => 'setIssuerInformation',
        'paymentInformation' => 'setPaymentInformation',
        'orderInformation' => 'setOrderInformation',
        'buyerInformation' => 'setBuyerInformation',
        'senderInformation' => 'setSenderInformation',
        'recipientInformation' => 'setRecipientInformation',
        'deviceInformation' => 'setDeviceInformation',
        'merchantInformation' => 'setMerchantInformation',
        'aggregatorInformation' => 'setAggregatorInformation',
        'consumerAuthenticationInformation' => 'setConsumerAuthenticationInformation',
        'pointOfSaleInformation' => 'setPointOfSaleInformation',
        'merchantDefinedInformation' => 'setMerchantDefinedInformation',
        'merchantDefinedSecureInformation' => 'setMerchantDefinedSecureInformation',
        'installmentInformation' => 'setInstallmentInformation',
        'travelInformation' => 'setTravelInformation',
        'healthCareInformation' => 'setHealthCareInformation',
        'promotionInformation' => 'setPromotionInformation',
        'tokenInformation' => 'setTokenInformation',
        'invoiceDetails' => 'setInvoiceDetails',
        'processorInformation' => 'setProcessorInformation',
        'agreementInformation' => 'setAgreementInformation',
        'riskInformation' => 'setRiskInformation',
        'acquirerInformation' => 'setAcquirerInformation',
        'recurringPaymentInformation' => 'setRecurringPaymentInformation',
        'unscheduledPaymentInformation' => 'setUnscheduledPaymentInformation',
        'hostedPaymentInformation' => 'setHostedPaymentInformation',
        'watchlistScreeningInformation' => 'setWatchlistScreeningInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'clientReferenceInformation' => 'getClientReferenceInformation',
        'processingInformation' => 'getProcessingInformation',
        'issuerInformation' => 'getIssuerInformation',
        'paymentInformation' => 'getPaymentInformation',
        'orderInformation' => 'getOrderInformation',
        'buyerInformation' => 'getBuyerInformation',
        'senderInformation' => 'getSenderInformation',
        'recipientInformation' => 'getRecipientInformation',
        'deviceInformation' => 'getDeviceInformation',
        'merchantInformation' => 'getMerchantInformation',
        'aggregatorInformation' => 'getAggregatorInformation',
        'consumerAuthenticationInformation' => 'getConsumerAuthenticationInformation',
        'pointOfSaleInformation' => 'getPointOfSaleInformation',
        'merchantDefinedInformation' => 'getMerchantDefinedInformation',
        'merchantDefinedSecureInformation' => 'getMerchantDefinedSecureInformation',
        'installmentInformation' => 'getInstallmentInformation',
        'travelInformation' => 'getTravelInformation',
        'healthCareInformation' => 'getHealthCareInformation',
        'promotionInformation' => 'getPromotionInformation',
        'tokenInformation' => 'getTokenInformation',
        'invoiceDetails' => 'getInvoiceDetails',
        'processorInformation' => 'getProcessorInformation',
        'agreementInformation' => 'getAgreementInformation',
        'riskInformation' => 'getRiskInformation',
        'acquirerInformation' => 'getAcquirerInformation',
        'recurringPaymentInformation' => 'getRecurringPaymentInformation',
        'unscheduledPaymentInformation' => 'getUnscheduledPaymentInformation',
        'hostedPaymentInformation' => 'getHostedPaymentInformation',
        'watchlistScreeningInformation' => 'getWatchlistScreeningInformation'
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
        $this->container['clientReferenceInformation'] = isset($data['clientReferenceInformation']) ? $data['clientReferenceInformation'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['issuerInformation'] = isset($data['issuerInformation']) ? $data['issuerInformation'] : null;
        $this->container['paymentInformation'] = isset($data['paymentInformation']) ? $data['paymentInformation'] : null;
        $this->container['orderInformation'] = isset($data['orderInformation']) ? $data['orderInformation'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['senderInformation'] = isset($data['senderInformation']) ? $data['senderInformation'] : null;
        $this->container['recipientInformation'] = isset($data['recipientInformation']) ? $data['recipientInformation'] : null;
        $this->container['deviceInformation'] = isset($data['deviceInformation']) ? $data['deviceInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['aggregatorInformation'] = isset($data['aggregatorInformation']) ? $data['aggregatorInformation'] : null;
        $this->container['consumerAuthenticationInformation'] = isset($data['consumerAuthenticationInformation']) ? $data['consumerAuthenticationInformation'] : null;
        $this->container['pointOfSaleInformation'] = isset($data['pointOfSaleInformation']) ? $data['pointOfSaleInformation'] : null;
        $this->container['merchantDefinedInformation'] = isset($data['merchantDefinedInformation']) ? $data['merchantDefinedInformation'] : null;
        $this->container['merchantDefinedSecureInformation'] = isset($data['merchantDefinedSecureInformation']) ? $data['merchantDefinedSecureInformation'] : null;
        $this->container['installmentInformation'] = isset($data['installmentInformation']) ? $data['installmentInformation'] : null;
        $this->container['travelInformation'] = isset($data['travelInformation']) ? $data['travelInformation'] : null;
        $this->container['healthCareInformation'] = isset($data['healthCareInformation']) ? $data['healthCareInformation'] : null;
        $this->container['promotionInformation'] = isset($data['promotionInformation']) ? $data['promotionInformation'] : null;
        $this->container['tokenInformation'] = isset($data['tokenInformation']) ? $data['tokenInformation'] : null;
        $this->container['invoiceDetails'] = isset($data['invoiceDetails']) ? $data['invoiceDetails'] : null;
        $this->container['processorInformation'] = isset($data['processorInformation']) ? $data['processorInformation'] : null;
        $this->container['agreementInformation'] = isset($data['agreementInformation']) ? $data['agreementInformation'] : null;
        $this->container['riskInformation'] = isset($data['riskInformation']) ? $data['riskInformation'] : null;
        $this->container['acquirerInformation'] = isset($data['acquirerInformation']) ? $data['acquirerInformation'] : null;
        $this->container['recurringPaymentInformation'] = isset($data['recurringPaymentInformation']) ? $data['recurringPaymentInformation'] : null;
        $this->container['unscheduledPaymentInformation'] = isset($data['unscheduledPaymentInformation']) ? $data['unscheduledPaymentInformation'] : null;
        $this->container['hostedPaymentInformation'] = isset($data['hostedPaymentInformation']) ? $data['hostedPaymentInformation'] : null;
        $this->container['watchlistScreeningInformation'] = isset($data['watchlistScreeningInformation']) ? $data['watchlistScreeningInformation'] : null;
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
     * Gets clientReferenceInformation
     * @return \CyberSource\Model\Ptsv2paymentsClientReferenceInformation
     */
    public function getClientReferenceInformation()
    {
        return $this->container['clientReferenceInformation'];
    }

    /**
     * Sets clientReferenceInformation
     * @param \CyberSource\Model\Ptsv2paymentsClientReferenceInformation $clientReferenceInformation
     * @return $this
     */
    public function setClientReferenceInformation($clientReferenceInformation)
    {
        $this->container['clientReferenceInformation'] = $clientReferenceInformation;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Ptsv2paymentsProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Ptsv2paymentsProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets issuerInformation
     * @return \CyberSource\Model\Ptsv2paymentsIssuerInformation
     */
    public function getIssuerInformation()
    {
        return $this->container['issuerInformation'];
    }

    /**
     * Sets issuerInformation
     * @param \CyberSource\Model\Ptsv2paymentsIssuerInformation $issuerInformation
     * @return $this
     */
    public function setIssuerInformation($issuerInformation)
    {
        $this->container['issuerInformation'] = $issuerInformation;

        return $this;
    }

    /**
     * Gets paymentInformation
     * @return \CyberSource\Model\Ptsv2paymentsPaymentInformation
     */
    public function getPaymentInformation()
    {
        return $this->container['paymentInformation'];
    }

    /**
     * Sets paymentInformation
     * @param \CyberSource\Model\Ptsv2paymentsPaymentInformation $paymentInformation
     * @return $this
     */
    public function setPaymentInformation($paymentInformation)
    {
        $this->container['paymentInformation'] = $paymentInformation;

        return $this;
    }

    /**
     * Gets orderInformation
     * @return \CyberSource\Model\Ptsv2paymentsOrderInformation
     */
    public function getOrderInformation()
    {
        return $this->container['orderInformation'];
    }

    /**
     * Sets orderInformation
     * @param \CyberSource\Model\Ptsv2paymentsOrderInformation $orderInformation
     * @return $this
     */
    public function setOrderInformation($orderInformation)
    {
        $this->container['orderInformation'] = $orderInformation;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\Ptsv2paymentsBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\Ptsv2paymentsBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets senderInformation
     * @return \CyberSource\Model\Ptsv2paymentsSenderInformation
     */
    public function getSenderInformation()
    {
        return $this->container['senderInformation'];
    }

    /**
     * Sets senderInformation
     * @param \CyberSource\Model\Ptsv2paymentsSenderInformation $senderInformation
     * @return $this
     */
    public function setSenderInformation($senderInformation)
    {
        $this->container['senderInformation'] = $senderInformation;

        return $this;
    }

    /**
     * Gets recipientInformation
     * @return \CyberSource\Model\Ptsv2paymentsRecipientInformation
     */
    public function getRecipientInformation()
    {
        return $this->container['recipientInformation'];
    }

    /**
     * Sets recipientInformation
     * @param \CyberSource\Model\Ptsv2paymentsRecipientInformation $recipientInformation
     * @return $this
     */
    public function setRecipientInformation($recipientInformation)
    {
        $this->container['recipientInformation'] = $recipientInformation;

        return $this;
    }

    /**
     * Gets deviceInformation
     * @return \CyberSource\Model\Ptsv2paymentsDeviceInformation
     */
    public function getDeviceInformation()
    {
        return $this->container['deviceInformation'];
    }

    /**
     * Sets deviceInformation
     * @param \CyberSource\Model\Ptsv2paymentsDeviceInformation $deviceInformation
     * @return $this
     */
    public function setDeviceInformation($deviceInformation)
    {
        $this->container['deviceInformation'] = $deviceInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Ptsv2paymentsMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Ptsv2paymentsMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets aggregatorInformation
     * @return \CyberSource\Model\Ptsv2paymentsAggregatorInformation
     */
    public function getAggregatorInformation()
    {
        return $this->container['aggregatorInformation'];
    }

    /**
     * Sets aggregatorInformation
     * @param \CyberSource\Model\Ptsv2paymentsAggregatorInformation $aggregatorInformation
     * @return $this
     */
    public function setAggregatorInformation($aggregatorInformation)
    {
        $this->container['aggregatorInformation'] = $aggregatorInformation;

        return $this;
    }

    /**
     * Gets consumerAuthenticationInformation
     * @return \CyberSource\Model\Ptsv2paymentsConsumerAuthenticationInformation
     */
    public function getConsumerAuthenticationInformation()
    {
        return $this->container['consumerAuthenticationInformation'];
    }

    /**
     * Sets consumerAuthenticationInformation
     * @param \CyberSource\Model\Ptsv2paymentsConsumerAuthenticationInformation $consumerAuthenticationInformation
     * @return $this
     */
    public function setConsumerAuthenticationInformation($consumerAuthenticationInformation)
    {
        $this->container['consumerAuthenticationInformation'] = $consumerAuthenticationInformation;

        return $this;
    }

    /**
     * Gets pointOfSaleInformation
     * @return \CyberSource\Model\Ptsv2paymentsPointOfSaleInformation
     */
    public function getPointOfSaleInformation()
    {
        return $this->container['pointOfSaleInformation'];
    }

    /**
     * Sets pointOfSaleInformation
     * @param \CyberSource\Model\Ptsv2paymentsPointOfSaleInformation $pointOfSaleInformation
     * @return $this
     */
    public function setPointOfSaleInformation($pointOfSaleInformation)
    {
        $this->container['pointOfSaleInformation'] = $pointOfSaleInformation;

        return $this;
    }

    /**
     * Gets merchantDefinedInformation
     * @return \CyberSource\Model\Ptsv2paymentsMerchantDefinedInformation[]
     */
    public function getMerchantDefinedInformation()
    {
        return $this->container['merchantDefinedInformation'];
    }

    /**
     * Sets merchantDefinedInformation
     * @param \CyberSource\Model\Ptsv2paymentsMerchantDefinedInformation[] $merchantDefinedInformation The object containing the custom data that the merchant defines.
     * @return $this
     */
    public function setMerchantDefinedInformation($merchantDefinedInformation)
    {
        $this->container['merchantDefinedInformation'] = $merchantDefinedInformation;

        return $this;
    }

    /**
     * Gets merchantDefinedSecureInformation
     * @return \CyberSource\Model\Ptsv2paymentsMerchantDefinedSecureInformation
     */
    public function getMerchantDefinedSecureInformation()
    {
        return $this->container['merchantDefinedSecureInformation'];
    }

    /**
     * Sets merchantDefinedSecureInformation
     * @param \CyberSource\Model\Ptsv2paymentsMerchantDefinedSecureInformation $merchantDefinedSecureInformation
     * @return $this
     */
    public function setMerchantDefinedSecureInformation($merchantDefinedSecureInformation)
    {
        $this->container['merchantDefinedSecureInformation'] = $merchantDefinedSecureInformation;

        return $this;
    }

    /**
     * Gets installmentInformation
     * @return \CyberSource\Model\Ptsv2paymentsInstallmentInformation
     */
    public function getInstallmentInformation()
    {
        return $this->container['installmentInformation'];
    }

    /**
     * Sets installmentInformation
     * @param \CyberSource\Model\Ptsv2paymentsInstallmentInformation $installmentInformation
     * @return $this
     */
    public function setInstallmentInformation($installmentInformation)
    {
        $this->container['installmentInformation'] = $installmentInformation;

        return $this;
    }

    /**
     * Gets travelInformation
     * @return \CyberSource\Model\Ptsv2paymentsTravelInformation
     */
    public function getTravelInformation()
    {
        return $this->container['travelInformation'];
    }

    /**
     * Sets travelInformation
     * @param \CyberSource\Model\Ptsv2paymentsTravelInformation $travelInformation
     * @return $this
     */
    public function setTravelInformation($travelInformation)
    {
        $this->container['travelInformation'] = $travelInformation;

        return $this;
    }

    /**
     * Gets healthCareInformation
     * @return \CyberSource\Model\Ptsv2paymentsHealthCareInformation
     */
    public function getHealthCareInformation()
    {
        return $this->container['healthCareInformation'];
    }

    /**
     * Sets healthCareInformation
     * @param \CyberSource\Model\Ptsv2paymentsHealthCareInformation $healthCareInformation
     * @return $this
     */
    public function setHealthCareInformation($healthCareInformation)
    {
        $this->container['healthCareInformation'] = $healthCareInformation;

        return $this;
    }

    /**
     * Gets promotionInformation
     * @return \CyberSource\Model\Ptsv2paymentsPromotionInformation
     */
    public function getPromotionInformation()
    {
        return $this->container['promotionInformation'];
    }

    /**
     * Sets promotionInformation
     * @param \CyberSource\Model\Ptsv2paymentsPromotionInformation $promotionInformation
     * @return $this
     */
    public function setPromotionInformation($promotionInformation)
    {
        $this->container['promotionInformation'] = $promotionInformation;

        return $this;
    }

    /**
     * Gets tokenInformation
     * @return \CyberSource\Model\Ptsv2paymentsTokenInformation
     */
    public function getTokenInformation()
    {
        return $this->container['tokenInformation'];
    }

    /**
     * Sets tokenInformation
     * @param \CyberSource\Model\Ptsv2paymentsTokenInformation $tokenInformation
     * @return $this
     */
    public function setTokenInformation($tokenInformation)
    {
        $this->container['tokenInformation'] = $tokenInformation;

        return $this;
    }

    /**
     * Gets invoiceDetails
     * @return \CyberSource\Model\Ptsv2paymentsInvoiceDetails
     */
    public function getInvoiceDetails()
    {
        return $this->container['invoiceDetails'];
    }

    /**
     * Sets invoiceDetails
     * @param \CyberSource\Model\Ptsv2paymentsInvoiceDetails $invoiceDetails
     * @return $this
     */
    public function setInvoiceDetails($invoiceDetails)
    {
        $this->container['invoiceDetails'] = $invoiceDetails;

        return $this;
    }

    /**
     * Gets processorInformation
     * @return \CyberSource\Model\Ptsv2paymentsProcessorInformation
     */
    public function getProcessorInformation()
    {
        return $this->container['processorInformation'];
    }

    /**
     * Sets processorInformation
     * @param \CyberSource\Model\Ptsv2paymentsProcessorInformation $processorInformation
     * @return $this
     */
    public function setProcessorInformation($processorInformation)
    {
        $this->container['processorInformation'] = $processorInformation;

        return $this;
    }

    /**
     * Gets agreementInformation
     * @return \CyberSource\Model\Ptsv2paymentsAgreementInformation
     */
    public function getAgreementInformation()
    {
        return $this->container['agreementInformation'];
    }

    /**
     * Sets agreementInformation
     * @param \CyberSource\Model\Ptsv2paymentsAgreementInformation $agreementInformation
     * @return $this
     */
    public function setAgreementInformation($agreementInformation)
    {
        $this->container['agreementInformation'] = $agreementInformation;

        return $this;
    }

    /**
     * Gets riskInformation
     * @return \CyberSource\Model\Ptsv2paymentsRiskInformation
     */
    public function getRiskInformation()
    {
        return $this->container['riskInformation'];
    }

    /**
     * Sets riskInformation
     * @param \CyberSource\Model\Ptsv2paymentsRiskInformation $riskInformation
     * @return $this
     */
    public function setRiskInformation($riskInformation)
    {
        $this->container['riskInformation'] = $riskInformation;

        return $this;
    }

    /**
     * Gets acquirerInformation
     * @return \CyberSource\Model\Ptsv2paymentsAcquirerInformation
     */
    public function getAcquirerInformation()
    {
        return $this->container['acquirerInformation'];
    }

    /**
     * Sets acquirerInformation
     * @param \CyberSource\Model\Ptsv2paymentsAcquirerInformation $acquirerInformation
     * @return $this
     */
    public function setAcquirerInformation($acquirerInformation)
    {
        $this->container['acquirerInformation'] = $acquirerInformation;

        return $this;
    }

    /**
     * Gets recurringPaymentInformation
     * @return \CyberSource\Model\Ptsv2paymentsRecurringPaymentInformation
     */
    public function getRecurringPaymentInformation()
    {
        return $this->container['recurringPaymentInformation'];
    }

    /**
     * Sets recurringPaymentInformation
     * @param \CyberSource\Model\Ptsv2paymentsRecurringPaymentInformation $recurringPaymentInformation
     * @return $this
     */
    public function setRecurringPaymentInformation($recurringPaymentInformation)
    {
        $this->container['recurringPaymentInformation'] = $recurringPaymentInformation;

        return $this;
    }

    /**
     * Gets unscheduledPaymentInformation
     * @return \CyberSource\Model\Ptsv2paymentsUnscheduledPaymentInformation
     */
    public function getUnscheduledPaymentInformation()
    {
        return $this->container['unscheduledPaymentInformation'];
    }

    /**
     * Sets unscheduledPaymentInformation
     * @param \CyberSource\Model\Ptsv2paymentsUnscheduledPaymentInformation $unscheduledPaymentInformation
     * @return $this
     */
    public function setUnscheduledPaymentInformation($unscheduledPaymentInformation)
    {
        $this->container['unscheduledPaymentInformation'] = $unscheduledPaymentInformation;

        return $this;
    }

    /**
     * Gets hostedPaymentInformation
     * @return \CyberSource\Model\Ptsv2paymentsHostedPaymentInformation
     */
    public function getHostedPaymentInformation()
    {
        return $this->container['hostedPaymentInformation'];
    }

    /**
     * Sets hostedPaymentInformation
     * @param \CyberSource\Model\Ptsv2paymentsHostedPaymentInformation $hostedPaymentInformation
     * @return $this
     */
    public function setHostedPaymentInformation($hostedPaymentInformation)
    {
        $this->container['hostedPaymentInformation'] = $hostedPaymentInformation;

        return $this;
    }

    /**
     * Gets watchlistScreeningInformation
     * @return \CyberSource\Model\Ptsv2paymentsWatchlistScreeningInformation
     */
    public function getWatchlistScreeningInformation()
    {
        return $this->container['watchlistScreeningInformation'];
    }

    /**
     * Sets watchlistScreeningInformation
     * @param \CyberSource\Model\Ptsv2paymentsWatchlistScreeningInformation $watchlistScreeningInformation
     * @return $this
     */
    public function setWatchlistScreeningInformation($watchlistScreeningInformation)
    {
        $this->container['watchlistScreeningInformation'] = $watchlistScreeningInformation;

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


