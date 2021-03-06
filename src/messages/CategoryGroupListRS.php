<?php
/**
 * Created by PhpStorm.
 * User: Hady
 * Date: 10/19/2016
 * Time: 4:42 PM
 */

namespace hotelbeds\hotel_api_sdk\messages;


use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiResponse;
use hotelbeds\hotel_api_sdk\model\content_api\CategoryGroup;

class CategoryGroupListRS extends ContentApiResponse
{
    /**
     * Return the data key for use in iterator
     * @return string
     */
    protected function dataKey()
    {
        return 'groupCategories';
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return CategoryGroup
     * @since 5.0.0
     */
    public function current()
    {
        return new CategoryGroup($this->currentItemArray());
    }
}