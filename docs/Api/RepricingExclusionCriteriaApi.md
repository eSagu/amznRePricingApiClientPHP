# eSagu\Amzn\RePricing\V1\RepricingExclusionCriteriaApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingExclusionCriteriaApi.md#callList) | **GET** /exclusion-criteria | Gets all exclusion criteria of a service.
[**delete**](RepricingExclusionCriteriaApi.md#delete) | **DELETE** /exclusion-criteria/{exclusionCriteriaId} | Delete the exclusion criteria.
[**get**](RepricingExclusionCriteriaApi.md#get) | **GET** /exclusion-criteria/{exclusionCriteriaId} | Gets the exclusion criteria by id.
[**post**](RepricingExclusionCriteriaApi.md#post) | **POST** /exclusion-criteria | Adds a new exclusion criteria.
[**put**](RepricingExclusionCriteriaApi.md#put) | **PUT** /exclusion-criteria/{exclusionCriteriaId} | Edit the exclusion criteria.


# **callList**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO[] callList()

Gets all exclusion criteria of a service.

API endpoint for working with exclusion criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingExclusionCriteriaApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingExclusionCriteriaApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO[]**](../Model/RepricingExclusionCriteriaDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($exclusion_criteria_id)

Delete the exclusion criteria.

API endpoint for working with exclusion criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingExclusionCriteriaApi();
$exclusion_criteria_id = 789; // int | 

try {
    $api_instance->delete($exclusion_criteria_id);
} catch (Exception $e) {
    echo 'Exception when calling RepricingExclusionCriteriaApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclusion_criteria_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO get($exclusion_criteria_id)

Gets the exclusion criteria by id.

API endpoint for working with exclusion criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingExclusionCriteriaApi();
$exclusion_criteria_id = 789; // int | 

try {
    $result = $api_instance->get($exclusion_criteria_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingExclusionCriteriaApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclusion_criteria_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO**](../Model/RepricingExclusionCriteriaDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Adds a new exclusion criteria.

API endpoint for working with exclusion criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingExclusionCriteriaApi();
$body = new \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO(); // \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingExclusionCriteriaApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO**](../Model/\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **put**
> put($exclusion_criteria_id, $body)

Edit the exclusion criteria.

API endpoint for working with exclusion criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingExclusionCriteriaApi();
$exclusion_criteria_id = 789; // int | 
$body = new \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO(); // \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO | 

try {
    $api_instance->put($exclusion_criteria_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingExclusionCriteriaApi->put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exclusion_criteria_id** | **int**|  |
 **body** | [**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO**](../Model/\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingExclusionCriteriaDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

