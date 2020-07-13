# Cakemail\SubAccountApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](SubAccountApi.md#createaccount) | **POST** /accounts | Create a sub-account
[**deleteAccount**](SubAccountApi.md#deleteaccount) | **DELETE** /accounts/{account_id} | Delete a sub-account
[**getAccount**](SubAccountApi.md#getaccount) | **GET** /accounts/{account_id} | Show a sub-account details
[**listAccounts**](SubAccountApi.md#listaccounts) | **GET** /accounts | Show all sub-accounts
[**patchAccount**](SubAccountApi.md#patchaccount) | **PATCH** /accounts/{account_id} | Update a sub-account
[**suspendAccount**](SubAccountApi.md#suspendaccount) | **POST** /accounts/{account_id}/suspend | Suspend a sub-account
[**unsuspendAccount**](SubAccountApi.md#unsuspendaccount) | **POST** /accounts/{account_id}/unsuspend | Unsuspend a sub-account

# **createAccount**
> \Cakemail\Model\CreateAccountResponse createAccount($body, $partner_account_id)

Create a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\CreateAccount(); // \Cakemail\Model\CreateAccount | 
$partner_account_id = 56; // int | 

try {
    $result = $apiInstance->createAccount($body, $partner_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\CreateAccount**](../Model/CreateAccount.md)|  |
 **partner_account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateAccountResponse**](../Model/CreateAccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccount**
> \Cakemail\Model\DeleteAccountResponse deleteAccount($account_id)

Delete a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |

### Return type

[**\Cakemail\Model\DeleteAccountResponse**](../Model/DeleteAccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Cakemail\Model\AccountResponse getAccount($account_id)

Show a sub-account details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->getAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |

### Return type

[**\Cakemail\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccounts**
> \Cakemail\Model\AccountsResponse listAccounts($partner_account_id, $page, $per_page, $with_count, $recursive, $sort, $filter)

Show all sub-accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$recursive = false; // bool | 
$sort = "sort_example"; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `name`   - `created_on`
$filter = "filter_example"; // string | Valid Terms:   - `name`   - `status`  Valid Operators:   - `==`  Query separator:   - `;`

try {
    $result = $apiInstance->listAccounts($partner_account_id, $page, $per_page, $with_count, $recursive, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->listAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_account_id** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **per_page** | **int**|  | [optional] [default to 50]
 **with_count** | **bool**|  | [optional] [default to false]
 **recursive** | **bool**|  | [optional] [default to false]
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;created_on&#x60; | [optional]
 **filter** | **string**| Valid Terms:   - &#x60;name&#x60;   - &#x60;status&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]

### Return type

[**\Cakemail\Model\AccountsResponse**](../Model/AccountsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAccount**
> \Cakemail\Model\AccountResponse patchAccount($body, $account_id)

Update a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\PatchAccount(); // \Cakemail\Model\PatchAccount | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchAccount($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->patchAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\PatchAccount**](../Model/PatchAccount.md)|  |
 **account_id** | **int**|  |

### Return type

[**\Cakemail\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suspendAccount**
> \Cakemail\Model\SuspendAccountResponse suspendAccount($account_id)

Suspend a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->suspendAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->suspendAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |

### Return type

[**\Cakemail\Model\SuspendAccountResponse**](../Model/SuspendAccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsuspendAccount**
> \Cakemail\Model\UnsuspendAccountResponse unsuspendAccount($account_id)

Unsuspend a sub-account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 

try {
    $result = $apiInstance->unsuspendAccount($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->unsuspendAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**|  |

### Return type

[**\Cakemail\Model\UnsuspendAccountResponse**](../Model/UnsuspendAccountResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

