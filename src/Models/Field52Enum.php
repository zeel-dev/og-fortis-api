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

class Field52Enum
{
    public const ADDITIONAL_AMOUNTS = 'additional_amounts';

    public const BILLING_ADDRESS = 'billing_address';

    public const CHECKIN_DATE = 'checkin_date';

    public const CHECKOUT_DATE = 'checkout_date';

    public const CLERK_NUMBER = 'clerk_number';

    public const CONTACT_API_ID = 'contact_api_id';

    public const CONTACT_ID = 'contact_id';

    public const CUSTOM_DATA = 'custom_data';

    public const CUSTOMER_ID = 'customer_id';

    public const DESCRIPTION = 'description';

    public const IDENTITY_VERIFICATION = 'identity_verification';

    public const IIAS_IND = 'iias_ind';

    public const IMAGE_FRONT = 'image_front';

    public const IMAGE_BACK = 'image_back';

    public const INSTALLMENT = 'installment';

    public const INSTALLMENT_NUMBER = 'installment_number';

    public const INSTALLMENT_COUNT = 'installment_count';

    public const LOCATION_API_ID = 'location_api_id';

    public const LOCATION_ID = 'location_id';

    public const PRODUCT_TRANSACTION_ID = 'product_transaction_id';

    public const ADVANCE_DEPOSIT = 'advance_deposit';

    public const NO_SHOW = 'no_show';

    public const NOTIFICATION_EMAIL_ADDRESS = 'notification_email_address';

    public const ORDER_NUMBER = 'order_number';

    public const PO_NUMBER = 'po_number';

    public const QUICK_INVOICE_ID = 'quick_invoice_id';

    public const RECURRING = 'recurring';

    public const RECURRING_NUMBER = 'recurring_number';

    public const ROOM_NUM = 'room_num';

    public const ROOM_RATE = 'room_rate';

    public const SAVE_ACCOUNT = 'save_account';

    public const SAVE_ACCOUNT_TITLE = 'save_account_title';

    public const SUBTOTAL_AMOUNT = 'subtotal_amount';

    public const SURCHARGE_AMOUNT = 'surcharge_amount';

    public const TAGS = 'tags';

    public const TAX = 'tax';

    public const TIP_AMOUNT = 'tip_amount';

    public const TRANSACTION_AMOUNT = 'transaction_amount';

    public const SECONDARY_AMOUNT = 'secondary_amount';

    public const TRANSACTION_API_ID = 'transaction_api_id';

    public const TRANSACTION_C1 = 'transaction_c1';

    public const TRANSACTION_C2 = 'transaction_c2';

    public const TRANSACTION_C3 = 'transaction_c3';

    public const BANK_FUNDED_ONLY_OVERRIDE = 'bank_funded_only_override';

    public const ALLOW_PARTIAL_AUTHORIZATION_OVERRIDE = 'allow_partial_authorization_override';

    public const AUTO_DECLINE_CVV_OVERRIDE = 'auto_decline_cvv_override';

    public const AUTO_DECLINE_STREET_OVERRIDE = 'auto_decline_street_override';

    public const AUTO_DECLINE_ZIP_OVERRIDE = 'auto_decline_zip_override';

    public const ID = 'id';

    public const CREATED_TS = 'created_ts';

    public const MODIFIED_TS = 'modified_ts';

    public const TERMINAL_ID = 'terminal_id';

    public const ACCOUNT_HOLDER_NAME = 'account_holder_name';

    public const ACCOUNT_TYPE = 'account_type';

    public const TOKEN_API_ID = 'token_api_id';

    public const TOKEN_ID = 'token_id';

    public const ACH_IDENTIFIER = 'ach_identifier';

    public const ACH_SEC_CODE = 'ach_sec_code';

    public const AUTH_AMOUNT = 'auth_amount';

    public const AUTH_CODE = 'auth_code';

    public const AVS = 'avs';

    public const AVS_ENHANCED = 'avs_enhanced';

    public const CARDHOLDER_PRESENT = 'cardholder_present';

    public const CARD_PRESENT = 'card_present';

    public const CHECK_NUMBER = 'check_number';

    public const CUSTOMER_IP = 'customer_ip';

    public const CVV_RESPONSE = 'cvv_response';

    public const ENTRY_MODE_ID = 'entry_mode_id';

    public const EMV_RECEIPT_DATA = 'emv_receipt_data';

    public const FIRST_SIX = 'first_six';

    public const LAST_FOUR = 'last_four';

    public const PAYMENT_METHOD = 'payment_method';

    public const TERMINAL_SERIAL_NUMBER = 'terminal_serial_number';

    public const TRANSACTION_SETTLEMENT_STATUS = 'transaction_settlement_status';

    public const CHARGE_BACK_DATE = 'charge_back_date';

    public const IS_RECURRING = 'is_recurring';

    public const NOTIFICATION_EMAIL_SENT = 'notification_email_sent';

    public const PAR = 'par';

    public const REASON_CODE_ID = 'reason_code_id';

