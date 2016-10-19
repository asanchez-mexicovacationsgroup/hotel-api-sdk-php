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
 * Class Chain
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Code of the chain that the hotel belongs to
 * @property TranslatedAttribute description Chain description and language
 */
class Chain extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'description' => TranslatedAttribute::class,
    ];
}