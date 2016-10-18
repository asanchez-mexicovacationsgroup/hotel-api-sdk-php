<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\helpers\Paginatable;
use hotelbeds\hotel_api_sdk\types\ApiUri;
use Zend\Http\Request;

/**
 * Class CountriesRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class CountryListRQ extends ApiRequest
{
    /**
     * CountriesRQ constructor.
     * @param ApiUri $baseUri
     * @param Paginatable $data
     */
    public function __construct(ApiUri $baseUri, Paginatable $data)
    {
        parent::__construct($baseUri, self::COUNTRIES);
        $this->request->setMethod(Request::METHOD_GET);
        $this->setDataRequest($data);
    }

    protected function getBasePath()
    {
        return ApiUri::$HOTEL_CONTENT_BASE_PATH;
    }
}
