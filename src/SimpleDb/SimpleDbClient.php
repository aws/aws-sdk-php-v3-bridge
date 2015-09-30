<?php
namespace Aws\SimpleDb;

use Aws\AwsCompatibilityClient;

/**
 * This client is used to interact with the **Amazon SimpleDB** service.
 *
 * @method \Aws\Result batchDeleteAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteAttributesAsync(array $args = [])
 * @method \Aws\Result batchPutAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutAttributesAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result deleteAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAttributesAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result domainMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise domainMetadataAsync(array $args = [])
 * @method \Aws\Result getAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAttributesAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result putAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAttributesAsync(array $args = [])
 * @method \Aws\Result select(array $args = [])
 * @method \GuzzleHttp\Promise\Promise selectAsync(array $args = [])
 */
class SimpleDbClient extends AwsCompatibilityClient {}
