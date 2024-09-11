<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Locationmarketplace implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var string|null
     */
    private $marketplaceId;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var array
     */
    private $userId = [];

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var array
     */
    private $createdTs = [];

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Marketplace Id.
     * Marketplacec ID
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }

    /**
     * Sets Marketplace Id.
     * Marketplacec ID
     *
     * @maps marketplace_id
     */
    public function setMarketplaceId(?string $marketplaceId): void
    {
        $this->marketplaceId = $marketplaceId;
    }

    /**
     * Returns Location Api Id.
     * Location API ID
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
     * Location API ID
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location API ID
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns User Id.
     * User ID
     */
    public function getUserId(): ?string
    {
        if (count($this->userId) == 0) {
            return null;
        }
        return $this->userId['value'];
    }

    /**
     * Sets User Id.
     * User ID
     *
     * @maps user_id
     */
    public function setUserId(?string $userId): void
    {
        $this->userId['value'] = $userId;
    }

    /**
     * Unsets User Id.
     * User ID
     */
    public function unsetUserId(): void
    {
        $this->userId = [];
    }

    /**
     * Returns Id.
     * Location Marketplace ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Location Marketplace ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        if (count($this->createdTs) == 0) {
            return null;
        }
        return $this->createdTs['value'];
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs['value'] = $createdTs;
    }

    /**
     * Unsets Created Ts.
     * Created Time Stamp
     */
    public function unsetCreatedTs(): void
    {
        $this->createdTs = [];
    }

    /**
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        if (count($this->createdUserId) == 0) {
            return null;
        }
        return $this->createdUserId['value'];
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId['value'] = $createdUserId;
    }

    /**
     * Unsets Created User Id.
     * User ID Created the register
     */
    public function unsetCreatedUserId(): void
    {
        $this->createdUserId = [];
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
        if (isset($this->locationId)) {
            $json['location_id']     = $this->locationId;
        }
        if (isset($this->marketplaceId)) {
            $json['marketplace_id']  = $this->marketplaceId;
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id'] = $this->locationApiId['value'];
        }
        if (!empty($this->userId)) {
            $json['user_id']         = $this->userId['value'];
        }
        if (isset($this->id)) {
            $json['id']              = $this->id;
        }
        if (!empty($this->createdTs)) {
            $json['created_ts']      = $this->createdTs['value'];
        }
        if (!empty($this->createdUserId)) {
            $json['created_user_id'] = $this->createdUserId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
