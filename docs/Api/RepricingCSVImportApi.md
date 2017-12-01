# eSagu\Amzn\RePricing\V1\RepricingCSVImportApi

All URIs are relative to *https://api.esagu.de/amzn/repricing/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](RepricingCSVImportApi.md#callList) | **GET** /csv-import | Get a list of all CSV imports.
[**get**](RepricingCSVImportApi.md#get) | **GET** /csv-import/{csvImportId} | Get the specified single CSV import.
[**post**](RepricingCSVImportApi.md#post) | **POST** /csv-import | Creates a new CSV import.


# **callList**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO[] callList()

Get a list of all CSV imports.

API endpoint for importing CSV files, you can find our CSV specification here: https://www.esagu.de/en/csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVImportApi();

try {
    $result = $api_instance->callList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVImportApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO[]**](../Model/RepricingCSVImportDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO get($csv_import_id)

Get the specified single CSV import.

API endpoint for importing CSV files, you can find our CSV specification here: https://www.esagu.de/en/csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVImportApi();
$csv_import_id = 789; // int | 

try {
    $result = $api_instance->get($csv_import_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVImportApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **csv_import_id** | **int**|  |

### Return type

[**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO**](../Model/RepricingCSVImportDTO.md)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **post**
> post($body)

Creates a new CSV import.

API endpoint for importing CSV files, you can find our CSV specification here: https://www.esagu.de/en/csv-manual.html .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: jwt
eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// eSagu\Amzn\RePricing\V1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new eSagu\Amzn\RePricing\V1\Api\RepricingCSVImportApi();
$body = new \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO(); // \eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO | 

try {
    $api_instance->post($body);
} catch (Exception $e) {
    echo 'Exception when calling RepricingCSVImportApi->post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO**](../Model/\eSagu\Amzn\RePricing\V1\eSagu\Amzn\RePricing\V1\Model\RepricingCSVImportDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

