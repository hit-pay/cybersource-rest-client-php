# Ptsv1pushfundstransferSenderInformationAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fundsSource** | **string** | Source of funds. Possible values:  - &#x60;01&#x60;: Credit card - &#x60;02&#x60;: Debit card - &#x60;03&#x60;: Prepaid card - &#x60;04&#x60;: Cash/Deposit Account - &#x60;05&#x60;: Debit or deposit account that is not linked to a Visa card. Includes checking accounts, savings accounts, and proprietary debit or ATM cards. - &#x60;06&#x60;: Credit account that is not linked to a Visa card. Includes credit cards and proprietary lines of credit.  Funds Disbursement This value is most likely 05 to identify that the originator used a deposit account to fund the disbursement.  Credit Card Bill Payment This value must be 02, 03, 04, or 05. | [optional] 
**number** | **string** | The account number of the entity funding the transaction. It is the sender&#39;s account number. It can be a debit/credit card account number or bank account number.  Funds disbursements  This field is optional.  All other transactions  This field is required when the sender funds the transaction with a financial instrument, for example debit card. Length: | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


