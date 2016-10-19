<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 1:53 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Category
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Hotel star rating based on the information provided by the hotel
 * @property string simpleCode Simple category code used for filtering in APITUDE Booking
 * @property string accommodationType Hotel Type Code it will indicate the type of establishment (apartment, hotel, home)
 * @property string group Group of Category that the category belongs to
 * @property TranslatedAttribute description Category description and language
 */
class Category extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'simpleCode' => 'string',
        'accommodationType' => 'string',
        'group' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}