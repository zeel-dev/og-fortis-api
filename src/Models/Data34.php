<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Data34 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $attemptInterval = ['value' => 300];

    /**
     * @var array
     */
    private $basicAuthUsername = [];

    /**
     * @var array
     */
    private $basicAuthPassword = [];

    /**
     * @var array
     */
    private $expands = [];

    /**
     * @var array
     */
    private $format = [];

    /**
     * @var bool|null
     */
    private $isActive;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var bool|null
     */
    private $onCreate;

    /**
     * @var bool|null
     */
    private $onUpdate;

    /**
     * @var bool|null
     */
    private $onDelete;

    /**
     * @var array
     */
    private $postbackConfigId = [];

    /**
     * @var array
     */
    private $productTransactionId = [];

    /**
     * @var string|null
     */
    private $resource;

    /**
     * @var int|null
     */
    private $numberOfAttempts;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var PostbackLog[]|null
     */
    private $postbackLogs;

    /**
     * Returns Attempt Interval.
     * Number of seconds before another retry is submitted
     */
    public function getAttemptInterval(): ?int
    {
        if (count($this->attemptInterval) == 0) {
            return null;
        }
        return $this->attemptInterval['value'];
    }

    /**
     * Sets Attempt Interval.
     * Number of seconds before another retry is submitted
     *
     * @maps attempt_interval
     */
    public function setAttemptInterval(?int $attemptInterval): void
    {
        $this->attemptInterval['value'] = $attemptInterval;
    }

    /**
     * Unsets Attempt Interval.
     * Number of seconds before another retry is submitted
     */
    public function unsetAttemptInterval(): void
    {
        $this->attemptInterval = [];
    }

    /**
     * Returns Basic Auth Username.
     * Basic Auth Username Information on `expand`
     */
    public function getBasicAuthUsername(): ?string
    {
        if (count($this->basicAuthUsername) == 0) {
            return null;
        }
        return $this->basicAuthUsername['value'];
    }

    /**
     * Sets Basic Auth Username.
     * Basic Auth Username Information on `expand`
     *
     * @maps basic_auth_username
     */
    public function setBasicAuthUsername(?string $basicAuthUsername): void
    {
        $this->basicAuthUsername['value'] = $basicAuthUsername;
    }

    /**
     * Unsets Basic Auth Username.
     * Basic Auth Username Information on `expand`
     */
    public function unsetBasicAuthUsername(): void
    {
        $this->basicAuthUsername = [];
    }

    /**
     * Returns Basic Auth Password.
     * Basic Auth Password Information on `expand`
     */
    public function getBasicAuthPassword(): ?string
    {
        if (count($this->basicAuthPassword) == 0) {
            return null;
        }
        return $this->basicAuthPassword['value'];
    }

    /**
     * Sets Basic Auth Password.
     * Basic Auth Password Information on `expand`
     *
     * @maps basic_auth_password
     */
    public function setBasicAuthPassword(?string $basicAuthPassword): void
    {
        $this->basicAuthPassword['value'] = $basicAuthPassword;
    }

    /**
     * Unsets Basic Auth Password.
     * Basic Auth Password Information on `expand`
     */
    public function unsetBasicAuthPassword(): void
    {
        $this->basicAuthPassword = [];
    }

    /**
     * Returns Expands.
     * An option list of expanded data to send with base data. (i.e. set this field to “contact,
     * account_vault” to get the contact an accountvault used to run a transaction.)
     */
    public function getExpands(): ?string
    {
        if (count($this->expands) == 0) {
            return null;
        }
        return $this->expands['value'];
    }

    /**
     * Sets Expands.
     * An option list of expanded data to send with base data. (i.e. set this field to “contact,
     * account_vault” to get the contact an accountvault used to run a transaction.)
     *
     * @maps expands
     */
    public function setExpands(?string $expands): void
    {
        $this->expands['value'] = $expands;
    }

    /**
     * Unsets Expands.
     * An option list of expanded data to send with base data. (i.e. set this field to “contact,
     * account_vault” to get the contact an accountvault used to run a transaction.)
     */
    public function unsetExpands(): void
    {
        $this->expands = [];
    }

    /**
     * Returns Format.
     * Options include: api-default
     */
    public function getFormat(): ?string
    {
        if (count($this->format) == 0) {
            return null;
        }
        return $this->format['value'];
    }

    /**
     * Sets Format.
     * Options include: api-default
     *
     * @maps format
     * @factory \FortisAPILib\Models\FormatEnum::checkValue
     */
    public function setFormat(?string $format): void
    {
        $this->format['value'] = $format;
    }

    /**
     * Unsets Format.
     * Options include: api-default
     */
    public function unsetFormat(): void
    {
        $this->format = [];
    }

    /**
     * Returns Is Active.
     * Flag to indicate whether configuration is active (in effect).
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Sets Is Active.
     * Flag to indicate whether configuration is active (in effect).
     *
     * @maps is_active
     */
    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * Returns Location Id.
     * The location identifier of the resource you want to recieve postbacks from.
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * The location identifier of the resource you want to recieve postbacks from.
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Location Api Id.
     * Location Api ID
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
     * Location Api ID
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location Api ID
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns On Create.
     * To receive postbacks on the creation of a resource
     */
    public function getOnCreate(): ?bool
    {
        return $this->onCreate;
    }

    /**
     * Sets On Create.
     * To receive postbacks on the creation of a resource
     *
     * @maps on_create
     */
    public function setOnCreate(?bool $onCreate): void
    {
        $this->onCreate = $onCreate;
    }

    /**
     * Returns On Update.
     * To receive postbacks on the updating of a resource
     */
    public function getOnUpdate(): ?bool
    {
        return $this->onUpdate;
    }

    /**
     * Sets On Update.
     * To receive postbacks on the updating of a resource
     *
     * @maps on_update
     */
    public function setOnUpdate(?bool $onUpdate): void
    {
        $this->onUpdate = $onUpdate;
    }

    /**
     * Returns On Delete.
     * To receive postbacks when the record is deleted
     */
    public function getOnDelete(): ?bool
    {
        return $this->onDelete;
    }

    /**
     * Sets On Delete.
     * To receive postbacks when the record is deleted
     *
     * @maps on_delete
     */
    public function setOnDelete(?bool $onDelete): void
    {
        $this->onDelete = $onDelete;
    }

    /**
     * Returns Postback Config Id.
     * Postback Config ID
     */
    public function getPostbackConfigId(): ?string
    {
        if (count($this->postbackConfigId) == 0) {
            return null;
        }
        return $this->postbackConfigId['value'];
    }

    /**
     * Sets Postback Config Id.
     * Postback Config ID
     *
     * @maps postback_config_id
     */
    public function setPostbackConfigId(?string $postbackConfigId): void
    {
        $this->postbackConfigId['value'] = $postbackConfigId;
    }

    /**
     * Unsets Postback Config Id.
     * Postback Config ID
     */
    public function unsetPostbackConfigId(): void
    {
        $this->postbackConfigId = [];
    }

    /**
     * Returns Product Transaction Id.
     * Required when using 'transaction' or 'transactionbatch' resource
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
     * Required when using 'transaction' or 'transactionbatch' resource
     *
     * @maps product_transaction_id
     */
    public function setProductTransactionId(?string $productTransactionId): void
    {
        $this->productTransactionId['value'] = $productTransactionId;
    }

    /**
     * Unsets Product Transaction Id.
     * Required when using 'transaction' or 'transactionbatch' resource
     */
    public function unsetProductTransactionId(): void
    {
        $this->productTransactionId = [];
    }

    /**
     * Returns Resource.
     * The resource you want to subscribe the postbacks to.
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }

    /**
     * Sets Resource.
     * The resource you want to subscribe the postbacks to.
     *
     * @maps resource
     * @factory \FortisAPILib\Models\Resource12Enum::checkValue
     */
    public function setResource(?string $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * Returns Number of Attempts.
     * Maximum number of attempts on failure
     */
    public function getNumberOfAttempts(): ?int
    {
        return $this->numberOfAttempts;
    }

    /**
     * Sets Number of Attempts.
     * Maximum number of attempts on failure
     *
     * @maps number_of_attempts
     */
    public function setNumberOfAttempts(?int $numberOfAttempts): void
    {
        $this->numberOfAttempts = $numberOfAttempts;
    }

    /**
     * Returns Url.
     * The URL where the postback will be submitted
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The URL where the postback will be submitted
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Id.
     * Postback Config ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Postback Config ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Postback Logs.
     * Postback Log Information on `expand`
     *
     * @return PostbackLog[]|null
     */
    public function getPostbackLogs(): ?array
    {
        return $this->postbackLogs;
    }

    /**
     * Sets Postback Logs.
     * Postback Log Information on `expand`
     *
     * @maps postback_logs
     *
     * @param PostbackLog[]|null $postbackLogs
     */
    public function setPostbackLogs(?array $postbackLogs): void
    {
        $this->postbackLogs = $postbackLogs;
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
        if (!empty($this->attemptInterval)) {
            $json['attempt_interval']       = $this->attemptInterval['value'];
        }
        if (!empty($this->basicAuthUsername)) {
            $json['basic_auth_username']    = $this->basicAuthUsername['value'];
        }
        if (!empty($this->basicAuthPassword)) {
            $json['basic_auth_password']    = $this->basicAuthPassword['value'];
        }
        if (!empty($this->expands)) {
            $json['expands']                = $this->expands['value'];
        }
        if (!empty($this->format)) {
            $json['format']                 = FormatEnum::checkValue($this->format['value']);
        }
        if (isset($this->isActive)) {
            $json['is_active']              = $this->isActive;
        }
        if (isset($this->locationId)) {
            $json['location_id']            = $this->locationId;
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id']        = $this->locationApiId['value'];
        }
        if (isset($this->onCreate)) {
            $json['on_create']              = $this->onCreate;
        }
        if (isset($this->onUpdate)) {
            $json['on_update']              = $this->onUpdate;
        }
        if (isset($this->onDelete)) {
            $json['on_delete']              = $this->onDelete;
        }
        if (!empty($this->postbackConfigId)) {
            $json['postback_config_id']     = $this->postbackConfigId['value'];
        }
        if (!empty($this->productTransactionId)) {
            $json['product_transaction_id'] = $this->productTransactionId['value'];
        }
        if (isset($this->resource)) {
            $json['resource']               = Resource12Enum::checkValue($this->resource);
        }
        if (isset($this->numberOfAttempts)) {
            $json['number_of_attempts']     = $this->numberOfAttempts;
        }
        if (isset($this->url)) {
            $json['url']                    = $this->url;
        }
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->postbackLogs)) {
            $json['postback_logs']          = $this->postbackLogs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
