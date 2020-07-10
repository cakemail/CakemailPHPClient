# OpenAPIClient-php

The Cakemail API exposes multiple APIs including Authentication, Marketing, Contact, Transactional, Analytic, Content, Account and Partner.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0-alpha5
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/cakemail/CakemailPHPClient.git"
    }
  ],
  "require": {
    "cakemail/CakemailPHPClient": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelfAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSelfAccount: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cakemail.dev*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getSelfAccount**](docs/Api/AccountApi.md#getselfaccount) | **GET** /accounts/self | Show my account details
*AccountApi* | [**patchSelfAccount**](docs/Api/AccountApi.md#patchselfaccount) | **PATCH** /accounts/self | Update my account
*CampaignApi* | [**archiveCampaign**](docs/Api/CampaignApi.md#archivecampaign) | **POST** /campaigns/{campaign_id}/archive | Archive a campaign
*CampaignApi* | [**cancelCampaign**](docs/Api/CampaignApi.md#cancelcampaign) | **POST** /campaigns/{campaign_id}/cancel | Cancel a campaign
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /campaigns | Create a campaign
*CampaignApi* | [**deleteCampaign**](docs/Api/CampaignApi.md#deletecampaign) | **DELETE** /campaigns/{campaign_id} | Delete a campaign
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /campaigns/{campaign_id} | Show a campaign details
*CampaignApi* | [**listCampaigns**](docs/Api/CampaignApi.md#listcampaigns) | **GET** /campaigns | Show all campaigns
*CampaignApi* | [**listLinks**](docs/Api/CampaignApi.md#listlinks) | **GET** /campaigns/{campaign_id}/links | Show a campaign links
*CampaignApi* | [**patchCampaign**](docs/Api/CampaignApi.md#patchcampaign) | **PATCH** /campaigns/{campaign_id} | Update a campaign
*CampaignApi* | [**renderCampaign**](docs/Api/CampaignApi.md#rendercampaign) | **GET** /campaigns/{campaign_id}/render | Render a campaign
*CampaignApi* | [**rescheduleCampaign**](docs/Api/CampaignApi.md#reschedulecampaign) | **POST** /campaigns/{campaign_id}/reschedule | Reschedule a campaign
*CampaignApi* | [**resumeCampaign**](docs/Api/CampaignApi.md#resumecampaign) | **POST** /campaigns/{campaign_id}/resume | Resume a campaign
*CampaignApi* | [**scheduleCampaign**](docs/Api/CampaignApi.md#schedulecampaign) | **POST** /campaigns/{campaign_id}/schedule | Schedule a campaign
*CampaignApi* | [**sendTestEmail**](docs/Api/CampaignApi.md#sendtestemail) | **POST** /campaigns/{campaign_id}/send-test | Send a test email
*CampaignApi* | [**suspendCampaign**](docs/Api/CampaignApi.md#suspendcampaign) | **POST** /campaigns/{campaign_id}/suspend | Suspend a campaign
*CampaignApi* | [**unarchiveCampaign**](docs/Api/CampaignApi.md#unarchivecampaign) | **POST** /campaigns/{campaign_id}/unarchive | Unarchive a campaign
*CampaignApi* | [**unscheduleCampaign**](docs/Api/CampaignApi.md#unschedulecampaign) | **POST** /campaigns/{campaign_id}/unschedule | Unschedule a campaign
*ContactApi* | [**createContact**](docs/Api/ContactApi.md#createcontact) | **POST** /lists/{list_id}/contacts | Add a contact in a list
*ContactApi* | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | **DELETE** /lists/{list_id}/contacts/{contact_id} | Delete a contact
*ContactApi* | [**getContact**](docs/Api/ContactApi.md#getcontact) | **GET** /lists/{list_id}/contacts/{contact_id} | Show a contact details
*ContactApi* | [**importContacts**](docs/Api/ContactApi.md#importcontacts) | **POST** /lists/{list_id}/import-contacts | Import contacts
*ContactApi* | [**listContactsOfList**](docs/Api/ContactApi.md#listcontactsoflist) | **GET** /lists/{list_id}/contacts | Show all contacts in a list
*ContactApi* | [**listContactsOfSegment**](docs/Api/ContactApi.md#listcontactsofsegment) | **GET** /lists/{list_id}/segments/{segment_id}/contacts | Show all contacts in a segment
*ContactApi* | [**patchContact**](docs/Api/ContactApi.md#patchcontact) | **PATCH** /lists/{list_id}/contacts/{contact_id} | Update a contact
*ContactApi* | [**unsubscribeContact**](docs/Api/ContactApi.md#unsubscribecontact) | **POST** /lists/{list_id}/contacts/{contact_id}/unsubscribe | Unsubscribe a contact from a list
*CustomAttributeApi* | [**createCustomAttribute**](docs/Api/CustomAttributeApi.md#createcustomattribute) | **POST** /lists/{list_id}/custom-attributes | Create a custom attribute
*CustomAttributeApi* | [**deleteCustomAttribute**](docs/Api/CustomAttributeApi.md#deletecustomattribute) | **DELETE** /lists/{list_id}/custom-attributes/{name} | Delete a custom attribute
*CustomAttributeApi* | [**getCustomAttribute**](docs/Api/CustomAttributeApi.md#getcustomattribute) | **GET** /lists/{list_id}/custom-attributes/{name} | Show a custom attribute
*CustomAttributeApi* | [**listCustomAttributes**](docs/Api/CustomAttributeApi.md#listcustomattributes) | **GET** /lists/{list_id}/custom-attributes | Show all custom attributes
*DomainApi* | [**patchDomains**](docs/Api/DomainApi.md#patchdomains) | **PATCH** /brands/default/domains/default | Change domains
*DomainApi* | [**showDomains**](docs/Api/DomainApi.md#showdomains) | **GET** /brands/default/domains/default | Show domains
*DomainApi* | [**validateDomains**](docs/Api/DomainApi.md#validatedomains) | **GET** /brands/default/domains/default/validate | Validate domains
*FormApi* | [**createForm**](docs/Api/FormApi.md#createform) | **POST** /forms | Create a form
*FormApi* | [**deleteForm**](docs/Api/FormApi.md#deleteform) | **DELETE** /forms/{form_id} | Delete a form
*FormApi* | [**getForm**](docs/Api/FormApi.md#getform) | **GET** /forms/{form_id} | Show a form details
*FormApi* | [**listForms**](docs/Api/FormApi.md#listforms) | **GET** /forms | Show all forms
*FormApi* | [**patchForm**](docs/Api/FormApi.md#patchform) | **PATCH** /forms/{form_id} | Update a form
*ListApi* | [**acceptListPolicy**](docs/Api/ListApi.md#acceptlistpolicy) | **POST** /lists/{list_id}/accept-policy | Accept policy for a list
*ListApi* | [**archiveList**](docs/Api/ListApi.md#archivelist) | **POST** /lists/{list_id}/archive | Archive a list
*ListApi* | [**createList**](docs/Api/ListApi.md#createlist) | **POST** /lists | Create a List
*ListApi* | [**deleteList**](docs/Api/ListApi.md#deletelist) | **DELETE** /lists/{list_id} | Delete a List
*ListApi* | [**getList**](docs/Api/ListApi.md#getlist) | **GET** /lists/{list_id} | Show a list parameters
*ListApi* | [**listLists**](docs/Api/ListApi.md#listlists) | **GET** /lists | Show all lists
*ListApi* | [**patchList**](docs/Api/ListApi.md#patchlist) | **PATCH** /lists/{list_id} | Update a list parameters
*ListApi* | [**unarchiveList**](docs/Api/ListApi.md#unarchivelist) | **POST** /lists/{list_id}/unarchive | Unarchive a list
*LogApi* | [**getCampaignLogs**](docs/Api/LogApi.md#getcampaignlogs) | **GET** /logs/campaigns/{campaign_id} | Show campaign logs
*LogApi* | [**getEmailLogs**](docs/Api/LogApi.md#getemaillogs) | **GET** /logs/emails | Show transactional email logs
*LogApi* | [**getListLogs**](docs/Api/LogApi.md#getlistlogs) | **GET** /logs/lists/{list_id} | Show list logs
*LogoApi* | [**uploadDefaultLogo**](docs/Api/LogoApi.md#uploaddefaultlogo) | **PUT** /brands/default/logos/default | Upload a default logo
*ReportApi* | [**getAccountStats**](docs/Api/ReportApi.md#getaccountstats) | **GET** /reports/accounts/{account_id} | Show an account report
*ReportApi* | [**getCampaignLinksStats**](docs/Api/ReportApi.md#getcampaignlinksstats) | **GET** /reports/campaigns/{campaign_id}/links | Show campaign links report
*ReportApi* | [**getCampaignStats**](docs/Api/ReportApi.md#getcampaignstats) | **GET** /reports/campaigns/{campaign_id} | Show campaign report
*ReportApi* | [**getEmailsStats**](docs/Api/ReportApi.md#getemailsstats) | **GET** /reports/emails | Show transactional email report
*ReportApi* | [**getListStats**](docs/Api/ReportApi.md#getliststats) | **GET** /reports/lists/{list_id} | Show list report
*ReportApi* | [**getSelfAccountStats**](docs/Api/ReportApi.md#getselfaccountstats) | **GET** /reports/accounts/self | Show my account report
*SegmentApi* | [**createSegment**](docs/Api/SegmentApi.md#createsegment) | **POST** /lists/{list_id}/segments | Create a segment
*SegmentApi* | [**deleteSegment**](docs/Api/SegmentApi.md#deletesegment) | **DELETE** /lists/{list_id}/segments/{segment_id} | Delete a segment
*SegmentApi* | [**getSegment**](docs/Api/SegmentApi.md#getsegment) | **GET** /lists/{list_id}/segments/{segment_id} | Show a segment details
*SegmentApi* | [**listSegments**](docs/Api/SegmentApi.md#listsegments) | **GET** /lists/{list_id}/segments | Show all segments
*SegmentApi* | [**patchSegment**](docs/Api/SegmentApi.md#patchsegment) | **PATCH** /lists/{list_id}/segments/{segment_id} | Update a segment
*SenderApi* | [**confirmSender**](docs/Api/SenderApi.md#confirmsender) | **POST** /brands/default/senders/{sender_id}/confirm-email | Confirm a sender
*SenderApi* | [**createSender**](docs/Api/SenderApi.md#createsender) | **POST** /brands/default/senders | Add a sender
*SenderApi* | [**deleteSender**](docs/Api/SenderApi.md#deletesender) | **DELETE** /brands/default/senders/{sender_id} | Delete a sender
*SenderApi* | [**getSender**](docs/Api/SenderApi.md#getsender) | **GET** /brands/default/senders/{sender_id} | Show a sender details
*SenderApi* | [**listSenders**](docs/Api/SenderApi.md#listsenders) | **GET** /brands/default/senders | Show all senders
*SenderApi* | [**patchSender**](docs/Api/SenderApi.md#patchsender) | **PATCH** /brands/default/senders/{sender_id} | Update a sender
*SenderApi* | [**resendConfirmationEmail**](docs/Api/SenderApi.md#resendconfirmationemail) | **POST** /brands/default/senders/{sender_id}/resend-confirmation-email | Resend confirmation email
*SubAccountApi* | [**createAccount**](docs/Api/SubAccountApi.md#createaccount) | **POST** /accounts | Create a sub-account
*SubAccountApi* | [**deleteAccount**](docs/Api/SubAccountApi.md#deleteaccount) | **DELETE** /accounts/{account_id} | Delete a sub-account
*SubAccountApi* | [**getAccount**](docs/Api/SubAccountApi.md#getaccount) | **GET** /accounts/{account_id} | Show a sub-account details
*SubAccountApi* | [**listAccounts**](docs/Api/SubAccountApi.md#listaccounts) | **GET** /accounts | Show all sub-accounts
*SubAccountApi* | [**patchAccount**](docs/Api/SubAccountApi.md#patchaccount) | **PATCH** /accounts/{account_id} | Update a sub-account
*SubAccountApi* | [**suspendAccount**](docs/Api/SubAccountApi.md#suspendaccount) | **POST** /accounts/{account_id}/suspend | Suspend a sub-account
*SubAccountApi* | [**unsuspendAccount**](docs/Api/SubAccountApi.md#unsuspendaccount) | **POST** /accounts/{account_id}/unsuspend | Unsuspend a sub-account
*SuppressedEmailApi* | [**createSuppressedEmail**](docs/Api/SuppressedEmailApi.md#createsuppressedemail) | **POST** /suppressed-emails | Add a suppressed email
*SuppressedEmailApi* | [**deleteSuppressedEmail**](docs/Api/SuppressedEmailApi.md#deletesuppressedemail) | **DELETE** /suppressed-emails/{email} | Delete a suppressed email
*SuppressedEmailApi* | [**listSuppressedEmails**](docs/Api/SuppressedEmailApi.md#listsuppressedemails) | **GET** /suppressed-emails | Show all suppressed emails
*TestEmailApi* | [**createTestEmail**](docs/Api/TestEmailApi.md#createtestemail) | **POST** /campaigns/{campaign_id}/test-emails | Add a test email
*TestEmailApi* | [**deleteTestEmail**](docs/Api/TestEmailApi.md#deletetestemail) | **DELETE** /campaigns/{campaign_id}/test-emails/{test_email_id} | Delete a test email
*TestEmailApi* | [**getTestEmail**](docs/Api/TestEmailApi.md#gettestemail) | **GET** /campaigns/{campaign_id}/test-emails/{test_email_id} | Show a test email
*TestEmailApi* | [**listTestEmails**](docs/Api/TestEmailApi.md#listtestemails) | **GET** /campaigns/{campaign_id}/test-emails | Show all test emails
*TokenApi* | [**createToken**](docs/Api/TokenApi.md#createtoken) | **POST** /token | Create a token
*TokenApi* | [**refreshToken**](docs/Api/TokenApi.md#refreshtoken) | **PUT** /token | Refresh a token
*TransactionalEmailApi* | [**sendEmail**](docs/Api/TransactionalEmailApi.md#sendemail) | **POST** /emails | Send a transactional email
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /users | Create a user
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete a user
*UserApi* | [**getSelfUser**](docs/Api/UserApi.md#getselfuser) | **GET** /users/self | Show my user details
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /users/{user_id} | Show a user details
*UserApi* | [**listUsers**](docs/Api/UserApi.md#listusers) | **GET** /users | Show all users in my account
*UserApi* | [**patchUser**](docs/Api/UserApi.md#patchuser) | **PATCH** /users/{user_id} | Update a user
*UserApi* | [**resetPassword**](docs/Api/UserApi.md#resetpassword) | **POST** /users/self/reset-password | Reset my password
*UserApi* | [**resetPasswordConfirm**](docs/Api/UserApi.md#resetpasswordconfirm) | **POST** /users/reset-password-confirm | Reset password confirmation
*UserApi* | [**resetUserPassword**](docs/Api/UserApi.md#resetuserpassword) | **POST** /users/{user_id}/reset-password | Reset a user password
*UserApi* | [**suspendUser**](docs/Api/UserApi.md#suspenduser) | **POST** /users/{user_id}/suspend | Suspend a user
*UserApi* | [**unsuspendUser**](docs/Api/UserApi.md#unsuspenduser) | **POST** /users/{user_id}/unsuspend | Unsuspend a user


## Documentation For Models

 - [AcceptListPolicyResponse](docs/Model/AcceptListPolicyResponse.md)
 - [AccountFullResponse](docs/Model/AccountFullResponse.md)
 - [AccountOwner](docs/Model/AccountOwner.md)
 - [AccountOwnerResponse](docs/Model/AccountOwnerResponse.md)
 - [AccountResponse](docs/Model/AccountResponse.md)
 - [AccountStatResponse](docs/Model/AccountStatResponse.md)
 - [AccountStatsResponse](docs/Model/AccountStatsResponse.md)
 - [AccountSummaryResponse](docs/Model/AccountSummaryResponse.md)
 - [AccountsResponse](docs/Model/AccountsResponse.md)
 - [Address](docs/Model/Address.md)
 - [AddressResponse](docs/Model/AddressResponse.md)
 - [ArchiveCampaignResponse](docs/Model/ArchiveCampaignResponse.md)
 - [ArchiveListResponse](docs/Model/ArchiveListResponse.md)
 - [Audience](docs/Model/Audience.md)
 - [AudienceResponse](docs/Model/AudienceResponse.md)
 - [AudienceSummaryResponse](docs/Model/AudienceSummaryResponse.md)
 - [BadRequestMessage](docs/Model/BadRequestMessage.md)
 - [BodyCreateTokenTokenPost](docs/Model/BodyCreateTokenTokenPost.md)
 - [BodyRefreshTokenTokenPut](docs/Model/BodyRefreshTokenTokenPut.md)
 - [CampaignContent](docs/Model/CampaignContent.md)
 - [CampaignContentResponse](docs/Model/CampaignContentResponse.md)
 - [CampaignFullResponse](docs/Model/CampaignFullResponse.md)
 - [CampaignLinkStatsResponse](docs/Model/CampaignLinkStatsResponse.md)
 - [CampaignLinksStatsResponse](docs/Model/CampaignLinksStatsResponse.md)
 - [CampaignLogResponse](docs/Model/CampaignLogResponse.md)
 - [CampaignLogsResponse](docs/Model/CampaignLogsResponse.md)
 - [CampaignResponse](docs/Model/CampaignResponse.md)
 - [CampaignStatResponse](docs/Model/CampaignStatResponse.md)
 - [CampaignStatsResponse](docs/Model/CampaignStatsResponse.md)
 - [CampaignSummaryResponse](docs/Model/CampaignSummaryResponse.md)
 - [CampaignsResponse](docs/Model/CampaignsResponse.md)
 - [CancelCampaignResponse](docs/Model/CancelCampaignResponse.md)
 - [ConfirmSender](docs/Model/ConfirmSender.md)
 - [ConfirmSenderResponse](docs/Model/ConfirmSenderResponse.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactFullResponse](docs/Model/ContactFullResponse.md)
 - [ContactResponse](docs/Model/ContactResponse.md)
 - [ContactsResponse](docs/Model/ContactsResponse.md)
 - [CreateAccount](docs/Model/CreateAccount.md)
 - [CreateAccountResponse](docs/Model/CreateAccountResponse.md)
 - [CreateAttributeResponse](docs/Model/CreateAttributeResponse.md)
 - [CreateCampaign](docs/Model/CreateCampaign.md)
 - [CreateCampaignResponse](docs/Model/CreateCampaignResponse.md)
 - [CreateContactResponse](docs/Model/CreateContactResponse.md)
 - [CreateCustomAttribute](docs/Model/CreateCustomAttribute.md)
 - [CreateForm](docs/Model/CreateForm.md)
 - [CreateFormResponse](docs/Model/CreateFormResponse.md)
 - [CreateListResponse](docs/Model/CreateListResponse.md)
 - [CreateSegmentResponse](docs/Model/CreateSegmentResponse.md)
 - [CreateSender](docs/Model/CreateSender.md)
 - [CreateSenderResponse](docs/Model/CreateSenderResponse.md)
 - [CreateSuppressedEmailResponse](docs/Model/CreateSuppressedEmailResponse.md)
 - [CreateTestEmailResponse](docs/Model/CreateTestEmailResponse.md)
 - [CreateUserResponse](docs/Model/CreateUserResponse.md)
 - [CustomAttribute](docs/Model/CustomAttribute.md)
 - [CustomAttributeFullResponse](docs/Model/CustomAttributeFullResponse.md)
 - [CustomAttributeResponse](docs/Model/CustomAttributeResponse.md)
 - [CustomAttributesDataResponse](docs/Model/CustomAttributesDataResponse.md)
 - [CustomAttributesResponse](docs/Model/CustomAttributesResponse.md)
 - [DeleteAccountResponse](docs/Model/DeleteAccountResponse.md)
 - [DeleteCampaignResponse](docs/Model/DeleteCampaignResponse.md)
 - [DeleteContactResponse](docs/Model/DeleteContactResponse.md)
 - [DeleteCustomAttributeResponse](docs/Model/DeleteCustomAttributeResponse.md)
 - [DeleteFormResponse](docs/Model/DeleteFormResponse.md)
 - [DeleteListResponse](docs/Model/DeleteListResponse.md)
 - [DeleteSegmentResponse](docs/Model/DeleteSegmentResponse.md)
 - [DeleteSenderResponse](docs/Model/DeleteSenderResponse.md)
 - [DeleteSuppressedEmailResponse](docs/Model/DeleteSuppressedEmailResponse.md)
 - [DeleteTestEmailResponse](docs/Model/DeleteTestEmailResponse.md)
 - [DeleteUserResponse](docs/Model/DeleteUserResponse.md)
 - [DomainInstructionResponse](docs/Model/DomainInstructionResponse.md)
 - [Domains](docs/Model/Domains.md)
 - [DomainsFullResponse](docs/Model/DomainsFullResponse.md)
 - [DomainsInstructionResponse](docs/Model/DomainsInstructionResponse.md)
 - [DomainsResponse](docs/Model/DomainsResponse.md)
 - [Email](docs/Model/Email.md)
 - [EmailContent](docs/Model/EmailContent.md)
 - [EmailLogResponse](docs/Model/EmailLogResponse.md)
 - [EmailLogsResponse](docs/Model/EmailLogsResponse.md)
 - [EmailStatResponse](docs/Model/EmailStatResponse.md)
 - [EmailStatsResponse](docs/Model/EmailStatsResponse.md)
 - [EmailTracking](docs/Model/EmailTracking.md)
 - [Form](docs/Model/Form.md)
 - [FormContent](docs/Model/FormContent.md)
 - [FormContentResponse](docs/Model/FormContentResponse.md)
 - [FormFullResponse](docs/Model/FormFullResponse.md)
 - [FormRedirections](docs/Model/FormRedirections.md)
 - [FormRedirectionsResponse](docs/Model/FormRedirectionsResponse.md)
 - [FormResponse](docs/Model/FormResponse.md)
 - [FormUrlsResponse](docs/Model/FormUrlsResponse.md)
 - [FormsResponse](docs/Model/FormsResponse.md)
 - [HTTPBadRequestError](docs/Model/HTTPBadRequestError.md)
 - [HTTPUnauthorizedError](docs/Model/HTTPUnauthorizedError.md)
 - [HTTPValidationError](docs/Model/HTTPValidationError.md)
 - [ImportContactData](docs/Model/ImportContactData.md)
 - [ImportContacts](docs/Model/ImportContacts.md)
 - [ImportContactsResponse](docs/Model/ImportContactsResponse.md)
 - [LinkFullResponse](docs/Model/LinkFullResponse.md)
 - [LinksResponse](docs/Model/LinksResponse.md)
 - [ListFullResponse](docs/Model/ListFullResponse.md)
 - [ListLogResponse](docs/Model/ListLogResponse.md)
 - [ListLogsResponse](docs/Model/ListLogsResponse.md)
 - [ListPagesResponse](docs/Model/ListPagesResponse.md)
 - [ListRedirectionsResponse](docs/Model/ListRedirectionsResponse.md)
 - [ListResponse](docs/Model/ListResponse.md)
 - [ListSenderResponse](docs/Model/ListSenderResponse.md)
 - [ListStatResponse](docs/Model/ListStatResponse.md)
 - [ListStatsResponse](docs/Model/ListStatsResponse.md)
 - [ListSummaryResponse](docs/Model/ListSummaryResponse.md)
 - [ListWebhookResponse](docs/Model/ListWebhookResponse.md)
 - [ListsResponse](docs/Model/ListsResponse.md)
 - [ModelList](docs/Model/ModelList.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PatchAccount](docs/Model/PatchAccount.md)
 - [PatchCampaign](docs/Model/PatchCampaign.md)
 - [PatchCampaignResponse](docs/Model/PatchCampaignResponse.md)
 - [PatchContact](docs/Model/PatchContact.md)
 - [PatchContactResponse](docs/Model/PatchContactResponse.md)
 - [PatchDomains](docs/Model/PatchDomains.md)
 - [PatchDomainsResponse](docs/Model/PatchDomainsResponse.md)
 - [PatchFormResponse](docs/Model/PatchFormResponse.md)
 - [PatchListResponse](docs/Model/PatchListResponse.md)
 - [PatchSegmentResponse](docs/Model/PatchSegmentResponse.md)
 - [PatchSelfAccount](docs/Model/PatchSelfAccount.md)
 - [PatchSenderResponse](docs/Model/PatchSenderResponse.md)
 - [PatchUser](docs/Model/PatchUser.md)
 - [PatchUserResponse](docs/Model/PatchUserResponse.md)
 - [Redirections](docs/Model/Redirections.md)
 - [RenderCampaignFullResponse](docs/Model/RenderCampaignFullResponse.md)
 - [RenderCampaignResponse](docs/Model/RenderCampaignResponse.md)
 - [ResendConfirmationEmailResponse](docs/Model/ResendConfirmationEmailResponse.md)
 - [ResetPasswordConfirm](docs/Model/ResetPasswordConfirm.md)
 - [ResetPasswordConfirmResponse](docs/Model/ResetPasswordConfirmResponse.md)
 - [ResetPasswordResponse](docs/Model/ResetPasswordResponse.md)
 - [ResetSelfPassword](docs/Model/ResetSelfPassword.md)
 - [ResetUserPassword](docs/Model/ResetUserPassword.md)
 - [ResumeCampaignResponse](docs/Model/ResumeCampaignResponse.md)
 - [ScheduleCampaign](docs/Model/ScheduleCampaign.md)
 - [ScheduleCampaignResponse](docs/Model/ScheduleCampaignResponse.md)
 - [Segment](docs/Model/Segment.md)
 - [SegmentFullResponse](docs/Model/SegmentFullResponse.md)
 - [SegmentResponse](docs/Model/SegmentResponse.md)
 - [SegmentsResponse](docs/Model/SegmentsResponse.md)
 - [SendEmailResponse](docs/Model/SendEmailResponse.md)
 - [SendTestEmail](docs/Model/SendTestEmail.md)
 - [SendTestEmailResponse](docs/Model/SendTestEmailResponse.md)
 - [Sender](docs/Model/Sender.md)
 - [SenderFullResponse](docs/Model/SenderFullResponse.md)
 - [SenderResponse](docs/Model/SenderResponse.md)
 - [SendersResponse](docs/Model/SendersResponse.md)
 - [SuppressedEmail](docs/Model/SuppressedEmail.md)
 - [SuppressedEmailResponse](docs/Model/SuppressedEmailResponse.md)
 - [SuppressedEmailsResponse](docs/Model/SuppressedEmailsResponse.md)
 - [SuspendAccountResponse](docs/Model/SuspendAccountResponse.md)
 - [SuspendCampaignResponse](docs/Model/SuspendCampaignResponse.md)
 - [SuspendUserResponse](docs/Model/SuspendUserResponse.md)
 - [TestEmail](docs/Model/TestEmail.md)
 - [TestEmailFullResponse](docs/Model/TestEmailFullResponse.md)
 - [TestEmailRecipient](docs/Model/TestEmailRecipient.md)
 - [TestEmailRecipientResponse](docs/Model/TestEmailRecipientResponse.md)
 - [TestEmailResponse](docs/Model/TestEmailResponse.md)
 - [TestEmailsResponse](docs/Model/TestEmailsResponse.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [Tracking](docs/Model/Tracking.md)
 - [TrackingResponse](docs/Model/TrackingResponse.md)
 - [UnarchiveListResponse](docs/Model/UnarchiveListResponse.md)
 - [UnauthorizedMessage](docs/Model/UnauthorizedMessage.md)
 - [UnsubscribeContactResponse](docs/Model/UnsubscribeContactResponse.md)
 - [UnsuspendAccountResponse](docs/Model/UnsuspendAccountResponse.md)
 - [UpdateList](docs/Model/UpdateList.md)
 - [UpdateSegment](docs/Model/UpdateSegment.md)
 - [UpdateSender](docs/Model/UpdateSender.md)
 - [UploadLogo](docs/Model/UploadLogo.md)
 - [UploadLogoResponse](docs/Model/UploadLogoResponse.md)
 - [UsageLimits](docs/Model/UsageLimits.md)
 - [UsageLimitsResponse](docs/Model/UsageLimitsResponse.md)
 - [User](docs/Model/User.md)
 - [UserFullResponse](docs/Model/UserFullResponse.md)
 - [UserResponse](docs/Model/UserResponse.md)
 - [UserSummaryResponse](docs/Model/UserSummaryResponse.md)
 - [UsersResponse](docs/Model/UsersResponse.md)
 - [ValidateDomainsResponse](docs/Model/ValidateDomainsResponse.md)
 - [ValidationError](docs/Model/ValidationError.md)
 - [Webhook](docs/Model/Webhook.md)


## Documentation For Authorization



## OAuth2PasswordBearer


- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: N/A


## Author



