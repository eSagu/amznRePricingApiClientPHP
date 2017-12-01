# eSagu\Amzn\RePricing\V1\RepricingShippingCostsApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingShippingCostsApi.md#callList) | **GET** /shipping-costs | Gets all shipping costs fo a service.
[**delete**](RepricingShippingCostsApi.md#delete) | **DELETE** /shipping-costs/{shippingCostsId} | Remove the repricing shipping costs by id.
[**get**](RepricingShippingCostsApi.md#get) | **GET** /shipping-costs/{shippingCostsId} | Get the shipping costs specified by it&#39;s id.
[**post**](RepricingShippingCostsApi.md#post) | **POST** /shipping-costs | Adds new repricing shipping costs for service.
[**put**](RepricingShippingCostsApi.md#put) | **PUT** /shipping-costs/{shippingCostsId} | Edit the repricing shipping costs by id.


# **callList**
> \eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO[] callList()

Gets all shipping costs fo a service.

API endpoint for working with the sipping costs, the shipping costs are used for the internal price calculation and does not get send to amzn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingShippingCostsApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingShippingCostsApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO[]**](../Model/RepricingShippingCostsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($shipping_costs_id)

Remove the repricing shipping costs by id.

API endpoint for working with the sipping costs, the shipping costs are used for the internal price calculation and does not get send to amzn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingShippingCostsApi();
$shipping_costs_id = 789; // int | 

try {
    $api_instance->delete($shipping_costs_id);
} catch (Exception $e) {
    echo 'Exception when calling RepricingShippingCostsApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_costs_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO get($shipping_costs_id)

Get the shipping costs specified by it's id.

API endpoint for working with the sipping costs, the shipping costs are used for the internal price calculation and does not get send to amzn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingShippingCostsApi();
$shipping_costs_id = 789; // int | 

try {
    $result = $api_instance->get($shipping_costs_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingShippingCostsApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_costs_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO**](../Model/RepricingShippingCostsDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds new repricing shipping costs for service.

API endpoint for working with the sipping costs, the shipping costs are used for the internal price calculation and does not get send to amzn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingShippingCostsApi();
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingShippingCostsApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($shipping_costs_id, $body)

Edit the repricing shipping costs by id.

API endpoint for working with the sipping costs, the shipping costs are used for the internal price calculation and does not get send to amzn.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingShippingCostsApi();
$shipping_costs_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO(); // \eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO | 

try {
    $api_instance->put($shipping_costs_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingShippingCostsApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_costs_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO**](../Model/\eSagu\Amzn\RePricing\V1\Model\RepricingShippingCostsDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

