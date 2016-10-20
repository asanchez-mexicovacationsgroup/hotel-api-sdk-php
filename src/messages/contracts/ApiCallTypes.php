<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 10/23/2015
 * Time: 12:36 AM
 */

namespace hotelbeds\hotel_api_sdk\messages\contracts;

/**
 * Interface ApiCallTypes
 * @package hotelbeds\hotel_api_sdk\messages
 */
interface ApiCallTypes
{
    const AVAILABILITY = "hotels";
    const BOOKING = "bookings";
    const CHECK_AVAIL = "checkrates";
    const STATUS = "status";

    /**
     * Content API Locations
     */
    const COUNTRIES = 'locations/countries';
    const DESTINATIONS = 'locations/destinations';

    /**
     * Content API Types
     */
    const ACCOMMODATIONS = '/types/accommodations';
    const BOARDS = '/types/boards';
    const CATEGORIES = '/types/categories';
    const CHAINS = '/types/chains';
    const CURRENCIES = '/types/currencies';
    const FACILITIES = '/types/facilities';
    const FACILITY_GROUPS = '/types/facilitygroups';
    const FACILITY_TYPOLOGIES = '/types/facilitytypologies';
    const ISSUES = '/types/issues';
    const LANGUAGES = '/types/languages';
    const PROMOTIONS = '/types/promotions';
    const SEGMENTS = '/types/segments';
    const TERMINALS = '/types/terminals';
    const IMAGE_TYPES = '/types/imagetypes';
    const GROUP_CATEGORIES = '/types/groupcategories';
    const RATE_COMMENTS = '/types/ratecomments';

    /**
     * Content API Hotel
     */
    const HOTELS = '/hotels';

}
