# Cakemail\UserApi

All URIs are relative to *https://api.cakemail.dev*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](UserApi.md#createuser) | **POST** /users | Create a user
[**deleteUser**](UserApi.md#deleteuser) | **DELETE** /users/{user_id} | Delete a user
[**forgotMyPassword**](UserApi.md#forgotmypassword) | **POST** /users/forgot-my-password | Forgot my password
[**getSelfUser**](UserApi.md#getselfuser) | **GET** /users/self | Show my user details
[**getUser**](UserApi.md#getuser) | **GET** /users/{user_id} | Show a user details
[**listUsers**](UserApi.md#listusers) | **GET** /users | Show all users in my account
[**patchUser**](UserApi.md#patchuser) | **PATCH** /users/{user_id} | Update a user
[**resetPasswordConfirm**](UserApi.md#resetpasswordconfirm) | **POST** /users/reset-password-confirm | Reset password confirmation
[**resetSelfPassword**](UserApi.md#resetselfpassword) | **POST** /users/self/reset-password | Reset my password
[**resetUserPassword**](UserApi.md#resetuserpassword) | **POST** /users/{user_id}/reset-password | Reset a user password
[**suspendUser**](UserApi.md#suspenduser) | **POST** /users/{user_id}/suspend | Suspend a user
[**unsuspendUser**](UserApi.md#unsuspenduser) | **POST** /users/{user_id}/unsuspend | Unsuspend a user

# **createUser**
> \Cakemail\Model\CreateUserResponse createUser($body, $account_id)

Create a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\User(); // \Cakemail\Model\User | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->createUser($body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\User**](../Model/User.md)|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\CreateUserResponse**](../Model/CreateUserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \Cakemail\Model\DeleteUserResponse deleteUser($user_id, $account_id)

Delete a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->deleteUser($user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\DeleteUserResponse**](../Model/DeleteUserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forgotMyPassword**
> \Cakemail\Model\ResetPasswordResponse forgotMyPassword($body)

Forgot my password

Sends an email containing a reset password token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cakemail\Model\ForgotMyPassword(); // \Cakemail\Model\ForgotMyPassword | 

try {
    $result = $apiInstance->forgotMyPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->forgotMyPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\ForgotMyPassword**](../Model/ForgotMyPassword.md)|  |

### Return type

[**\Cakemail\Model\ResetPasswordResponse**](../Model/ResetPasswordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSelfUser**
> \Cakemail\Model\UserResponse getSelfUser()

Show my user details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSelfUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getSelfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cakemail\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Cakemail\Model\UserResponse getUser($user_id, $account_id)

Show a user details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->getUser($user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsers**
> \Cakemail\Model\UsersResponse listUsers($account_id, $page, $per_page, $with_count, $filter)

Show all users in my account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | 
$page = 1; // int | 
$per_page = 50; // int | 
$with_count = false; // bool | 
$filter = "filter_example"; // string | Valid Terms:   - `email`  Valid Operators:   - `==`  Query separator:   - `;`

try {
    $result = $apiInstance->listUsers($account_id, $page, $per_page, $with_count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUsers: ', $e->getMessage(), PHP_EOL;
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
 **filter** | **string**| Valid Terms:   - &#x60;email&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; | [optional]

### Return type

[**\Cakemail\Model\UsersResponse**](../Model/UsersResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUser**
> \Cakemail\Model\PatchUserResponse patchUser($body, $user_id, $account_id)

Update a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Cakemail\Model\PatchUser(); // \Cakemail\Model\PatchUser | 
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->patchUser($body, $user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->patchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\PatchUser**](../Model/PatchUser.md)|  |
 **user_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\PatchUserResponse**](../Model/PatchUserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPasswordConfirm**
> \Cakemail\Model\ResetPasswordConfirmResponse resetPasswordConfirm($body)

Reset password confirmation

Change a user password if the reset password token is valid for that user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Cakemail\Model\ResetPasswordConfirm(); // \Cakemail\Model\ResetPasswordConfirm | 

try {
    $result = $apiInstance->resetPasswordConfirm($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetPasswordConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Cakemail\Model\ResetPasswordConfirm**](../Model/ResetPasswordConfirm.md)|  |

### Return type

[**\Cakemail\Model\ResetPasswordConfirmResponse**](../Model/ResetPasswordConfirmResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetSelfPassword**
> \Cakemail\Model\ResetPasswordResponse resetSelfPassword()

Reset my password

Sends an email containing a reset password token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->resetSelfPassword();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetSelfPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Cakemail\Model\ResetPasswordResponse**](../Model/ResetPasswordResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetUserPassword**
> \Cakemail\Model\ResetPasswordResponse resetUserPassword($user_id, $body, $account_id)

Reset a user password

Sends an email containing a reset password token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$body = new \Cakemail\Model\ResetUserPassword(); // \Cakemail\Model\ResetUserPassword | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->resetUserPassword($user_id, $body, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->resetUserPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **body** | [**\Cakemail\Model\ResetUserPassword**](../Model/ResetUserPassword.md)|  | [optional]
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\ResetPasswordResponse**](../Model/ResetPasswordResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suspendUser**
> \Cakemail\Model\SuspendUserResponse suspendUser($user_id, $account_id)

Suspend a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->suspendUser($user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->suspendUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SuspendUserResponse**](../Model/SuspendUserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unsuspendUser**
> \Cakemail\Model\SuspendUserResponse unsuspendUser($user_id, $account_id)

Unsuspend a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = Cakemail\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Cakemail\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | 
$account_id = 56; // int | 

try {
    $result = $apiInstance->unsuspendUser($user_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->unsuspendUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**|  |
 **account_id** | **int**|  | [optional]

### Return type

[**\Cakemail\Model\SuspendUserResponse**](../Model/SuspendUserResponse.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

