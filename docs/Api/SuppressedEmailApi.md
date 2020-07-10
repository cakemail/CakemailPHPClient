# Cakemail\SuppressedEmailApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSuppressedEmail**](SuppressedEmailApi.md#createSuppressedEmail) | **POST** /suppressed-emails | Add a suppressed email
[**deleteSuppressedEmail**](SuppressedEmailApi.md#deleteSuppressedEmail) | **DELETE** /suppressed-emails/{email} | Delete a suppressed email
[**listSuppressedEmails**](SuppressedEmailApi.md#listSuppressedEmails) | **GET** /suppressed-emails | Show all suppressed emails



## createSuppressedEmail

> \Cakemail\Model\CreateSuppressedEmailResponse createSuppressedEmail($suppressed_email, $account_id)

Add a suppressed email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SuppressedEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$suppressed_email = new \Cakemail\Model\SuppressedEmail(); // \Cakemail\Model\SuppressedEmail | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createSuppressedEmail($suppressed_email, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressedEmailApi->createSuppressedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **suppressed_email** | [**\Cakemail\Model\SuppressedEmail**](../Model/SuppressedEmail.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateSuppressedEmailResponse**](../Model/CreateSuppressedEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSuppressedEmail

> \Cakemail\Model\DeleteSuppressedEmailResponse deleteSuppressedEmail($email, $account_id)

Delete a suppressed email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SuppressedEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string | Full email, a local part wildcard or a domain wildcard. Examples: *@domain.com, john@*, john@domain.com
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteSuppressedEmail($email, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressedEmailApi->deleteSuppressedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Full email, a local part wildcard or a domain wildcard. Examples: *@domain.com, john@*, john@domain.com |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteSuppressedEmailResponse**](../Model/DeleteSuppressedEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSuppressedEmails

> \Cakemail\Model\SuppressedEmailsResponse listSuppressedEmails($account_id, $page, $per_page, $with_count)

Show all suppressed emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\SuppressedEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 

try {
    $result = $apiInstance->listSuppressedEmails($account_id, $page, $per_page, $with_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressedEmailApi->listSuppressedEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]

### Return type

[**\Cakemail\Model\SuppressedEmailsResponse**](../Model/SuppressedEmailsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

