<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 10:38 AM
 */

namespace hotelbeds\hotel_api_sdk\messages\contracts;


use hotelbeds\hotel_api_sdk\types\ApiUri;

/**
 * Class ContentApiRequest
 * @package hotelbeds\hotel_api_sdk\messages\content_api
 */
abstract class ContentApiRequest extends ApiRequest
{
    /**
     * The base path for this request
     *
     * @see ApiUri$HOTEL_BOOKING_BASE_PATH @see  ApiUri$HOTEL_CONTENT_BASE_PATH
     *
     * @return string
     */
    protected function getBasePath()
    {
        return ApiUri::$HOTEL_CONTENT_BASE_PATH;
    }
}