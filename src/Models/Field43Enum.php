<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

class Field43Enum
{
    public const LOCATION_ID = 'location_id';

    public const TITLE = 'title';

    public const ID = 'id';

    public const CREATED_TS = 'created_ts';

    public const MODIFIED_TS = 'modified_ts';

    public const LOCATION = 'location';

    private const _ALL_VALUES =
        [self::LOCATION_ID, self::TITLE, self::ID, self::CREATED_TS, self::MODIFIED_TS, self::LOCATION];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for Field43Enum.");
    }
}
