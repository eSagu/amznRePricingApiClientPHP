# eSagu\Amzn\RePricing\V1\RepricingCSVRequestApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingCSVRequestApi.md#callList) | **GET** /csv-request | Get a list of all CSV requests of a user&#39;s service.
[**get**](RepricingCSVRequestApi.md#get) | **GET** /csv-request/{csvRequestId} | Get a single CSV request of a user&#39;s service specified by its id.
[**post**](RepricingCSVRequestApi.md#post) | **POST** /csv-request | Creates a new CSV request for a user&#39;s service.


# **callList**
> \eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO[] callList()

Get a list of all CSV requests of a user's service.

API endpoint for requesting CSV files, you can find our CSV specification here: https://www.esagu.de/en/csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO[]**](../Model/RepricingCSVRequestDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO get($csv_request_id)

Get a single CSV request of a user's service specified by its id.

API endpoint for requesting CSV files, you can find our CSV specification here: https://www.esagu.de/en/csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestApi();
$csv_request_id = 789; // int | 

try {
    $result = $api_instance->get($csv_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_request_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO**](../Model/RepricingCSVRequestDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Creates a new CSV request for a user's service.

API endpoint for requesting CSV files, you can find our CSV specification here: https://www.esagu.de/en/csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVRequestApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVRequestApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingCSVRequestDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

