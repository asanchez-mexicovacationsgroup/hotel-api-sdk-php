<?php

/**
 * #%L
 * hotel-api-sdk
 * %%
 * Copyright (C) 2015 HOTELBEDS, S.L.U.
 * %%
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 2.1 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Lesser Public License for more details.
 *
 * You should have received a copy of the GNU General Lesser Public
 * License along with this program.  If not, see
 * <http://www.gnu.org/licenses/lgpl-2.1.html>.
 * #L%
 */

use hotelbeds\hotel_api_sdk\HotelApiClient;
use hotelbeds\hotel_api_sdk\types\ApiVersion;
use hotelbeds\hotel_api_sdk\types\ApiVersions;
use hotelbeds\hotel_api_sdk\helpers\ContentApiParams;
use hotelbeds\hotel_api_sdk\messages\CountryListRS;

class ContentApiTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var HotelApiClient
     */
    private $apiClient;

    protected function setUp()
    {
        $reader = new Zend\Config\Reader\Ini();
        $config   = $reader->fromFile(__DIR__.'/HotelApiClient.ini');
        $cfgApi = $config["apiclient"];

        $this->apiClient = new HotelApiClient($cfgApi["url"],
            $cfgApi["apikey"],
            $cfgApi["sharedsecret"],
            new ApiVersion(ApiVersions::V1_0),
            $cfgApi["timeout"]);
    }
    
    public function testCountryList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        return $this->apiClient->countryList($data);
    }

    /**
     * @depends testCountryList
     * @param CountryListRS $countryListRS
     */
    public function testCountryListRS(CountryListRS $countryListRS)
    {
        
    }

    protected function tearDown()
    {

    }
}
