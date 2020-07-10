# Cakemail\FormApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createForm**](FormApi.md#createForm) | **POST** /forms | Create a form
[**deleteForm**](FormApi.md#deleteForm) | **DELETE** /forms/{form_id} | Delete a form
[**getForm**](FormApi.md#getForm) | **GET** /forms/{form_id} | Show a form details
[**listForms**](FormApi.md#listForms) | **GET** /forms | Show all forms
[**patchForm**](FormApi.md#patchForm) | **PATCH** /forms/{form_id} | Update a form



## createForm

> \Cakemail\Model\CreateFormResponse createForm($create_form, $account_id)

Create a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_form = new \Cakemail\Model\CreateForm(); // \Cakemail\Model\CreateForm | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createForm($create_form, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->createForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_form** | [**\Cakemail\Model\CreateForm**](../Model/CreateForm.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateFormResponse**](../Model/CreateFormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteForm

> \Cakemail\Model\DeleteFormResponse deleteForm($form_id, $account_id)

Delete a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->deleteForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteFormResponse**](../Model/DeleteFormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getForm

> \Cakemail\Model\FormResponse getForm($form_id, $account_id)

Show a form details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getForm($form_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->getForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **string**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\FormResponse**](../Model/FormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listForms

> \Cakemail\Model\FormsResponse listForms($account_id, $page, $per_page, $with_count, $sort)

Show all forms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$sort = 'sort_example'; // string | Sort term and direction, using syntax `[-|+]term`.  Valid terms:   - `name`   - `language`   - `created_on`   - `last_updated_on`   - `list_id`   - `status`

try {
    $result = $apiInstance->listForms($account_id, $page, $per_page, $with_count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->listForms: ', $e->getMessage(), PHP_EOL;
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
 **sort** | **string**| Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;language&#x60;   - &#x60;created_on&#x60;   - &#x60;last_updated_on&#x60;   - &#x60;list_id&#x60;   - &#x60;status&#x60; | [optional]

### Return type

[**\Cakemail\Model\FormsResponse**](../Model/FormsResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchForm

> \Cakemail\Model\PatchFormResponse patchForm($form_id, $form, $account_id)

Update a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Cakemail\Api\FormApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_id = 'form_id_example'; // string | 
$form = new \Cakemail\Model\Form(); // \Cakemail\Model\Form | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchForm($form_id, $form, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormApi->patchForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **string**|  |
 **form** | [**\Cakemail\Model\Form**](../Model/Form.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchFormResponse**](../Model/PatchFormResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

