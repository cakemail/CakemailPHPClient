# Cakemail\TransactionalEmailApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEmail**](TransactionalEmailApi.md#sendEmail) | **POST** /emails | Send a transactional email



## sendEmail

> \Cakemail\Model\SendEmailResponse sendEmail($email, $account_id)

Send a transactional email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\TransactionalEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = new \Cakemail\Model\Email(); // \Cakemail\Model\Email | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->sendEmail($email, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**\Cakemail\Model\Email**](../Model/Email.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SendEmailResponse**](../Model/SendEmailResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

