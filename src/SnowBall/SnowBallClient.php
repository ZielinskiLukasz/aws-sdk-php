<?php
namespace Aws\SnowBall;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Import/Export Snowball** service.
 * @method \Aws\Result cancelJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelJobAsync(array $args = [])
 * @method \Aws\Result createAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAddressAsync(array $args = [])
 * @method \Aws\Result createJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createJobAsync(array $args = [])
 * @method \Aws\Result describeAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressAsync(array $args = [])
 * @method \Aws\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \Aws\Result describeJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeJobAsync(array $args = [])
 * @method \Aws\Result getJobManifest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobManifestAsync(array $args = [])
 * @method \Aws\Result getJobUnlockCode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobUnlockCodeAsync(array $args = [])
 * @method \Aws\Result getSnowballUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnowballUsageAsync(array $args = [])
 * @method \Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws\Result updateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateJobAsync(array $args = [])
 */
class SnowBallClient extends AwsClient {}