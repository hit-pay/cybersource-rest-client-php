# Ptsv1pushfundstransferRecipientInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentInformation** | [**\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPaymentInformation**](Ptsv1pushfundstransferRecipientInformationPaymentInformation.md) |  | [optional] 
**address1** | **string** | First line of the recipient&#39;s address. Required for card payments | [optional] 
**address2** | **string** | Second line of the recipient&#39;s address | [optional] 
**locality** | **string** | Recipient city. | [optional] 
**postalCode** | **string** | Recipient postal code.   For USA, this must be a valid value of 5 digits or 5 digits hyphen 4 digits, for example &#39;63368&#39;, &#39;63368-5555&#39;. For other regions, this can be alphanumeric, length 1-10.  Mandatory for card payments. | [optional] 
**administrativeArea** | **string** | The recipient&#39;s province, state or territory. Conditional, required if recipient&#39;s country is USA or CAN. Must be an ISO 3166-2 uppercase alpha 2 or 3 character country subdivision code. For example, Missouri is MO.  See https://developer.cybersource.com/library/documentation/sbc/quickref/states_and_provinces.pdf  Required for card payments. | [optional] 
**country** | **string** | Recipient country code. Use the ISO Standard Alpha Country Codes.  https://developer.cybersource.com/library/documentation/sbc/quickref/countries_alpha_list.pdf | [optional] 
**firstName** | **string** | First name of recipient. | [optional] 
**middleName** | **string** | Sender&#39;s middle name. This field is a passthrough, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. If the field is not required for the transaction, CyberSource does not forward it to the processor. | [optional] 
**lastName** | **string** | Last name of recipient. | [optional] 
**phoneNumber** | **string** | Customer&#39;s phone number.  It is recommended that you include the country code when the order is from outside the U.S. | [optional] 
**email** | **string** | Customer&#39;s email address, including the full domain name. | [optional] 
**personalIdentification** | [**\CyberSource\Model\Ptsv1pushfundstransferRecipientInformationPersonalIdentification**](Ptsv1pushfundstransferRecipientInformationPersonalIdentification.md) |  | [optional] 
**buildingNumber** | **string** | Building number in the street address.  For example, if the street address is: Rua da Quitanda 187 then the building number is 187.  Applicable to domestic Colombia transactions only. | [optional] 
**streetName** | **string** | This field contains the street name of the recipient&#39;s address.  Applicable to domestic Colombia transactions only. | [optional] 
**type** | **string** | &#x60;B&#x60; for Business or &#x60;I&#x60; for individual. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


