# Cakemail\TestEmailApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTestEmail**](TestEmailApi.md#createtestemail) | **POST** /campaigns/{campaign_id}/test-emails | Add a test email
[**deleteTestEmail**](TestEmailApi.md#deletetestemail) | **DELETE** /campaigns/{campaign_id}/test-emails/{test_email_id} | Delete a test email
[**getTestEmail**](TestEmailApi.md#gettestemail) | **GET** /campaigns/{campaign_id}/test-emails/{test_email_id} | Show a test email
[**listTestEmails**](TestEmailApi.md#listtestemails) | **GET** /campaigns/{campaign_id}/test-emails | Show all test emails

# **createTestEmail**
> \Cakemail\Model\CreateTestEmailResponse createTestEmail($body, $campaign_id, $account_id)

Add a test email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\TestEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\TestEmail(); // \Cakemail\Model\TestEmail | 
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createTestEmail($body, $campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestEmailApi->createTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\TestEmail**](../Model/TestEmail.md)|  |
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateTestEmailResponse**](../Model/CreateTestEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTestEmail**
> \Cakemail\Model\DeleteTestEmailResponse deleteTestEmail($test_email_id, $campaign_id, $account_id)

Delete a test email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\TestEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_email_id = 56; // int | 
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteTestEmail($test_email_id, $campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestEmailApi->deleteTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_email_id** | **int**|  |
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteTestEmailResponse**](../Model/DeleteTestEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTestEmail**
> \Cakemail\Model\TestEmailResponse getTestEmail($test_email_id, $campaign_id, $account_id)

Show a test email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\TestEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$test_email_id = 56; // int | 
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getTestEmail($test_email_id, $campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestEmailApi->getTestEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **test_email_id** | **int**|  |
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\TestEmailResponse**](../Model/TestEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTestEmails**
> \Cakemail\Model\TestEmailsResponse listTestEmails($campaign_id, $account_id)

Show all test emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\TestEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->listTestEmails($campaign_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestEmailApi->listTestEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\TestEmailsResponse**](../Model/TestEmailsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

