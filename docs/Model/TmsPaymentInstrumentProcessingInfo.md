# TmsPaymentInstrumentProcessingInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billPaymentProgramEnabled** | **bool** | Flag that indicates that this is a payment for a bill or for an existing contractual loan. Possible Values: - &#x60;true&#x60;: Bill payment or loan payment. - &#x60;false&#x60; (default): Not a bill payment or loan payment. # For processor-specific details, see the &#x60;bill_payment&#x60; field description in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/) | [optional] 
**bankTransferOptions** | [**\CyberSource\Model\TmsPaymentInstrumentProcessingInfoBankTransferOptions**](TmsPaymentInstrumentProcessingInfoBankTransferOptions.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