    public const RECURRING_ID = 'recurring_id';

    public const SETTLE_DATE = 'settle_date';

    public const STATUS_CODE = 'status_code';

    public const TRANSACTION_BATCH_ID = 'transaction_batch_id';

    public const TYPE_ID = 'type_id';

    public const VERBIAGE = 'verbiage';

    public const VOID_DATE = 'void_date';

    public const BATCH = 'batch';

    public const TERMS_AGREE = 'terms_agree';

    public const RESPONSE_MESSAGE = 'response_message';

    public const RETURN_DATE = 'return_date';

    public const TRX_SOURCE_ID = 'trx_source_id';

    public const ROUTING_NUMBER = 'routing_number';

    public const TRX_SOURCE_CODE = 'trx_source_code';

    public const PAYLINK_ID = 'paylink_id';

    public const CURRENCY_CODE = 'currency_code';

    public const IS_ACCOUNTVAULT = 'is_accountvault';

    public const CREATED_USER_ID = 'created_user_id';

    public const MODIFIED_USER_ID = 'modified_user_id';

    public const TRANSACTION_CODE = 'transaction_code';

    public const EFFECTIVE_DATE = 'effective_date';

    public const NOTIFICATION_PHONE = 'notification_phone';

    public const CAVV_RESULT = 'cavv_result';

    public const RECURRING_FLAG = 'recurring_flag';

    public const IS_TOKEN = 'is_token';

    public const INSTALLMENT_TOTAL = 'installment_total';

    public const INSTALLMENT_COUNTER = 'installment_counter';

    public const ACCOUNT_VAULT_ID = 'account_vault_id';

    public const HOSTED_PAYMENT_PAGE_ID = 'hosted_payment_page_id';

    public const STAN = 'stan';

    public const CURRENCY = 'currency';

    public const CARD_BIN = 'card_bin';

    public const WALLET_TYPE = 'wallet_type';

    public const LOG_EMAILS = 'log_emails';

    public const IS_VOIDABLE = 'is_voidable';

    public const IS_REVERSIBLE = 'is_reversible';

    public const IS_REFUNDABLE = 'is_refundable';

    public const IS_COMPLETABLE = 'is_completable';

    public const IS_SETTLED = 'is_settled';

    public const CREATED_USER = 'created_user';

    public const LOCATION = 'location';

    public const CONTACT = 'contact';

    public const CHANGELOGS = 'changelogs';

    public const PRODUCT_TRANSACTION = 'product_transaction';

    public const ALL_TAGS = 'all_tags';

    public const TAGTRANSACTIONS = 'tagTransactions';

    public const DECLINED_RECURRING_NOTIFICATION = 'declined_recurring_notification';

    public const PAYMENT_RECURRING_NOTIFICATION = 'payment_recurring_notification';

    public const ACCOUNT_VAULT = 'account_vault';

    public const QUICK_INVOICE = 'quick_invoice';

    public const DEVELOPER_COMPANY = 'developer_company';

    public const TERMINAL = 'terminal';

    public const HOSTED_PAYMENT_PAGE = 'hosted_payment_page';

    public const TRANSACTION_LEVEL3 = 'transaction_level3';

    public const DEVELOPER_COMPANY_ID = 'developer_company_id';

    public const TRANSACTION_HISTORIES = 'transaction_histories';

    public const SURCHARGE_TRANSACTION = 'surcharge_transaction';

    public const SURCHARGE = 'surcharge';

    public const SIGNATURE = 'signature';

    public const REASON_CODE = 'reason_code';

    public const TYPE = 'type';

    public const STATUS = 'status';

    public const TRANSACTION_BATCH = 'transaction_batch';

    public const TRANSACTION_SPLITS = 'transaction_splits';

    public const POSTBACK_LOGS = 'postback_logs';

    public const CURRENCY_TYPE = 'currency_type';

    public const TRANSACTION_REFERENCES = 'transaction_references';

    public const SAVED_ACCOUNT = 'saved_account';

