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
 * Class CategoryGroup
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string code Internal Category Group code
 * @property integer order Internal order of the category group
 * @property TranslatedAttribute description Category Group description and language
 */
class CategoryGroup extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'code' => 'string',
        'order' => 'integer',
        'description' => TranslatedAttribute::class,
    ];
}