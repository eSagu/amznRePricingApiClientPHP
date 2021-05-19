# eSagu\Amzn\RePricing\V1\RepricingBusinessPriceSettingsApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingBusinessPriceSettingsApi.md#callList) | **GET** /business-price-settings | Gets all business price settings of a service.
[**delete**](RepricingBusinessPriceSettingsApi.md#delete) | **DELETE** /business-price-settings/{businessPriceSettingsId} | Delete a business price settings by id.
[**get**](RepricingBusinessPriceSettingsApi.md#get) | **GET** /business-price-settings/{businessPriceSettingsId} | Get a business price settings specified by it&#39;s id.
[**post**](RepricingBusinessPriceSettingsApi.md#post) | **POST** /business-price-settings | Adds a new business price settings.
[**put**](RepricingBusinessPriceSettingsApi.md#put) | **PUT** /business-price-settings/{businessPriceSettingsId} | Edit a business price settings.


# **callList**
> \eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO[] callList()

Gets all business price settings of a service.

API endpoint for editing business price settings. applied on associated items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBusinessPriceSettingsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBusinessPriceSettingsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO[]**](../Model/RepricingBusinessPriceSettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($business_price_settings_id)

Delete a business price settings by id.

API endpoint for editing business price settings applied on associated items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBusinessPriceSettingsApi();
$business_price_settings_id = 789; // int | 

try {
    $api_instance->delete($business_price_settings_id);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBusinessPriceSettingsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_price_settings_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO get($business_price_settings_id)

Get a business price settings specified by it's id.

API endpoint for editing business price settings. applied on associated items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBusinessPriceSettingsApi();
$business_price_settings_id = 789; // int | 

try {
    $result = $api_instance->get($business_price_settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBusinessPriceSettingsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_price_settings_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO**](../Model/RepricingBusinessPriceSettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds a new business price settings.

API endpoint for editing business price settings applied on associated items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBusinessPriceSettingsApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBusinessPriceSettingsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($business_price_settings_id, $body)

Edit a business price settings.

API endpoint for editing business price settings applied on associated items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingBusinessPriceSettingsApi();
$business_price_settings_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO | 

try {
    $api_instance->put($business_price_settings_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingBusinessPriceSettingsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_price_settings_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingBusinessPriceSettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