    private const _ALL_VALUES = [
        self::ADDITIONAL_AMOUNTS,
        self::BILLING_ADDRESS,
        self::CHECKIN_DATE,
        self::CHECKOUT_DATE,
        self::CLERK_NUMBER,
        self::CONTACT_API_ID,
        self::CONTACT_ID,
        self::CUSTOM_DATA,
        self::CUSTOMER_ID,
        self::DESCRIPTION,
        self::IDENTITY_VERIFICATION,
        self::IIAS_IND,
        self::IMAGE_FRONT,
        self::IMAGE_BACK,
        self::INSTALLMENT,
        self::INSTALLMENT_NUMBER,
        self::INSTALLMENT_COUNT,
        self::LOCATION_API_ID,
        self::LOCATION_ID,
        self::PRODUCT_TRANSACTION_ID,
        self::ADVANCE_DEPOSIT,
        self::NO_SHOW,
        self::NOTIFICATION_EMAIL_ADDRESS,
        self::ORDER_NUMBER,
        self::PO_NUMBER,
        self::QUICK_INVOICE_ID,
        self::RECURRING,
        self::RECURRING_NUMBER,
        self::ROOM_NUM,
        self::ROOM_RATE,
        self::SAVE_ACCOUNT,
        self::SAVE_ACCOUNT_TITLE,
        self::SUBTOTAL_AMOUNT,
        self::SURCHARGE_AMOUNT,
        self::TAGS,
        self::TAX,
        self::TIP_AMOUNT,
        self::TRANSACTION_AMOUNT,
        self::SECONDARY_AMOUNT,
        self::TRANSACTION_API_ID,
        self::TRANSACTION_C1,
        self::TRANSACTION_C2,
        self::TRANSACTION_C3,
        self::BANK_FUNDED_ONLY_OVERRIDE,
        self::ALLOW_PARTIAL_AUTHORIZATION_OVERRIDE,
        self::AUTO_DECLINE_CVV_OVERRIDE,
        self::AUTO_DECLINE_STREET_OVERRIDE,
        self::AUTO_DECLINE_ZIP_OVERRIDE,
        self::ID,
        self::CREATED_TS,
        self::MODIFIED_TS,
        self::TERMINAL_ID,
        self::ACCOUNT_HOLDER_NAME,
        self::ACCOUNT_TYPE,
        self::TOKEN_API_ID,
        self::TOKEN_ID,
        self::ACH_IDENTIFIER,
        self::ACH_SEC_CODE,
        self::AUTH_AMOUNT,
        self::AUTH_CODE,
        self::AVS,
        self::AVS_ENHANCED,
        self::CARDHOLDER_PRESENT,
        self::CARD_PRESENT,
        self::CHECK_NUMBER,
        self::CUSTOMER_IP,
        self::CVV_RESPONSE,
        self::ENTRY_MODE_ID,
        self::EMV_RECEIPT_DATA,
        self::FIRST_SIX,
        self::LAST_FOUR,
        self::PAYMENT_METHOD,
        self::TERMINAL_SERIAL_NUMBER,
        self::TRANSACTION_SETTLEMENT_STATUS,
        self::CHARGE_BACK_DATE,
        self::IS_RECURRING,
        self::NOTIFICATION_EMAIL_SENT,
        self::PAR,
        self::REASON_CODE_ID,
        self::RECURRING_ID,
        self::SETTLE_DATE,
        self::STATUS_CODE,
        self::TRANSACTION_BATCH_ID,
        self::TYPE_ID,
        self::VERBIAGE,
        self::VOID_DATE,
        self::BATCH,
        self::TERMS_AGREE,
        self::RESPONSE_MESSAGE,
        self::RETURN_DATE,
        self::TRX_SOURCE_ID,
        self::ROUTING_NUMBER,
        self::TRX_SOURCE_CODE,
        self::PAYLINK_ID,
        self::CURRENCY_CODE,
        self::IS_ACCOUNTVAULT,
        self::CREATED_USER_ID,
        self::MODIFIED_USER_ID,
        self::TRANSACTION_CODE,
        self::EFFECTIVE_DATE,
        self::NOTIFICATION_PHONE,
        self::CAVV_RESULT,
        self::RECURRING_FLAG,
        self::IS_TOKEN,
        self::INSTALLMENT_TOTAL,
        self::INSTALLMENT_COUNTER,
        self::ACCOUNT_VAULT_ID,
        self::HOSTED_PAYMENT_PAGE_ID,
        self::STAN,
        self::CURRENCY,
        self::CARD_BIN,
        self::WALLET_TYPE,
        self::LOG_EMAILS,
        self::IS_VOIDABLE,
        self::IS_REVERSIBLE,
        self::IS_REFUNDABLE,
        self::IS_COMPLETABLE,
        self::IS_SETTLED,
        self::CREATED_USER,
        self::LOCATION,
        self::CONTACT,
        self::CHANGELOGS,
        self::PRODUCT_TRANSACTION,
        self::ALL_TAGS,
        self::TAGTRANSACTIONS,
        self::DECLINED_RECURRING_NOTIFICATION,
        self::PAYMENT_RECURRING_NOTIFICATION,
        self::ACCOUNT_VAULT,
        self::QUICK_INVOICE,
        self::DEVELOPER_COMPANY,
        self::TERMINAL,
        self::HOSTED_PAYMENT_PAGE,
        self::TRANSACTION_LEVEL3,
        self::DEVELOPER_COMPANY_ID,
        self::TRANSACTION_HISTORIES,
        self::SURCHARGE_TRANSACTION,
        self::SURCHARGE,
        self::SIGNATURE,
        self::REASON_CODE,
        self::TYPE,
        self::STATUS,
        self::TRANSACTION_BATCH,
        self::TRANSACTION_SPLITS,
        self::POSTBACK_LOGS,
        self::CURRENCY_TYPE,
        self::TRANSACTION_REFERENCES,
        self::SAVED_ACCOUNT
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
        throw new Exception("$value is invalid for Field52Enum.");
    }
}
