<?php

/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 1:02 PM
 */
namespace hotelbeds\hotel_api_sdk\Tests;

use hotelbeds\hotel_api_sdk\HotelApiClient;
use hotelbeds\hotel_api_sdk\types\ApiVersion;
use hotelbeds\hotel_api_sdk\types\ApiVersions;
use Zend\Config\Reader\Ini;

class SDKTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var HotelApiClient
     */
    protected $apiClient;

    protected function setUp()
    {
        // For new php versions
        date_default_timezone_set('Europe/Istanbul');

        $reader = new Ini();
        $config = $reader->fromFile(__DIR__ . '/HotelApiClient.ini');
        $cfgApi = $config["apiclient"];

        $this->apiClient = new HotelApiClient($cfgApi["url"],
            $cfgApi["apikey"],
            $cfgApi["sharedsecret"],
            new ApiVersion(ApiVersions::V1_0),
            $cfgApi["timeout"]);
    }
}