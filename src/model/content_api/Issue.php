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
 * Class Issue
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string type Type code of the incidence
 * @property string code Code for the issue
 * @property boolean alternative Indicator if there will be an alternative due to the issue
 * @property TranslatedAttribute name Name and Language of the issue
 * @property TranslatedAttribute description Issue description and language
 */
class Issue extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'type' => 'string',
        'code' => 'string',
        'alternative' => 'boolean',
        'name' => TranslatedAttribute::class,
        'description' => TranslatedAttribute::class,
    ];
}