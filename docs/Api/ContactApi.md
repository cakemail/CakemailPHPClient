# Cakemail\ContactApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContact**](ContactApi.md#createcontact) | **POST** /lists/{list_id}/contacts | Add a contact in a list
[**deleteContact**](ContactApi.md#deletecontact) | **DELETE** /lists/{list_id}/contacts/{contact_id} | Delete a contact
[**getContact**](ContactApi.md#getcontact) | **GET** /lists/{list_id}/contacts/{contact_id} | Show a contact details
[**importContacts**](ContactApi.md#importcontacts) | **POST** /lists/{list_id}/import-contacts | Import contacts
[**listContactsOfList**](ContactApi.md#listcontactsoflist) | **GET** /lists/{list_id}/contacts | Show all contacts in a list
[**listContactsOfSegment**](ContactApi.md#listcontactsofsegment) | **GET** /lists/{list_id}/segments/{segment_id}/contacts | Show all contacts in a segment
[**patchContact**](ContactApi.md#patchcontact) | **PATCH** /lists/{list_id}/contacts/{contact_id} | Update a contact
[**unsubscribeContact**](ContactApi.md#unsubscribecontact) | **POST** /lists/{list_id}/contacts/{contact_id}/unsubscribe | Unsubscribe a contact from a list

# **createContact**
> \Cakemail\Model\CreateContactResponse createContact($body, $list_id, $account_id)

Add a contact in a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\Contact(); // \Cakemail\Model\Contact | 
$list_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createContact($body, $list_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\Contact**](../Model/Contact.md)|  |
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateContactResponse**](../Model/CreateContactResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> \Cakemail\Model\DeleteContactResponse deleteContact($list_id, $contact_id, $account_id)

Delete a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$contact_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteContact($list_id, $contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **contact_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteContactResponse**](../Model/DeleteContactResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContact**
> \Cakemail\Model\ContactResponse getContact($list_id, $contact_id, $account_id)

Show a contact details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$contact_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getContact($list_id, $contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **contact_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importContacts**
> \Cakemail\Model\ImportContactsResponse importContacts($body, $list_id, $account_id)

Import contacts

Synchronize your own list with Cakemail by importing to your active, unsubscribed or delete contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\ImportContacts(); // \Cakemail\Model\ImportContacts | 
$list_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->importContacts($body, $list_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->importContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\ImportContacts**](../Model/ImportContacts.md)|  |
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ImportContactsResponse**](../Model/ImportContactsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContactsOfList**
> \Cakemail\Model\ContactsResponse listContactsOfList($list_id, $account_id, $page, $per_page, $with_count, $query, $sort, $filter)

Show all contacts in a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$query = "query_example"; // string | 
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `name`   - `email`   - `created_on`   - `scheduled_for`   - `scheduled_on`   - `type`
$filter = "filter_example"; // string | Valid Terms:   - `status`   - `email`  Valid Operators:   - `==`  Query separator:   - `;`

try {
    $result = $apiInstance->listContactsOfList($list_id, $account_id, $page, $per_page, $with_count, $query, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactsOfList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **query** | **string**|  | [optional]
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;email&#x60;   - &#x60;created_on&#x60;   - &#x60;scheduled_for&#x60;   - &#x60;scheduled_on&#x60;   - &#x60;type&#x60; | [optional]
 **filter** | **string**| Valid Terms:   - &#x60;status&#x60;   - &#x60;email&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]

### Return type

[**\Cakemail\Model\ContactsResponse**](../Model/ContactsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContactsOfSegment**
> \Cakemail\Model\ContactsResponse listContactsOfSegment($list_id, $segment_id, $account_id, $page, $per_page, $with_count, $sort, $query)

Show all contacts in a segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$segment_id = 56; // int | 
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$sort = "sort_example"; // string | 
$query = "query_example"; // string | 

try {
    $result = $apiInstance->listContactsOfSegment($list_id, $segment_id, $account_id, $page, $per_page, $with_count, $sort, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactsOfSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **segment_id** | **int**|  |
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **sort** | **string**|  | [optional]
 **query** | **string**|  | [optional]

### Return type

[**\Cakemail\Model\ContactsResponse**](../Model/ContactsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchContact**
> \Cakemail\Model\PatchContactResponse patchContact($body, $list_id, $contact_id, $account_id)

Update a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\PatchContact(); // \Cakemail\Model\PatchContact | 
$list_id = 56; // int | 
$contact_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchContact($body, $list_id, $contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->patchContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\PatchContact**](../Model/PatchContact.md)|  |
 **list_id** | **int**|  |
 **contact_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchContactResponse**](../Model/PatchContactResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsubscribeContact**
> \Cakemail\Model\UnsubscribeContactResponse unsubscribeContact($list_id, $contact_id, $account_id)

Unsubscribe a contact from a list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = 56; // int | 
$contact_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->unsubscribeContact($list_id, $contact_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->unsubscribeContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**|  |
 **contact_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\UnsubscribeContactResponse**](../Model/UnsubscribeContactResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

