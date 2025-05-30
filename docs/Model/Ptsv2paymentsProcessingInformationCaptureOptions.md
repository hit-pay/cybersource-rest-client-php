# Ptsv2paymentsProcessingInformationCaptureOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**captureSequenceNumber** | **int** | Capture number when requesting multiple partial captures for one authorization. Used along with &#x60;totalCaptureCount&#x60; to track which capture is being processed.  For example, the second of five captures would be passed to CyberSource as:   - &#x60;captureSequenceNumber_ &#x3D; 2&#x60;, and   - &#x60;totalCaptureCount &#x3D; 5&#x60; | [optional] 
**totalCaptureCount** | **int** | Total number of captures when requesting multiple partial captures for one payment. Used along with &#x60;captureSequenceNumber&#x60; field to track which capture is being processed.  For example, the second of five captures would be passed to CyberSource as:   - &#x60;captureSequenceNumber &#x3D; 2&#x60;, and   - &#x60;totalCaptureCount &#x3D; 5&#x60; | [optional] 
**dateToCapture** | **string** | Date on which you want the capture to occur. This field is supported only for CyberSource through VisaNet. Format: &#x60;MMDD&#x60;  #### Used by **Authorization** Optional field. | [optional] 
**isFinal** | **string** | Indicates whether to release the authorization hold on the remaining funds.   Possible Values: - &#x60;true&#x60; - &#x60;false&#x60; | [optional] 
**notes** | **string** | An informational note about this settlement. Appears in both the payer&#39;s transaction history and the emails that the payer receives. | [optional] 
**reconciliationId** | **string** | Used for authbill request when capture field equals true | [optional] 
**reconciliationIdAlternate** | **string** | Used by Nike merchant to send 12 digit order number | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


