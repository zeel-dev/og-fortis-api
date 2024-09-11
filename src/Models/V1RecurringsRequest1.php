<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1RecurringsRequest1 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $nextRunDate = [];

    /**
     * @var array
     */
    private $accountVaultId = [];

    /**
     * @var array
     */
    private $tokenId = [];

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $endDate = [];

    /**
     * @var array
     */
    private $installmentTotalCount = [];

    /**
     * @var array
     */
    private $interval = [];

    /**
     * @var array
     */
    private $intervalType = [];

    /**
     * @var array
     */
    private $locationId = [];

    /**
     * @var array
     */
    private $notificationDays = [];

    /**
     * @var array
     */
    private $paymentMethod = [];

    /**
     * @var array
     */
    private $productTransactionId = [];

    /**
     * @var array
     */
    private $recurringId = [];

    /**
     * @var array
     */
    private $recurringApiId = [];

    /**
     * @var array
     */
    private $startDate = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $transactionAmount = [];

    /**
     * @var bool|null
     */
    private $termsAgree;

    /**
     * @var array
     */
    private $termsAgreeIp = [];

    /**
     * @var array
     */
    private $recurringC1 = [];

    /**
     * @var array
     */
    private $recurringC2 = [];

    /**
     * @var array
     */
    private $recurringC3 = [];

    /**
     * @var bool|null
     */
    private $sendToProcAsRecur;

    /**
     * @var array
     */
    private $tags = [];

    /**
     * @var array
     */
    private $secondaryAmount = [];

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * Returns Next Run Date.
     * Next Run Date
     */
    public function getNextRunDate(): ?string
    {
        if (count($this->nextRunDate) == 0) {
            return null;
        }
        return $this->nextRunDate['value'];
    }

    /**
     * Sets Next Run Date.
     * Next Run Date
     *
     * @maps next_run_date
     */
    public function setNextRunDate(?string $nextRunDate): void
    {
        $this->nextRunDate['value'] = $nextRunDate;
    }

    /**
     * Unsets Next Run Date.
     * Next Run Date
     */
    public function unsetNextRunDate(): void
    {
        $this->nextRunDate = [];
    }

    /**
     * Returns Account Vault Id.
     * Token ID
     */
    public function getAccountVaultId(): ?string
    {
        if (count($this->accountVaultId) == 0) {
            return null;
        }
        return $this->accountVaultId['value'];
    }

    /**
     * Sets Account Vault Id.
     * Token ID
     *
     * @maps account_vault_id
     */
    public function setAccountVaultId(?string $accountVaultId): void
    {
        $this->accountVaultId['value'] = $accountVaultId;
    }

    /**
     * Unsets Account Vault Id.
     * Token ID
     */
    public function unsetAccountVaultId(): void
    {
        $this->accountVaultId = [];
    }

    /**
     * Returns Token Id.
     * Token ID
     */
    public function getTokenId(): ?string
    {
        if (count($this->tokenId) == 0) {
            return null;
        }
        return $this->tokenId['value'];
    }

    /**
     * Sets Token Id.
     * Token ID
     *
     * @maps token_id
     */
    public function setTokenId(?string $tokenId): void
    {
        $this->tokenId['value'] = $tokenId;
    }

    /**
     * Unsets Token Id.
     * Token ID
     */
    public function unsetTokenId(): void
    {
        $this->tokenId = [];
    }

    /**
     * Returns Active.
     * Active
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Active
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * Description
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * Description
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns End Date.
     * End date
     */
    public function getEndDate(): ?string
    {
        if (count($this->endDate) == 0) {
            return null;
        }
        return $this->endDate['value'];
    }

    /**
     * Sets End Date.
     * End date
     *
     * @maps end_date
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate['value'] = $endDate;
    }

    /**
     * Unsets End Date.
     * End date
     */
    public function unsetEndDate(): void
    {
        $this->endDate = [];
    }

    /**
     * Returns Installment Total Count.
     * Installment Total Count
     */
    public function getInstallmentTotalCount(): ?int
    {
        if (count($this->installmentTotalCount) == 0) {
            return null;
        }
        return $this->installmentTotalCount['value'];
    }

    /**
     * Sets Installment Total Count.
     * Installment Total Count
     *
     * @maps installment_total_count
     */
    public function setInstallmentTotalCount(?int $installmentTotalCount): void
    {
        $this->installmentTotalCount['value'] = $installmentTotalCount;
    }

    /**
     * Unsets Installment Total Count.
     * Installment Total Count
     */
    public function unsetInstallmentTotalCount(): void
    {
        $this->installmentTotalCount = [];
    }

    /**
     * Returns Interval.
     * Interval
     */
    public function getInterval(): ?int
    {
        if (count($this->interval) == 0) {
            return null;
        }
        return $this->interval['value'];
    }

    /**
     * Sets Interval.
     * Interval
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval['value'] = $interval;
    }

    /**
     * Unsets Interval.
     * Interval
     */
    public function unsetInterval(): void
    {
        $this->interval = [];
    }

    /**
     * Returns Interval Type.
     * Interval Type
     */
    public function getIntervalType(): ?string
    {
        if (count($this->intervalType) == 0) {
            return null;
        }
        return $this->intervalType['value'];
    }

    /**
     * Sets Interval Type.
     * Interval Type
     *
     * @maps interval_type
     * @factory \FortisAPILib\Models\IntervalTypeEnum::checkValue
     */
    public function setIntervalType(?string $intervalType): void
    {
        $this->intervalType['value'] = $intervalType;
    }

    /**
     * Unsets Interval Type.
     * Interval Type
     */
    public function unsetIntervalType(): void
    {
        $this->intervalType = [];
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        if (count($this->locationId) == 0) {
            return null;
        }
        return $this->locationId['value'];
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId['value'] = $locationId;
    }

    /**
     * Unsets Location Id.
     * Location ID
     */
    public function unsetLocationId(): void
    {
        $this->locationId = [];
    }

    /**
     * Returns Notification Days.
     * Notification Days
     */
    public function getNotificationDays(): ?int
    {
        if (count($this->notificationDays) == 0) {
            return null;
        }
        return $this->notificationDays['value'];
    }

    /**
     * Sets Notification Days.
     * Notification Days
     *
     * @maps notification_days
     */
    public function setNotificationDays(?int $notificationDays): void
    {
        $this->notificationDays['value'] = $notificationDays;
    }

    /**
     * Unsets Notification Days.
     * Notification Days
     */
    public function unsetNotificationDays(): void
    {
        $this->notificationDays = [];
    }

    /**
     * Returns Payment Method.
     * Payment Method
     */
    public function getPaymentMethod(): ?string
    {
        if (count($this->paymentMethod) == 0) {
            return null;
        }
        return $this->paymentMethod['value'];
    }

    /**
     * Sets Payment Method.
     * Payment Method
     *
     * @maps payment_method
     * @factory \FortisAPILib\Models\PaymentMethod1Enum::checkValue
     */
    public function setPaymentMethod(?string $paymentMethod): void
    {
        $this->paymentMethod['value'] = $paymentMethod;
    }

    /**
     * Unsets Payment Method.
     * Payment Method
     */
    public function unsetPaymentMethod(): void
    {
        $this->paymentMethod = [];
    }

    /**
     * Returns Product Transaction Id.
     * Product Transaction ID
     */
    public function getProductTransactionId(): ?string
    {
        if (count($this->productTransactionId) == 0) {
            return null;
        }
        return $this->productTransactionId['value'];
    }

    /**
     * Sets Product Transaction Id.
     * Product Transaction ID
     *
     * @maps product_transaction_id
     */
    public function setProductTransactionId(?string $productTransactionId): void
    {
        $this->productTransactionId['value'] = $productTransactionId;
    }

    /**
     * Unsets Product Transaction Id.
     * Product Transaction ID
     */
    public function unsetProductTransactionId(): void
    {
        $this->productTransactionId = [];
    }

    /**
     * Returns Recurring Id.
     * Recurring ID
     */
    public function getRecurringId(): ?string
    {
        if (count($this->recurringId) == 0) {
            return null;
        }
        return $this->recurringId['value'];
    }

    /**
     * Sets Recurring Id.
     * Recurring ID
     *
     * @maps recurring_id
     */
    public function setRecurringId(?string $recurringId): void
    {
        $this->recurringId['value'] = $recurringId;
    }

    /**
     * Unsets Recurring Id.
     * Recurring ID
     */
    public function unsetRecurringId(): void
    {
        $this->recurringId = [];
    }

    /**
     * Returns Recurring Api Id.
     * Recurring Api ID
     */
    public function getRecurringApiId(): ?string
    {
        if (count($this->recurringApiId) == 0) {
            return null;
        }
        return $this->recurringApiId['value'];
    }

    /**
     * Sets Recurring Api Id.
     * Recurring Api ID
     *
     * @maps recurring_api_id
     */
    public function setRecurringApiId(?string $recurringApiId): void
    {
        $this->recurringApiId['value'] = $recurringApiId;
    }

    /**
     * Unsets Recurring Api Id.
     * Recurring Api ID
     */
    public function unsetRecurringApiId(): void
    {
        $this->recurringApiId = [];
    }

    /**
     * Returns Start Date.
     * Start date
     */
    public function getStartDate(): ?string
    {
        if (count($this->startDate) == 0) {
            return null;
        }
        return $this->startDate['value'];
    }

    /**
     * Sets Start Date.
     * Start date
     *
     * @maps start_date
     */
    public function setStartDate(?string $startDate): void
    {
        $this->startDate['value'] = $startDate;
    }

    /**
     * Unsets Start Date.
     * Start date
     */
    public function unsetStartDate(): void
    {
        $this->startDate = [];
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     * Status
     *
     * @maps status
     * @factory \FortisAPILib\Models\StatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     * Status
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Transaction Amount.
     * Transaction amount
     */
    public function getTransactionAmount(): ?int
    {
        if (count($this->transactionAmount) == 0) {
            return null;
        }
        return $this->transactionAmount['value'];
    }

    /**
     * Sets Transaction Amount.
     * Transaction amount
     *
     * @maps transaction_amount
     */
    public function setTransactionAmount(?int $transactionAmount): void
    {
        $this->transactionAmount['value'] = $transactionAmount;
    }

    /**
     * Unsets Transaction Amount.
     * Transaction amount
     */
    public function unsetTransactionAmount(): void
    {
        $this->transactionAmount = [];
    }

    /**
     * Returns Terms Agree.
     * Terms Agree
     */
    public function getTermsAgree(): ?bool
    {
        return $this->termsAgree;
    }

    /**
     * Sets Terms Agree.
     * Terms Agree
     *
     * @maps terms_agree
     */
    public function setTermsAgree(?bool $termsAgree): void
    {
        $this->termsAgree = $termsAgree;
    }

    /**
     * Returns Terms Agree Ip.
     * Terms Agree Ip
     */
    public function getTermsAgreeIp(): ?string
    {
        if (count($this->termsAgreeIp) == 0) {
            return null;
        }
        return $this->termsAgreeIp['value'];
    }

    /**
     * Sets Terms Agree Ip.
     * Terms Agree Ip
     *
     * @maps terms_agree_ip
     */
    public function setTermsAgreeIp(?string $termsAgreeIp): void
    {
        $this->termsAgreeIp['value'] = $termsAgreeIp;
    }

    /**
     * Unsets Terms Agree Ip.
     * Terms Agree Ip
     */
    public function unsetTermsAgreeIp(): void
    {
        $this->termsAgreeIp = [];
    }

    /**
     * Returns Recurring C1.
     * Custom field used for integrations
     */
    public function getRecurringC1(): ?string
    {
        if (count($this->recurringC1) == 0) {
            return null;
        }
        return $this->recurringC1['value'];
    }

    /**
     * Sets Recurring C1.
     * Custom field used for integrations
     *
     * @maps recurring_c1
     */
    public function setRecurringC1(?string $recurringC1): void
    {
        $this->recurringC1['value'] = $recurringC1;
    }

    /**
     * Unsets Recurring C1.
     * Custom field used for integrations
     */
    public function unsetRecurringC1(): void
    {
        $this->recurringC1 = [];
    }

    /**
     * Returns Recurring C2.
     * Custom field used for integrations
     */
    public function getRecurringC2(): ?string
    {
        if (count($this->recurringC2) == 0) {
            return null;
        }
        return $this->recurringC2['value'];
    }

    /**
     * Sets Recurring C2.
     * Custom field used for integrations
     *
     * @maps recurring_c2
     */
    public function setRecurringC2(?string $recurringC2): void
    {
        $this->recurringC2['value'] = $recurringC2;
    }

    /**
     * Unsets Recurring C2.
     * Custom field used for integrations
     */
    public function unsetRecurringC2(): void
    {
        $this->recurringC2 = [];
    }

    /**
     * Returns Recurring C3.
     * Custom field used for integrations
     */
    public function getRecurringC3(): ?string
    {
        if (count($this->recurringC3) == 0) {
            return null;
        }
        return $this->recurringC3['value'];
    }

    /**
     * Sets Recurring C3.
     * Custom field used for integrations
     *
     * @maps recurring_c3
     */
    public function setRecurringC3(?string $recurringC3): void
    {
        $this->recurringC3['value'] = $recurringC3;
    }

    /**
     * Unsets Recurring C3.
     * Custom field used for integrations
     */
    public function unsetRecurringC3(): void
    {
        $this->recurringC3 = [];
    }

    /**
     * Returns Send to Proc as Recur.
     * Send To Proc As Recur
     */
    public function getSendToProcAsRecur(): ?bool
    {
        return $this->sendToProcAsRecur;
    }

    /**
     * Sets Send to Proc as Recur.
     * Send To Proc As Recur
     *
     * @maps send_to_proc_as_recur
     */
    public function setSendToProcAsRecur(?bool $sendToProcAsRecur): void
    {
        $this->sendToProcAsRecur = $sendToProcAsRecur;
    }

    /**
     * Returns Tags.
     * Tags
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        if (count($this->tags) == 0) {
            return null;
        }
        return $this->tags['value'];
    }

    /**
     * Sets Tags.
     * Tags
     *
     * @maps tags
     *
     * @param string[]|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags['value'] = $tags;
    }

    /**
     * Unsets Tags.
     * Tags
     */
    public function unsetTags(): void
    {
        $this->tags = [];
    }

    /**
     * Returns Secondary Amount.
     * Retained Amount
     */
    public function getSecondaryAmount(): ?int
    {
        if (count($this->secondaryAmount) == 0) {
            return null;
        }
        return $this->secondaryAmount['value'];
    }

    /**
     * Sets Secondary Amount.
     * Retained Amount
     *
     * @maps secondary_amount
     */
    public function setSecondaryAmount(?int $secondaryAmount): void
    {
        $this->secondaryAmount['value'] = $secondaryAmount;
    }

    /**
     * Unsets Secondary Amount.
     * Retained Amount
     */
    public function unsetSecondaryAmount(): void
    {
        $this->secondaryAmount = [];
    }

    /**
     * Returns Contact Id.
     * Contact ID
     */
    public function getContactId(): ?string
    {
        if (count($this->contactId) == 0) {
            return null;
        }
        return $this->contactId['value'];
    }

    /**
     * Sets Contact Id.
     * Contact ID
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Contact ID
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->nextRunDate)) {
            $json['next_run_date']           = $this->nextRunDate['value'];
        }
        if (!empty($this->accountVaultId)) {
            $json['account_vault_id']        = $this->accountVaultId['value'];
        }
        if (!empty($this->tokenId)) {
            $json['token_id']                = $this->tokenId['value'];
        }
        if (isset($this->active)) {
            $json['active']                  = $this->active;
        }
        if (!empty($this->description)) {
            $json['description']             = $this->description['value'];
        }
        if (!empty($this->endDate)) {
            $json['end_date']                = $this->endDate['value'];
        }
        if (!empty($this->installmentTotalCount)) {
            $json['installment_total_count'] = $this->installmentTotalCount['value'];
        }
        if (!empty($this->interval)) {
            $json['interval']                = $this->interval['value'];
        }
        if (!empty($this->intervalType)) {
            $json['interval_type']           = IntervalTypeEnum::checkValue($this->intervalType['value']);
        }
        if (!empty($this->locationId)) {
            $json['location_id']             = $this->locationId['value'];
        }
        if (!empty($this->notificationDays)) {
            $json['notification_days']       = $this->notificationDays['value'];
        }
        if (!empty($this->paymentMethod)) {
            $json['payment_method']          = PaymentMethod1Enum::checkValue($this->paymentMethod['value']);
        }
        if (!empty($this->productTransactionId)) {
            $json['product_transaction_id']  = $this->productTransactionId['value'];
        }
        if (!empty($this->recurringId)) {
            $json['recurring_id']            = $this->recurringId['value'];
        }
        if (!empty($this->recurringApiId)) {
            $json['recurring_api_id']        = $this->recurringApiId['value'];
        }
        if (!empty($this->startDate)) {
            $json['start_date']              = $this->startDate['value'];
        }
        if (!empty($this->status)) {
            $json['status']                  = StatusEnum::checkValue($this->status['value']);
        }
        if (!empty($this->transactionAmount)) {
            $json['transaction_amount']      = $this->transactionAmount['value'];
        }
        if (isset($this->termsAgree)) {
            $json['terms_agree']             = $this->termsAgree;
        }
        if (!empty($this->termsAgreeIp)) {
            $json['terms_agree_ip']          = $this->termsAgreeIp['value'];
        }
        if (!empty($this->recurringC1)) {
            $json['recurring_c1']            = $this->recurringC1['value'];
        }
        if (!empty($this->recurringC2)) {
            $json['recurring_c2']            = $this->recurringC2['value'];
        }
        if (!empty($this->recurringC3)) {
            $json['recurring_c3']            = $this->recurringC3['value'];
        }
        if (isset($this->sendToProcAsRecur)) {
            $json['send_to_proc_as_recur']   = $this->sendToProcAsRecur;
        }
        if (!empty($this->tags)) {
            $json['tags']                    = $this->tags['value'];
        }
        if (!empty($this->secondaryAmount)) {
            $json['secondary_amount']        = $this->secondaryAmount['value'];
        }
        if (!empty($this->contactId)) {
            $json['contact_id']              = $this->contactId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
