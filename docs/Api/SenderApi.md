# Cakemail\SenderApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmSender**](SenderApi.md#confirmsender) | **POST** /brands/default/senders/{sender_id}/confirm-email | Confirm a sender
[**createSender**](SenderApi.md#createsender) | **POST** /brands/default/senders | Add a sender
[**deleteSender**](SenderApi.md#deletesender) | **DELETE** /brands/default/senders/{sender_id} | Delete a sender
[**getSender**](SenderApi.md#getsender) | **GET** /brands/default/senders/{sender_id} | Show a sender details
[**listSenders**](SenderApi.md#listsenders) | **GET** /brands/default/senders | Show all senders
[**patchSender**](SenderApi.md#patchsender) | **PATCH** /brands/default/senders/{sender_id} | Update a sender
[**resendConfirmationEmail**](SenderApi.md#resendconfirmationemail) | **POST** /brands/default/senders/{sender_id}/resend-confirmation-email | Resend confirmation email

# **confirmSender**
> \Cakemail\Model\ConfirmSenderResponse confirmSender($body, $sender_id, $account_id)

Confirm a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\ConfirmSender(); // \Cakemail\Model\ConfirmSender | 
$sender_id = "sender_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->confirmSender($body, $sender_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->confirmSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\ConfirmSender**](../Model/ConfirmSender.md)|  |
 **sender_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ConfirmSenderResponse**](../Model/ConfirmSenderResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSender**
> \Cakemail\Model\CreateSenderResponse createSender($body, $account_id)

Add a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\CreateSender(); // \Cakemail\Model\CreateSender | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createSender($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->createSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\CreateSender**](../Model/CreateSender.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateSenderResponse**](../Model/CreateSenderResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSender**
> \Cakemail\Model\DeleteSenderResponse deleteSender($sender_id, $account_id)

Delete a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = "sender_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteSender($sender_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->deleteSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteSenderResponse**](../Model/DeleteSenderResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSender**
> \Cakemail\Model\SenderResponse getSender($sender_id, $account_id)

Show a sender details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = "sender_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getSender($sender_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->getSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSenders**
> \Cakemail\Model\SendersResponse listSenders($page, $per_page, $account_id, $with_count, $sort)

Show all senders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | 
$per_page = 50; // int | 
$account_id = 56; // int | 
$with_count = false; // bool | 
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `name`   - `email`   - `confirmed`

try {
    $result = $apiInstance->listSenders($page, $per_page, $account_id, $with_count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->listSenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **account_id** | **int**|  | [optional]
 **with_count** | **bool**|  | [optional] [default to false]
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;email&#x60;   - &#x60;confirmed&#x60; | [optional]

### Return type

[**\Cakemail\Model\SendersResponse**](../Model/SendersResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSender**
> \Cakemail\Model\PatchSenderResponse patchSender($body, $sender_id, $account_id)

Update a sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\UpdateSender(); // \Cakemail\Model\UpdateSender | 
$sender_id = "sender_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchSender($body, $sender_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->patchSender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\UpdateSender**](../Model/UpdateSender.md)|  |
 **sender_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchSenderResponse**](../Model/PatchSenderResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendConfirmationEmail**
> \Cakemail\Model\ResendConfirmationEmailResponse resendConfirmationEmail($sender_id, $account_id)

Resend confirmation email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sender_id = "sender_id_example"; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->resendConfirmationEmail($sender_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SenderApi->resendConfirmationEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ResendConfirmationEmailResponse**](../Model/ResendConfirmationEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

