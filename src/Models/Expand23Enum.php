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

class Expand23Enum
{
    public const LOG_EMAILS = 'log_emails';

    public const CONTACT = 'contact';

    public const ACCOUNT_VAULT = 'account_vault';

    public const CREATED_USER = 'created_user';

    public const TRANSACTIONS = 'transactions';

    public const SIGNATURE = 'signature';

    public const PAYMENT_SCHEDULE = 'payment_schedule';

    public const LOCATION = 'location';

    public const PRODUCT_TRANSACTION = 'product_transaction';

    public const NEXT_RUN_DATE_MIN = 'next_run_date_min';

    public const NEXT_RUN_DATE_MAX = 'next_run_date_max';

    public const TAGS = 'tags';

    public const ALL_TAGS = 'all_tags';

    public const CHANGELOGS = 'changelogs';

    public const FORECAST = 'forecast';

    public const RECURRING_SPLITS = 'recurring_splits';

    private const _ALL_VALUES = [
        self::LOG_EMAILS,
        self::CONTACT,
        self::ACCOUNT_VAULT,
        self::CREATED_USER,
        self::TRANSACTIONS,
        self::SIGNATURE,
        self::PAYMENT_SCHEDULE,
        self::LOCATION,
        self::PRODUCT_TRANSACTION,
        self::NEXT_RUN_DATE_MIN,
        self::NEXT_RUN_DATE_MAX,
        self::TAGS,
        self::ALL_TAGS,
        self::CHANGELOGS,
        self::FORECAST,
        self::RECURRING_SPLITS
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
        throw new Exception("$value is invalid for Expand23Enum.");
    }
}
