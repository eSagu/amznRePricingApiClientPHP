# eSagu\Amzn\RePricing\V1\RepricingCSVRequestPresetApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingCSVRequestPresetApi.md#callList) | **GET** /csv-request/preset | Gets csv request presets .
[**delete**](RepricingCSVRequestPresetApi.md#delete) | **DELETE** /csv-request/preset/{csvRequestPresetId} | Delete a csv request preset by id.
[**get**](RepricingCSVRequestPresetApi.md#get) | **GET** /csv-request/preset/{csvRequestPresetId} | Get a csv request preset specified by it&#39;s id.
[**post**](RepricingCSVRequestPresetApi.md#post) | **POST** /csv-request/preset | Adds a csv request preset.
[**put**](RepricingCSVRequestPresetApi.md#put) | **PUT** /csv-request/preset/{csvRequestPresetId} | Edit a csv request preset.


# **callList**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO[] callList()

Gets csv request presets .

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"Repricing CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestPresetApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestPresetApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO[]**](../Model/RepricingCSVRequestPresetDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($csv_request_preset_id)

Delete a csv request preset by id.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"Repricing CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestPresetApi();
$csv_request_preset_id = 789; // int | 

try {
    $api_instance->delete($csv_request_preset_id);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestPresetApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_preset_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO get($csv_request_preset_id)

Get a csv request preset specified by it's id.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"Repricing CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestPresetApi();
$csv_request_preset_id = 789; // int | 

try {
    $result = $api_instance->get($csv_request_preset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestPresetApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_preset_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO**](../Model/RepricingCSVRequestPresetDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds a csv request preset.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"Repricing CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestPresetApi();
$body = new \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO(); // \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestPresetApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO**](../Model/\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($csv_request_preset_id, $body)

Edit a csv request preset.

API endpoint for csv request presets, a preset allows you to save a CSV template which can be requested here \"Repricing CSVRequest\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestPresetApi();
$csv_request_preset_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO(); // \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO | 

try {
    $api_instance->put($csv_request_preset_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestPresetApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_preset_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO**](../Model/\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestPresetDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

