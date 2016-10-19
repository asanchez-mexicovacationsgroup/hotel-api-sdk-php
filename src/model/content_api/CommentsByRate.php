<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:04 PM
 */

namespace hotelbeds\hotel_api_sdk\model\content_api;


use hotelbeds\hotel_api_sdk\model\ApiModel;
use hotelbeds\hotel_api_sdk\model\content_api\iterators\Comments;

/**
 * Class CommentsByRate
 * @package hotelbeds\hotel_api_sdk\model\content_api
 *
 * @property array rateCodes List of tariffs for which the rate comment is applied
 * @property Comments comments List of rate comments
 */
class CommentsByRate extends ApiModel
{
    protected $createObjectsOnGetter = true;

    protected $validFields = [
        'rateCodes' => 'array',
        'comments' => Comments::class,
    ];
}