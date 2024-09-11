<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use FortisAPILib\ApiHelper;
use stdClass;

class V1TicketsRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $accountHolderName = [];

    /**
     * @var string
     */
    private $expDate;

    /**
     * @var array
     */
    private $cvv = [];

    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var BillingAddress5|null
     */
    private $billingAddress;

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $contactApiId = [];

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @param string $expDate
     * @param string $accountNumber
     */
    public function __construct(string $expDate, string $accountNumber)
    {
        $this->expDate = $expDate;
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Account Holder Name.
     * Account holder name
     */
    public function getAccountHolderName(): ?string
    {
        if (count($this->accountHolderName) == 0) {
            return null;
        }
        return $this->accountHolderName['value'];
    }

    /**
     * Sets Account Holder Name.
     * Account holder name
     *
     * @maps account_holder_name
     */
    public function setAccountHolderName(?string $accountHolderName): void
    {
        $this->accountHolderName['value'] = $accountHolderName;
    }

    /**
     * Unsets Account Holder Name.
     * Account holder name
     */
    public function unsetAccountHolderName(): void
    {
        $this->accountHolderName = [];
    }

    /**
     * Returns Exp Date.
     * The Expiration Date for the credit card.
     */
    public function getExpDate(): string
    {
        return $this->expDate;
    }

    /**
     * Sets Exp Date.
     * The Expiration Date for the credit card.
     *
     * @required
     * @maps exp_date
     */
    public function setExpDate(string $expDate): void
    {
        $this->expDate = $expDate;
    }

    /**
     * Returns Cvv.
     * CVV
     */
    public function getCvv(): ?string
    {
        if (count($this->cvv) == 0) {
            return null;
        }
        return $this->cvv['value'];
    }

    /**
     * Sets Cvv.
     * CVV
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv['value'] = $cvv;
    }

    /**
     * Unsets Cvv.
     * CVV
     */
    public function unsetCvv(): void
    {
        $this->cvv = [];
    }

    /**
     * Returns Account Number.
     * Account number
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account number
     *
     * @required
     * @maps account_number
     */
    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Billing Address.
     * Billing Address Object
     */
    public function getBillingAddress(): ?BillingAddress5
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Billing Address Object
     *
     * @maps billing_address
     */
    public function setBillingAddress(?BillingAddress5 $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Contact Id.
     * Used to associate the Ticket with a Contact.
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
     * Used to associate the Ticket with a Contact.
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Used to associate the Ticket with a Contact.
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Contact Api Id.
     * Used to associate the Ticket with a Contact.
     */
    public function getContactApiId(): ?string
    {
        if (count($this->contactApiId) == 0) {
            return null;
        }
        return $this->contactApiId['value'];
    }

    /**
     * Sets Contact Api Id.
     * Used to associate the Ticket with a Contact.
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?string $contactApiId): void
    {
        $this->contactApiId['value'] = $contactApiId;
    }

    /**
     * Unsets Contact Api Id.
     * Used to associate the Ticket with a Contact.
     */
    public function unsetContactApiId(): void
    {
        $this->contactApiId = [];
    }

    /**
     * Returns Location Id.
     * A valid Location Id associated with the Contact for this Ticket
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * A valid Location Id associated with the Contact for this Ticket
     *
     * @maps location_id
     * @mapsBy anyOf(anyOf(string),null)
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Location Api Id.
     * Location Api Id
     */
    public function getLocationApiId(): ?string
    {
        if (count($this->locationApiId) == 0) {
            return null;
        }
        return $this->locationApiId['value'];
    }

    /**
     * Sets Location Api Id.
     * Location Api Id
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location Api Id
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
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
        if (!empty($this->accountHolderName)) {
            $json['account_holder_name'] = $this->accountHolderName['value'];
        }
        $json['exp_date']                = $this->expDate;
        if (!empty($this->cvv)) {
            $json['cvv']                 = $this->cvv['value'];
        }
        $json['account_number']          = $this->accountNumber;
        if (isset($this->billingAddress)) {
            $json['billing_address']     = $this->billingAddress;
        }
        if (!empty($this->contactId)) {
            $json['contact_id']          = $this->contactId['value'];
        }
        if (!empty($this->contactApiId)) {
            $json['contact_api_id']      = $this->contactApiId['value'];
        }
        if (isset($this->locationId)) {
            $json['location_id']         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->locationId,
                    'anyOf(anyOf(string),null)'
                );
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id']     = $this->locationApiId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
