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

class Field47Enum
{
    public const ACCOUNT_HOLDER_NAME = 'account_holder_name';

    public const EXP_DATE = 'exp_date';

    public const CVV = 'cvv';

    public const ACCOUNT_NUMBER = 'account_number';

    public const BILLING_ADDRESS = 'billing_address';

    public const CONTACT_ID = 'contact_id';

    public const CONTACT_API_ID = 'contact_api_id';

    public const LOCATION_ID = 'location_id';

    public const LOCATION_API_ID = 'location_api_id';

    public const ID = 'id';

    public const CREATED_TS = 'created_ts';

    public const CREATED_USER_ID = 'created_user_id';

    public const LOCATION = 'location';

    public const CONTACT = 'contact';

    public const CREATED_USER = 'created_user';

    private const _ALL_VALUES = [
        self::ACCOUNT_HOLDER_NAME,
        self::EXP_DATE,
        self::CVV,
        self::ACCOUNT_NUMBER,
        self::BILLING_ADDRESS,
        self::CONTACT_ID,
        self::CONTACT_API_ID,
        self::LOCATION_ID,
        self::LOCATION_API_ID,
        self::ID,
        self::CREATED_TS,
        self::CREATED_USER_ID,
        self::LOCATION,
        self::CONTACT,
        self::CREATED_USER
    ];

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
        throw new Exception("$value is invalid for Field47Enum.");
    }
}
