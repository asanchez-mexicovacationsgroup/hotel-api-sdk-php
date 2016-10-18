<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 10/27/2015
 * Time: 3:15 AM
 */

namespace hotelbeds\hotel_api_sdk\types;

use Zend\Uri\Http;
use StringTemplate;

/**
 * Class ApiUri
 *
 * @package hotelbeds\hotel_api_sdk\types
 */
class ApiUri extends Http
{
    public static $HOTEL_BOOKING_BASE_PATH = '/hotel-api';
    public static $HOTEL_CONTENT_BASE_PATH = '/hotel-content-api';

    const API_URI_FORMAT = '{basepath}/{version}';

    /**
     * @var ApiVersion
     */
    private $apiVersion;

    /**
     * @param ApiVersion $apiVersion
     */
    public function setVersion(ApiVersion $apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * Prepare URL for the operation
     *
     * @param string $basePath
     */
    public function prepare($basePath)
    {
        $strSubs = new StringTemplate\Engine;
        $this->setPath($strSubs->render(self::API_URI_FORMAT, [
            "basepath" => $basePath,
            "version" => $this->apiVersion->getVersion()
        ]));
    }
}
