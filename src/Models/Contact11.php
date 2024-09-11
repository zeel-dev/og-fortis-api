<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

/**
 * The Contact.
 */
class Contact11 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $firstName = [];

    /**
     * @var array
     */
    private $lastName = [];

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @param string $phoneNumber
     */
    public function __construct(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns First Name.
     * Contact's first name.
     */
    public function getFirstName(): ?string
    {
        if (count($this->firstName) == 0) {
            return null;
        }
        return $this->firstName['value'];
    }

    /**
     * Sets First Name.
     * Contact's first name.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName['value'] = $firstName;
    }

    /**
     * Unsets First Name.
     * Contact's first name.
     */
    public function unsetFirstName(): void
    {
        $this->firstName = [];
    }

    /**
     * Returns Last Name.
     * Contact's last name.
     */
    public function getLastName(): ?string
    {
        if (count($this->lastName) == 0) {
            return null;
        }
        return $this->lastName['value'];
    }

    /**
     * Sets Last Name.
     * Contact's last name.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName['value'] = $lastName;
    }

    /**
     * Unsets Last Name.
     * Contact's last name.
     */
    public function unsetLastName(): void
    {
        $this->lastName = [];
    }

    /**
     * Returns Email.
     * Contact's email address.
     */
    public function getEmail(): ?string
    {
        if (count($this->email) == 0) {
            return null;
        }
        return $this->email['value'];
    }

    /**
     * Sets Email.
     * Contact's email address.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Contact's email address.
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Phone Number.
     * Contact's phone.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * Contact's phone.
     *
     * @required
     * @maps phone_number
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
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
        if (!empty($this->firstName)) {
            $json['first_name'] = $this->firstName['value'];
        }
        if (!empty($this->lastName)) {
            $json['last_name']  = $this->lastName['value'];
        }
        if (!empty($this->email)) {
            $json['email']      = $this->email['value'];
        }
        $json['phone_number']   = $this->phoneNumber;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
