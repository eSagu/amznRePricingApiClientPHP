# eSagu\Amzn\RePricing\V1\RepricingSettingsApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get**](RepricingSettingsApi.md#get) | **GET** /settings | Gets the repricing settings.
[**post**](RepricingSettingsApi.md#post) | **POST** /settings | Adds new repricing settings if not exists.
[**put**](RepricingSettingsApi.md#put) | **PUT** /settings | Edit the repricing settings.


# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO get()

Gets the repricing settings.

API endpoint for repricing settings, you can enable or disable the up and downloads and set the number of uploads per hour here for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingSettingsApi();

try {
    $result = $api_instance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingSettingsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO**](../Model/RepricingSettingsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds new repricing settings if not exists.

API endpoint for repricing settings, you can enable or disable the up and downloads and set the number of uploads per hour here for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingSettingsApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingSettingsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($body)

Edit the repricing settings.

API endpoint for repricing settings, you can enable or disable the up and downloads and set the number of uploads per hour here for example.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingSettingsApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO | 

try {
    $api_instance->put($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingSettingsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingSettingsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

