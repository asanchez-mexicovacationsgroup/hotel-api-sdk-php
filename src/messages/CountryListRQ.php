<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\helpers\ContentApiParams;
use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiRequest;
use hotelbeds\hotel_api_sdk\types\ApiUri;

/**
 * Class CountriesRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class CountryListRQ extends ContentApiRequest
{
    /**
     * CountriesRQ constructor.
     * @param ApiUri $baseUri
     * @param ContentApiParams $data
     */
    public function __construct(ApiUri $baseUri, ContentApiParams $data)
    {
        parent::__construct($baseUri, self::COUNTRIES);
        $this->setDataRequest($data);
    }
}
