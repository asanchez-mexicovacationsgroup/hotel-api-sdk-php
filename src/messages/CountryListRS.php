<?php
/**
 * Created by PhpStorm.
 * User: hady
 * Date: 19/10/16
 * Time: 00:26
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\model\AuditData;

class CountryListRS extends ApiResponse
{
    public function __construct(array $rsData)
    {
        parent::__construct($rsData);
        $this->data = $rsData;
    }

    /**
     * @return AuditData Return class of audit
     */
    public function auditData()
    {
        return new AuditData($this->auditData);
    }
}
