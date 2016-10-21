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
 * Class Board
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Board Type Code that will indicate the meal plans available at the hotel (bed and breakfast, half board, all inclusive,...)
 * @property TranslatedAttribute description Internal board description and language
 * @property string|null multiLingualCode Multilanguage Board Description
 */
class Board extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'description' => TranslatedAttribute::class,
        'multiLingualCode' => 'string',
    ];
}