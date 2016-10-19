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
 * Class Accommodation
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Hotel Type Code it will indicate the type of establishment (apartment, hotel, home)
 * @property string typeDescription Internal Hotel Type Description
 * @property TranslatedAttribute typeMultiDescription Hotel Type description and language
 */
class Accommodation extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'typeDescription' => 'string',
        'typeMultiDescription' => TranslatedAttribute::class,
    ];
}