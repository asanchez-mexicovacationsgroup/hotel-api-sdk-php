<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/20/2016
 * Time: 11:41 AM
 */

namespace hotelbeds\hotel_api_sdk\helpers;

/**
 * Class HotelListParams
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property string codes Filter for a specific hotel or list of hotels.
 * @property string destinationCode Filter to limit the results for an specific destination.
 * @property string countryCode Filter to limit the results for an specific country.
 */
class HotelListParams extends ContentApiParams
{
    public function __construct()
    {
        $this->validFields = [
            'codes' => 'string',
            'destinationCode' => 'string',
            'countryCode' => 'string',
        ];

        parent::__construct();
    }
}