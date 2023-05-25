# Walmart\Api\US\MPReturnsApi  
All URIs are relative to https://marketplace.walmartapis.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkItemOverrideFeed()**](ReturnsApi.md#bulkItemOverrideFeed) | **POST** /v3/feeds | Return Item Overrides |
| [**getReturns()**](ReturnsApi.md#getReturns) | **GET** /v3/returns | Returns |
| [**issueRefund()**](ReturnsApi.md#issueRefund) | **POST** /v3/returns/{returnOrderId}/refund | Issue refund |


## `bulkItemOverrideFeed()`

```php
bulkItemOverrideFeed($feedType, $file): \Walmart\Model\MP\US\Returns\BulkItemOverrideFeed200Response
```
Return Item Overrides

Sellers can specify global settings for returns in Seller Center, and they can override individual item level settings using this API.  Empty values for the settings will remove the existing overriden values and revert them to global settings.  For more details, see the announcement for [Bulk Return Rules](https://sellerhelp.walmart.com/s/guide?article=000008197).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\ReturnsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$feedType = 'RETURNS_OVERRIDES'; // string | Feed Type
$file = "/path/to/file.txt"; // \SplFileObject | Feed file to upload

try {
    $result = $apiInstance->bulkItemOverrideFeed($feedType, $file);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ReturnsApi->bulkItemOverrideFeed: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **feedType** | **string**| Feed Type | [default to 'RETURNS_OVERRIDES'] |
| **file** | **\SplFileObject****\SplFileObject**| Feed file to upload | |


### Return type

[**\Walmart\Model\MP\US\Returns\BulkItemOverrideFeed200Response**](../Model/BulkItemOverrideFeed200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($returnOrderId, $customerOrderId, $status, $replacementInfo, $returnType, $returnCreationStartDate, $returnCreationEndDate, $returnLastModifiedStartDate, $returnLastModifiedEndDate, $limit): \Walmart\Model\MP\US\Returns\GetReturns200Response
```
Returns

Retrieves the details of return orders for the specified filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\ReturnsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$returnOrderId = 'returnOrderId_example'; // string | Return order identifier of the return order object as part of array. This is the same as RMA number.
$customerOrderId = 'customerOrderId_example'; // string | A unique ID associated with the sales order for specified customer
$status = 'status_example'; // string | Status may be specified to query the returns with specific status.Valid statuses are: INITIATED, DELIVERED, COMPLETED
$replacementInfo = 'replacementInfo_example'; // string | Provides additional attributes - replacementCustomerOrderID, returnType, rechargeReason, returnCancellationReason - related to Replacement return order, in response, if available. Allowed values are true or false.
$returnType = 'returnType_example'; // string | Specifies if the return order is a replacement return or a regular (refund) return. Possible values are REPLACEMENT or REFUND.
$returnCreationStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date for querying all return orders that were created after that date. Use one of the following formats, based on UTC, ISO 8601. Date example: '2013-08-16' Timestamp example: '2013-08-16T10:30:15Z'
$returnCreationEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Limits the query to the return orders that were created before this returnCreationEndDate. Use one of the following formats, based on ISO 8601, are allowed: UTC date or timestamp. Examples: '2016-08-16T10:30:30.155Z' or '2016-08-16'
$returnLastModifiedStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date for querying all return orders that were modified after that date. Use one of the following formats, based on UTC, ISO 8601. Date example: '2013-08-16' Timestamp example: '2013-08-16T10:30:15Z'.In case of dates with timezone, use format '2020-04-17T10:42:41.000+0000' and follow encode '+' with %20
$returnLastModifiedEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Limits the query to the return orders that were modified before this date. Use one of the following formats, based on UTC, ISO 8601. Date example: '2013-08-16' Timestamp example: '2013-08-18T10:30:15Z'.In case of dates with timezone, use format '2020-04-18T10:42:41.000+0000' and follow encode '+' with %20
$limit = '10'; // string | The number of orders to be returned. Cannot be larger than 200

try {
    $result = $apiInstance->getReturns($returnOrderId, $customerOrderId, $status, $replacementInfo, $returnType, $returnCreationStartDate, $returnCreationEndDate, $returnLastModifiedStartDate, $returnLastModifiedEndDate, $limit);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ReturnsApi->getReturns: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returnOrderId** | **string**| Return order identifier of the return order object as part of array. This is the same as RMA number. | [optional] |
| **customerOrderId** | **string**| A unique ID associated with the sales order for specified customer | [optional] |
| **status** | **string**| Status may be specified to query the returns with specific status.Valid statuses are: INITIATED, DELIVERED, COMPLETED | [optional] |
| **replacementInfo** | **string**| Provides additional attributes - replacementCustomerOrderID, returnType, rechargeReason, returnCancellationReason - related to Replacement return order, in response, if available. Allowed values are true or false. | [optional] |
| **returnType** | **string**| Specifies if the return order is a replacement return or a regular (refund) return. Possible values are REPLACEMENT or REFUND. | [optional] |
| **returnCreationStartDate** | **\DateTime**| Start Date for querying all return orders that were created after that date. Use one of the following formats, based on UTC, ISO 8601. Date example: '2013-08-16' Timestamp example: '2013-08-16T10:30:15Z' | [optional] |
| **returnCreationEndDate** | **\DateTime**| Limits the query to the return orders that were created before this returnCreationEndDate. Use one of the following formats, based on ISO 8601, are allowed: UTC date or timestamp. Examples: '2016-08-16T10:30:30.155Z' or '2016-08-16' | [optional] |
| **returnLastModifiedStartDate** | **\DateTime**| Start Date for querying all return orders that were modified after that date. Use one of the following formats, based on UTC, ISO 8601. Date example: '2013-08-16' Timestamp example: '2013-08-16T10:30:15Z'.In case of dates with timezone, use format '2020-04-17T10:42:41.000+0000' and follow encode '+' with %20 | [optional] |
| **returnLastModifiedEndDate** | **\DateTime**| Limits the query to the return orders that were modified before this date. Use one of the following formats, based on UTC, ISO 8601. Date example: '2013-08-16' Timestamp example: '2013-08-18T10:30:15Z'.In case of dates with timezone, use format '2020-04-18T10:42:41.000+0000' and follow encode '+' with %20 | [optional] |
| **limit** | **string**| The number of orders to be returned. Cannot be larger than 200 | [optional] [default to '10'] |


### Return type

[**\Walmart\Model\MP\US\Returns\GetReturns200Response**](../Model/GetReturns200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueRefund()`

```php
issueRefund($returnOrderId, $issueRefundRequest): \Walmart\Model\MP\US\Returns\IssueRefund200Response
```
Issue refund

This API allows sellers to issue refund against a return order. Multiple return order lines can be refunded in one request.  Note: Sellers can use the Refund Order Lines API for all non-exception category items, including adjustments that seller needs to determine a partial refund amount. Especially for exception category items: HAZMAT, OTHER and FREIGHT that are not eligible for the Marketplace Returns Program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure access token authorization: accessTokenScheme
$accessToken = new Walmart\AccessToken('ACCESS_TOKEN', new DateTime('+900 seconds'));
$config = new Walmart\Configuration('CLIENT_ID', 'CLIENT_SECRET', ['accessToken' => $accessToken]);

$apiInstance = new Walmart\Api\ReturnsApi(  
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$returnOrderId = 'returnOrderId_example'; // string | The return order ID
$issueRefundRequest = {"customerOrderId":"1535274411287","refundLines":[{"returnOrderLineNumber":1}]}; // \Walmart\Model\MP\US\Returns\IssueRefundRequest | File fields

try {
    $result = $apiInstance->issueRefund($returnOrderId, $issueRefundRequest);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling ReturnsApi->issueRefund: {$e->getMessage()}\n";
}
```

### Parameters| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **returnOrderId** | **string**| The return order ID | |
| **issueRefundRequest** | [**\Walmart\Model\MP\US\Returns\IssueRefundRequest**](../Model/IssueRefundRequest.md)| File fields | |


### Return type

[**\Walmart\Model\MP\US\Returns\IssueRefund200Response**](../Model/IssueRefund200Response.md)

### Authorization

[accessTokenScheme](../../README.md#accessTokenScheme)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)