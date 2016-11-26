<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:05 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;

/**
 * Class Comment
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property string dateStart Date in which the comment start to apply
 * @property string dateEnd Date in which the comment ends
 * @property string description Rate comments description and language
 */
class Comment extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'dateStart' => 'string',
        'dateEnd' => 'string',
        'description' => 'string',
    ];
}