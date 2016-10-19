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

namespace hotelbeds\hotel_api_sdk\Tests;

use hotelbeds\hotel_api_sdk\helpers\ContentApiParams;
use hotelbeds\hotel_api_sdk\messages\CountryListRS;
use hotelbeds\hotel_api_sdk\messages\DestinationListRS;

class ContentApiLocationTest extends SDKTestCase
{
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
     * @param CountryListRS $response
     */
    public function testCountryListRS(CountryListRS $response)
    {
        $this->assertEquals(0, $response->from);
        $this->assertEquals(100, $response->to);
        foreach ($response as $country) {
            $this->assertNotEmpty($country->code);
            $this->assertNotEmpty($country->isoCode);
        }
    }

    public function testDestinationList()
    {
        $data = new ContentApiParams();
        $data->fields = 'all';
        $data->language = 'ENG';
        $data->from = 0;
        $data->to = 100;

        return $this->apiClient->destinationList($data);
    }

    /**
     * @depends testDestinationList
     * @param DestinationListRS $response
     */
    public function testDestinationsRS(DestinationListRS $response)
    {
        foreach ($response as $destination) {
            $this->assertNotEmpty($destination->code);
            $this->assertNotEmpty($destination->countryCode);
            $this->assertNotEmpty($destination->isoCode);

            foreach ($destination->zones as $zone) {
                $this->assertNotEmpty($zone->zoneCode);
            }

            foreach ($destination->groupZones as $groupZone) {
                $this->assertNotEmpty($groupZone->groupZoneCode);
            }
        }
    }

    protected function tearDown()
    {

    }
}
