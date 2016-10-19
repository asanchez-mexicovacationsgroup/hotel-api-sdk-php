<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\messages\contracts\ContentApiResponse;
use hotelbeds\hotel_api_sdk\model\content_api\Chain;

/**
 * Class CategoryListRS
 * @package hotelbeds\hotel_api_sdk\messages
 */
class ChainListRS extends ContentApiResponse
{
    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Chain
     * @since 5.0.0
     */
    public function current()
    {
        return new Chain($this->getData()[$this->position()]);
    }

    /**
     * Return the data key for use in iterator
     * @return string
     */
    protected function dataKey()
    {
        return 'chains';
    }
}
