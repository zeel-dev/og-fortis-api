<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Data19 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var array
     */
    private $defaultProductTransactionId = [];

    /**
     * @var string|null
     */
    private $terminalApplicationId;

    /**
     * @var array
     */
    private $terminalCvmId = [];

    /**
     * @var string|null
     */
    private $terminalManufacturerCode;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var array
     */
    private $macAddress = [];

    /**
     * @var string|null
     */
    private $localIpAddress;

    /**
     * @var int|null
     */
    private $port = 10009;

    /**
     * @var string|null
     */
    private $serialNumber;

    /**
     * @var string|null
     */
    private $terminalNumber;

    /**
     * @var TerminalTimeouts|null
     */
    private $terminalTimeouts;

    /**
     * @var TipPercents|null
     */
    private $tipPercents;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var array
     */
    private $terminalApiId = [];

    /**
     * @var array
     */
    private $headerLine1 = [];

    /**
     * @var array
     */
    private $headerLine2 = [];

    /**
     * @var array
     */
    private $headerLine3 = [];

    /**
     * @var array
     */
    private $headerLine4 = [];

    /**
     * @var array
     */
    private $headerLine5 = [];

    /**
     * @var array
     */
    private $trailerLine1 = [];

    /**
     * @var array
     */
    private $trailerLine2 = [];

    /**
     * @var array
     */
    private $trailerLine3 = [];

    /**
     * @var array
     */
    private $trailerLine4 = [];

    /**
     * @var array
     */
    private $trailerLine5 = [];

    /**
     * @var array
     */
    private $defaultCheckin = [];

    /**
     * @var array
     */
    private $defaultCheckout = [];

    /**
     * @var array
     */
    private $defaultRoomRate = [];

    /**
     * @var array
     */
    private $defaultRoomNumber = [];

    /**
     * @var bool|null
     */
    private $debit;

    /**
     * @var bool|null
     */
    private $emv;

    /**
     * @var bool|null
     */
    private $cashbackEnable;

    /**
     * @var bool|null
     */
    private $printEnable;

    /**
     * @var bool|null
     */
    private $sigCaptureEnable;

    /**
     * @var bool|null
     */
    private $isProvisioned;

    /**
     * @var bool|null
     */
    private $tipEnable;

    /**
     * @var bool|null
     */
    private $validatedDecryption;

    /**
     * @var array
     */
    private $communicationType = [];

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var int|null
     */
    private $modifiedTs;

    /**
     * @var int|null
     */
    private $lastRegistrationTs;

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * @var string|null
     */
    private $modifiedUserId;

    /**
     * @var Location|null
     */
    private $location;

    /**
     * @var CreatedUser|null
     */
    private $createdUser;

    /**
     * @var TerminalApplication|null
     */
    private $terminalApplication;

    /**
     * @var Changelog[]|null
     */
    private $changelogs;

    /**
     * @var TerminalRouter[]|null
     */
    private $terminalRouters;

    /**
     * @var bool|null
     */
    private $hasTerminalRouters;

    /**
     * @var TerminalCvm|null
     */
    private $terminalCvm;

    /**
     * @var TerminalManufacturer|null
     */
    private $terminalManufacturer;

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
     * Returns Default Product Transaction Id.
     * Product Transaction ID
     */
    public function getDefaultProductTransactionId(): ?string
    {
        if (count($this->defaultProductTransactionId) == 0) {
            return null;
        }
        return $this->defaultProductTransactionId['value'];
    }

    /**
     * Sets Default Product Transaction Id.
     * Product Transaction ID
     *
     * @maps default_product_transaction_id
     */
    public function setDefaultProductTransactionId(?string $defaultProductTransactionId): void
    {
        $this->defaultProductTransactionId['value'] = $defaultProductTransactionId;
    }

    /**
     * Unsets Default Product Transaction Id.
     * Product Transaction ID
     */
    public function unsetDefaultProductTransactionId(): void
    {
        $this->defaultProductTransactionId = [];
    }

    /**
     * Returns Terminal Application Id.
     * Terminal Application ID
     */
    public function getTerminalApplicationId(): ?string
    {
        return $this->terminalApplicationId;
    }

    /**
     * Sets Terminal Application Id.
     * Terminal Application ID
     *
     * @maps terminal_application_id
     */
    public function setTerminalApplicationId(?string $terminalApplicationId): void
    {
        $this->terminalApplicationId = $terminalApplicationId;
    }

    /**
     * Returns Terminal Cvm Id.
     * Terminal CVM ID
     */
    public function getTerminalCvmId(): ?string
    {
        if (count($this->terminalCvmId) == 0) {
            return null;
        }
        return $this->terminalCvmId['value'];
    }

    /**
     * Sets Terminal Cvm Id.
     * Terminal CVM ID
     *
     * @maps terminal_cvm_id
     */
    public function setTerminalCvmId(?string $terminalCvmId): void
    {
        $this->terminalCvmId['value'] = $terminalCvmId;
    }

    /**
     * Unsets Terminal Cvm Id.
     * Terminal CVM ID
     */
    public function unsetTerminalCvmId(): void
    {
        $this->terminalCvmId = [];
    }

    /**
     * Returns Terminal Manufacturer Code.
     * Terminal Manufacturer Code
     */
    public function getTerminalManufacturerCode(): ?string
    {
        return $this->terminalManufacturerCode;
    }

    /**
     * Sets Terminal Manufacturer Code.
     * Terminal Manufacturer Code
     *
     * @maps terminal_manufacturer_code
     * @factory \FortisAPILib\Models\TerminalManufacturerCodeEnum::checkValue
     */
    public function setTerminalManufacturerCode(?string $terminalManufacturerCode): void
    {
        $this->terminalManufacturerCode = $terminalManufacturerCode;
    }

    /**
     * Returns Title.
     * Terminal Name
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Terminal Name
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Mac Address.
     * Terminal MAC Address
     */
    public function getMacAddress(): ?string
    {
        if (count($this->macAddress) == 0) {
            return null;
        }
        return $this->macAddress['value'];
    }

    /**
     * Sets Mac Address.
     * Terminal MAC Address
     *
     * @maps mac_address
     */
    public function setMacAddress(?string $macAddress): void
    {
        $this->macAddress['value'] = $macAddress;
    }

    /**
     * Unsets Mac Address.
     * Terminal MAC Address
     */
    public function unsetMacAddress(): void
    {
        $this->macAddress = [];
    }

    /**
     * Returns Local Ip Address.
     * Terminal Local IP Address
     */
    public function getLocalIpAddress(): ?string
    {
        return $this->localIpAddress;
    }

    /**
     * Sets Local Ip Address.
     * Terminal Local IP Address
     *
     * @maps local_ip_address
     */
    public function setLocalIpAddress(?string $localIpAddress): void
    {
        $this->localIpAddress = $localIpAddress;
    }

    /**
     * Returns Port.
     * Terminal Port
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * Sets Port.
     * Terminal Port
     *
     * @maps port
     */
    public function setPort(?int $port): void
    {
        $this->port = $port;
    }

    /**
     * Returns Serial Number.
     * Terminal Serial Number
     */
    public function getSerialNumber(): ?string
    {
        return $this->serialNumber;
    }

    /**
     * Sets Serial Number.
     * Terminal Serial Number
     *
     * @maps serial_number
     */
    public function setSerialNumber(?string $serialNumber): void
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * Returns Terminal Number.
     * Terminal Number
     */
    public function getTerminalNumber(): ?string
    {
        return $this->terminalNumber;
    }

    /**
     * Sets Terminal Number.
     * Terminal Number
     *
     * @maps terminal_number
     */
    public function setTerminalNumber(?string $terminalNumber): void
    {
        $this->terminalNumber = $terminalNumber;
    }

    /**
     * Returns Terminal Timeouts.
     * The following options outlines some configurable timeout values that can be used to customize the
     * experience at the terminal for the cardholder.
     */
    public function getTerminalTimeouts(): ?TerminalTimeouts
    {
        return $this->terminalTimeouts;
    }

    /**
     * Sets Terminal Timeouts.
     * The following options outlines some configurable timeout values that can be used to customize the
     * experience at the terminal for the cardholder.
     *
     * @maps terminal_timeouts
     */
    public function setTerminalTimeouts(?TerminalTimeouts $terminalTimeouts): void
    {
        $this->terminalTimeouts = $terminalTimeouts;
    }

    /**
     * Returns Tip Percents.
     * A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2,
     * percent_3
     */
    public function getTipPercents(): ?TipPercents
    {
        return $this->tipPercents;
    }

    /**
     * Sets Tip Percents.
     * A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2,
     * percent_3
     *
     * @maps tip_percents
     */
    public function setTipPercents(?TipPercents $tipPercents): void
    {
        $this->tipPercents = $tipPercents;
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
     * Returns Terminal Api Id.
     * Terminal Api ID
     */
    public function getTerminalApiId(): ?string
    {
        if (count($this->terminalApiId) == 0) {
            return null;
        }
        return $this->terminalApiId['value'];
    }

    /**
     * Sets Terminal Api Id.
     * Terminal Api ID
     *
     * @maps terminal_api_id
     */
    public function setTerminalApiId(?string $terminalApiId): void
    {
        $this->terminalApiId['value'] = $terminalApiId;
    }

    /**
     * Unsets Terminal Api Id.
     * Terminal Api ID
     */
    public function unsetTerminalApiId(): void
    {
        $this->terminalApiId = [];
    }

    /**
     * Returns Header Line 1.
     * Header Line 1
     */
    public function getHeaderLine1(): ?string
    {
        if (count($this->headerLine1) == 0) {
            return null;
        }
        return $this->headerLine1['value'];
    }

    /**
     * Sets Header Line 1.
     * Header Line 1
     *
     * @maps header_line_1
     */
    public function setHeaderLine1(?string $headerLine1): void
    {
        $this->headerLine1['value'] = $headerLine1;
    }

    /**
     * Unsets Header Line 1.
     * Header Line 1
     */
    public function unsetHeaderLine1(): void
    {
        $this->headerLine1 = [];
    }

    /**
     * Returns Header Line 2.
     * Header Line 2
     */
    public function getHeaderLine2(): ?string
    {
        if (count($this->headerLine2) == 0) {
            return null;
        }
        return $this->headerLine2['value'];
    }

    /**
     * Sets Header Line 2.
     * Header Line 2
     *
     * @maps header_line_2
     */
    public function setHeaderLine2(?string $headerLine2): void
    {
        $this->headerLine2['value'] = $headerLine2;
    }

    /**
     * Unsets Header Line 2.
     * Header Line 2
     */
    public function unsetHeaderLine2(): void
    {
        $this->headerLine2 = [];
    }

    /**
     * Returns Header Line 3.
     * Header Line 3
     */
    public function getHeaderLine3(): ?string
    {
        if (count($this->headerLine3) == 0) {
            return null;
        }
        return $this->headerLine3['value'];
    }

    /**
     * Sets Header Line 3.
     * Header Line 3
     *
     * @maps header_line_3
     */
    public function setHeaderLine3(?string $headerLine3): void
    {
        $this->headerLine3['value'] = $headerLine3;
    }

    /**
     * Unsets Header Line 3.
     * Header Line 3
     */
    public function unsetHeaderLine3(): void
    {
        $this->headerLine3 = [];
    }

    /**
     * Returns Header Line 4.
     * Header Line 4
     */
    public function getHeaderLine4(): ?string
    {
        if (count($this->headerLine4) == 0) {
            return null;
        }
        return $this->headerLine4['value'];
    }

    /**
     * Sets Header Line 4.
     * Header Line 4
     *
     * @maps header_line_4
     */
    public function setHeaderLine4(?string $headerLine4): void
    {
        $this->headerLine4['value'] = $headerLine4;
    }

    /**
     * Unsets Header Line 4.
     * Header Line 4
     */
    public function unsetHeaderLine4(): void
    {
        $this->headerLine4 = [];
    }

    /**
     * Returns Header Line 5.
     * Header Line 5
     */
    public function getHeaderLine5(): ?string
    {
        if (count($this->headerLine5) == 0) {
            return null;
        }
        return $this->headerLine5['value'];
    }

    /**
     * Sets Header Line 5.
     * Header Line 5
     *
     * @maps header_line_5
     */
    public function setHeaderLine5(?string $headerLine5): void
    {
        $this->headerLine5['value'] = $headerLine5;
    }

    /**
     * Unsets Header Line 5.
     * Header Line 5
     */
    public function unsetHeaderLine5(): void
    {
        $this->headerLine5 = [];
    }

    /**
     * Returns Trailer Line 1.
     * Trailer Line 1
     */
    public function getTrailerLine1(): ?string
    {
        if (count($this->trailerLine1) == 0) {
            return null;
        }
        return $this->trailerLine1['value'];
    }

    /**
     * Sets Trailer Line 1.
     * Trailer Line 1
     *
     * @maps trailer_line_1
     */
    public function setTrailerLine1(?string $trailerLine1): void
    {
        $this->trailerLine1['value'] = $trailerLine1;
    }

    /**
     * Unsets Trailer Line 1.
     * Trailer Line 1
     */
    public function unsetTrailerLine1(): void
    {
        $this->trailerLine1 = [];
    }

    /**
     * Returns Trailer Line 2.
     * Trailer Line 2
     */
    public function getTrailerLine2(): ?string
    {
        if (count($this->trailerLine2) == 0) {
            return null;
        }
        return $this->trailerLine2['value'];
    }

    /**
     * Sets Trailer Line 2.
     * Trailer Line 2
     *
     * @maps trailer_line_2
     */
    public function setTrailerLine2(?string $trailerLine2): void
    {
        $this->trailerLine2['value'] = $trailerLine2;
    }

    /**
     * Unsets Trailer Line 2.
     * Trailer Line 2
     */
    public function unsetTrailerLine2(): void
    {
        $this->trailerLine2 = [];
    }

    /**
     * Returns Trailer Line 3.
     * Trailer Line 3
     */
    public function getTrailerLine3(): ?string
    {
        if (count($this->trailerLine3) == 0) {
            return null;
        }
        return $this->trailerLine3['value'];
    }

    /**
     * Sets Trailer Line 3.
     * Trailer Line 3
     *
     * @maps trailer_line_3
     */
    public function setTrailerLine3(?string $trailerLine3): void
    {
        $this->trailerLine3['value'] = $trailerLine3;
    }

    /**
     * Unsets Trailer Line 3.
     * Trailer Line 3
     */
    public function unsetTrailerLine3(): void
    {
        $this->trailerLine3 = [];
    }

    /**
     * Returns Trailer Line 4.
     * Trailer Line 4
     */
    public function getTrailerLine4(): ?string
    {
        if (count($this->trailerLine4) == 0) {
            return null;
        }
        return $this->trailerLine4['value'];
    }

    /**
     * Sets Trailer Line 4.
     * Trailer Line 4
     *
     * @maps trailer_line_4
     */
    public function setTrailerLine4(?string $trailerLine4): void
    {
        $this->trailerLine4['value'] = $trailerLine4;
    }

    /**
     * Unsets Trailer Line 4.
     * Trailer Line 4
     */
    public function unsetTrailerLine4(): void
    {
        $this->trailerLine4 = [];
    }

    /**
     * Returns Trailer Line 5.
     * Trailer Line 5
     */
    public function getTrailerLine5(): ?string
    {
        if (count($this->trailerLine5) == 0) {
            return null;
        }
        return $this->trailerLine5['value'];
    }

    /**
     * Sets Trailer Line 5.
     * Trailer Line 5
     *
     * @maps trailer_line_5
     */
    public function setTrailerLine5(?string $trailerLine5): void
    {
        $this->trailerLine5['value'] = $trailerLine5;
    }

    /**
     * Unsets Trailer Line 5.
     * Trailer Line 5
     */
    public function unsetTrailerLine5(): void
    {
        $this->trailerLine5 = [];
    }

    /**
     * Returns Default Checkin.
     * Default Checkin
     */
    public function getDefaultCheckin(): ?string
    {
        if (count($this->defaultCheckin) == 0) {
            return null;
        }
        return $this->defaultCheckin['value'];
    }

    /**
     * Sets Default Checkin.
     * Default Checkin
     *
     * @maps default_checkin
     */
    public function setDefaultCheckin(?string $defaultCheckin): void
    {
        $this->defaultCheckin['value'] = $defaultCheckin;
    }

    /**
     * Unsets Default Checkin.
     * Default Checkin
     */
    public function unsetDefaultCheckin(): void
    {
        $this->defaultCheckin = [];
    }

    /**
     * Returns Default Checkout.
     * Default Checkout
     */
    public function getDefaultCheckout(): ?string
    {
        if (count($this->defaultCheckout) == 0) {
            return null;
        }
        return $this->defaultCheckout['value'];
    }

    /**
     * Sets Default Checkout.
     * Default Checkout
     *
     * @maps default_checkout
     */
    public function setDefaultCheckout(?string $defaultCheckout): void
    {
        $this->defaultCheckout['value'] = $defaultCheckout;
    }

    /**
     * Unsets Default Checkout.
     * Default Checkout
     */
    public function unsetDefaultCheckout(): void
    {
        $this->defaultCheckout = [];
    }

    /**
     * Returns Default Room Rate.
     * Default Room Rate
     */
    public function getDefaultRoomRate(): ?int
    {
        if (count($this->defaultRoomRate) == 0) {
            return null;
        }
        return $this->defaultRoomRate['value'];
    }

    /**
     * Sets Default Room Rate.
     * Default Room Rate
     *
     * @maps default_room_rate
     */
    public function setDefaultRoomRate(?int $defaultRoomRate): void
    {
        $this->defaultRoomRate['value'] = $defaultRoomRate;
    }

    /**
     * Unsets Default Room Rate.
     * Default Room Rate
     */
    public function unsetDefaultRoomRate(): void
    {
        $this->defaultRoomRate = [];
    }

    /**
     * Returns Default Room Number.
     * Default Room Number
     */
    public function getDefaultRoomNumber(): ?string
    {
        if (count($this->defaultRoomNumber) == 0) {
            return null;
        }
        return $this->defaultRoomNumber['value'];
    }

    /**
     * Sets Default Room Number.
     * Default Room Number
     *
     * @maps default_room_number
     */
    public function setDefaultRoomNumber(?string $defaultRoomNumber): void
    {
        $this->defaultRoomNumber['value'] = $defaultRoomNumber;
    }

    /**
     * Unsets Default Room Number.
     * Default Room Number
     */
    public function unsetDefaultRoomNumber(): void
    {
        $this->defaultRoomNumber = [];
    }

    /**
     * Returns Debit.
     * Debit
     */
    public function getDebit(): ?bool
    {
        return $this->debit;
    }

    /**
     * Sets Debit.
     * Debit
     *
     * @maps debit
     */
    public function setDebit(?bool $debit): void
    {
        $this->debit = $debit;
    }

    /**
     * Returns Emv.
     * EMV
     */
    public function getEmv(): ?bool
    {
        return $this->emv;
    }

    /**
     * Sets Emv.
     * EMV
     *
     * @maps emv
     */
    public function setEmv(?bool $emv): void
    {
        $this->emv = $emv;
    }

    /**
     * Returns Cashback Enable.
     * Cashback Enable
     */
    public function getCashbackEnable(): ?bool
    {
        return $this->cashbackEnable;
    }

    /**
     * Sets Cashback Enable.
     * Cashback Enable
     *
     * @maps cashback_enable
     */
    public function setCashbackEnable(?bool $cashbackEnable): void
    {
        $this->cashbackEnable = $cashbackEnable;
    }

    /**
     * Returns Print Enable.
     * Print Enable
     */
    public function getPrintEnable(): ?bool
    {
        return $this->printEnable;
    }

    /**
     * Sets Print Enable.
     * Print Enable
     *
     * @maps print_enable
     */
    public function setPrintEnable(?bool $printEnable): void
    {
        $this->printEnable = $printEnable;
    }

    /**
     * Returns Sig Capture Enable.
     * Sig Capture Enable
     */
    public function getSigCaptureEnable(): ?bool
    {
        return $this->sigCaptureEnable;
    }

    /**
     * Sets Sig Capture Enable.
     * Sig Capture Enable
     *
     * @maps sig_capture_enable
     */
    public function setSigCaptureEnable(?bool $sigCaptureEnable): void
    {
        $this->sigCaptureEnable = $sigCaptureEnable;
    }

    /**
     * Returns Is Provisioned.
     * Is Provisioned
     */
    public function getIsProvisioned(): ?bool
    {
        return $this->isProvisioned;
    }

    /**
     * Sets Is Provisioned.
     * Is Provisioned
     *
     * @maps is_provisioned
     */
    public function setIsProvisioned(?bool $isProvisioned): void
    {
        $this->isProvisioned = $isProvisioned;
    }

    /**
     * Returns Tip Enable.
     * Tip Enable
     */
    public function getTipEnable(): ?bool
    {
        return $this->tipEnable;
    }

    /**
     * Sets Tip Enable.
     * Tip Enable
     *
     * @maps tip_enable
     */
    public function setTipEnable(?bool $tipEnable): void
    {
        $this->tipEnable = $tipEnable;
    }

    /**
     * Returns Validated Decryption.
     * Validated Decryption
     */
    public function getValidatedDecryption(): ?bool
    {
        return $this->validatedDecryption;
    }

    /**
     * Sets Validated Decryption.
     * Validated Decryption
     *
     * @maps validated_decryption
     */
    public function setValidatedDecryption(?bool $validatedDecryption): void
    {
        $this->validatedDecryption = $validatedDecryption;
    }

    /**
     * Returns Communication Type.
     * Communication Type
     */
    public function getCommunicationType(): ?string
    {
        if (count($this->communicationType) == 0) {
            return null;
        }
        return $this->communicationType['value'];
    }

    /**
     * Sets Communication Type.
     * Communication Type
     *
     * @maps communication_type
     * @factory \FortisAPILib\Models\CommunicationTypeEnum::checkValue
     */
    public function setCommunicationType(?string $communicationType): void
    {
        $this->communicationType['value'] = $communicationType;
    }

    /**
     * Unsets Communication Type.
     * Communication Type
     */
    public function unsetCommunicationType(): void
    {
        $this->communicationType = [];
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
     * Returns Id.
     * Terminal ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Terminal ID
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
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): ?int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Last Registration Ts.
     * Modified Time Stamp
     */
    public function getLastRegistrationTs(): ?int
    {
        return $this->lastRegistrationTs;
    }

    /**
     * Sets Last Registration Ts.
     * Modified Time Stamp
     *
     * @maps last_registration_ts
     */
    public function setLastRegistrationTs(?int $lastRegistrationTs): void
    {
        $this->lastRegistrationTs = $lastRegistrationTs;
    }

    /**
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Modified User Id.
     * Last User ID that updated the register
     */
    public function getModifiedUserId(): ?string
    {
        return $this->modifiedUserId;
    }

    /**
     * Sets Modified User Id.
     * Last User ID that updated the register
     *
     * @maps modified_user_id
     */
    public function setModifiedUserId(?string $modifiedUserId): void
    {
        $this->modifiedUserId = $modifiedUserId;
    }

    /**
     * Returns Location.
     * Location Information on `expand`
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Sets Location.
     * Location Information on `expand`
     *
     * @maps location
     */
    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * Returns Created User.
     * User Information on `expand`
     */
    public function getCreatedUser(): ?CreatedUser
    {
        return $this->createdUser;
    }

    /**
     * Sets Created User.
     * User Information on `expand`
     *
     * @maps created_user
     */
    public function setCreatedUser(?CreatedUser $createdUser): void
    {
        $this->createdUser = $createdUser;
    }

    /**
     * Returns Terminal Application.
     * Terminal Application Information on `expand`
     */
    public function getTerminalApplication(): ?TerminalApplication
    {
        return $this->terminalApplication;
    }

    /**
     * Sets Terminal Application.
     * Terminal Application Information on `expand`
     *
     * @maps terminal_application
     */
    public function setTerminalApplication(?TerminalApplication $terminalApplication): void
    {
        $this->terminalApplication = $terminalApplication;
    }

    /**
     * Returns Changelogs.
     * Changelog Information on `expand`
     *
     * @return Changelog[]|null
     */
    public function getChangelogs(): ?array
    {
        return $this->changelogs;
    }

    /**
     * Sets Changelogs.
     * Changelog Information on `expand`
     *
     * @maps changelogs
     *
     * @param Changelog[]|null $changelogs
     */
    public function setChangelogs(?array $changelogs): void
    {
        $this->changelogs = $changelogs;
    }

    /**
     * Returns Terminal Routers.
     * Terminal Router Information on `expand`
     *
     * @return TerminalRouter[]|null
     */
    public function getTerminalRouters(): ?array
    {
        return $this->terminalRouters;
    }

    /**
     * Sets Terminal Routers.
     * Terminal Router Information on `expand`
     *
     * @maps terminal_routers
     *
     * @param TerminalRouter[]|null $terminalRouters
     */
    public function setTerminalRouters(?array $terminalRouters): void
    {
        $this->terminalRouters = $terminalRouters;
    }

    /**
     * Returns Has Terminal Routers.
     * Has Terminal Router Information on `expand`
     */
    public function getHasTerminalRouters(): ?bool
    {
        return $this->hasTerminalRouters;
    }

    /**
     * Sets Has Terminal Routers.
     * Has Terminal Router Information on `expand`
     *
     * @maps has_terminal_routers
     */
    public function setHasTerminalRouters(?bool $hasTerminalRouters): void
    {
        $this->hasTerminalRouters = $hasTerminalRouters;
    }

    /**
     * Returns Terminal Cvm.
     * Terminal Cvm Information on `expand`
     */
    public function getTerminalCvm(): ?TerminalCvm
    {
        return $this->terminalCvm;
    }

    /**
     * Sets Terminal Cvm.
     * Terminal Cvm Information on `expand`
     *
     * @maps terminal_cvm
     */
    public function setTerminalCvm(?TerminalCvm $terminalCvm): void
    {
        $this->terminalCvm = $terminalCvm;
    }

    /**
     * Returns Terminal Manufacturer.
     * Terminal Manufacturer Information on `expand`
     */
    public function getTerminalManufacturer(): ?TerminalManufacturer
    {
        return $this->terminalManufacturer;
    }

    /**
     * Sets Terminal Manufacturer.
     * Terminal Manufacturer Information on `expand`
     *
     * @maps terminal_manufacturer
     */
    public function setTerminalManufacturer(?TerminalManufacturer $terminalManufacturer): void
    {
        $this->terminalManufacturer = $terminalManufacturer;
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
            $json['location_id']                    = $this->locationId;
        }
        if (!empty($this->defaultProductTransactionId)) {
            $json['default_product_transaction_id'] = $this->defaultProductTransactionId['value'];
        }
        if (isset($this->terminalApplicationId)) {
            $json['terminal_application_id']        = $this->terminalApplicationId;
        }
        if (!empty($this->terminalCvmId)) {
            $json['terminal_cvm_id']                = $this->terminalCvmId['value'];
        }
        if (isset($this->terminalManufacturerCode)) {
            $json['terminal_manufacturer_code']     =
                TerminalManufacturerCodeEnum::checkValue(
                    $this->terminalManufacturerCode
                );
        }
        if (isset($this->title)) {
            $json['title']                          = $this->title;
        }
        if (!empty($this->macAddress)) {
            $json['mac_address']                    = $this->macAddress['value'];
        }
        if (isset($this->localIpAddress)) {
            $json['local_ip_address']               = $this->localIpAddress;
        }
        if (isset($this->port)) {
            $json['port']                           = $this->port;
        }
        if (isset($this->serialNumber)) {
            $json['serial_number']                  = $this->serialNumber;
        }
        if (isset($this->terminalNumber)) {
            $json['terminal_number']                = $this->terminalNumber;
        }
        if (isset($this->terminalTimeouts)) {
            $json['terminal_timeouts']              = $this->terminalTimeouts;
        }
        if (isset($this->tipPercents)) {
            $json['tip_percents']                   = $this->tipPercents;
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id']                = $this->locationApiId['value'];
        }
        if (!empty($this->terminalApiId)) {
            $json['terminal_api_id']                = $this->terminalApiId['value'];
        }
        if (!empty($this->headerLine1)) {
            $json['header_line_1']                  = $this->headerLine1['value'];
        }
        if (!empty($this->headerLine2)) {
            $json['header_line_2']                  = $this->headerLine2['value'];
        }
        if (!empty($this->headerLine3)) {
            $json['header_line_3']                  = $this->headerLine3['value'];
        }
        if (!empty($this->headerLine4)) {
            $json['header_line_4']                  = $this->headerLine4['value'];
        }
        if (!empty($this->headerLine5)) {
            $json['header_line_5']                  = $this->headerLine5['value'];
        }
        if (!empty($this->trailerLine1)) {
            $json['trailer_line_1']                 = $this->trailerLine1['value'];
        }
        if (!empty($this->trailerLine2)) {
            $json['trailer_line_2']                 = $this->trailerLine2['value'];
        }
        if (!empty($this->trailerLine3)) {
            $json['trailer_line_3']                 = $this->trailerLine3['value'];
        }
        if (!empty($this->trailerLine4)) {
            $json['trailer_line_4']                 = $this->trailerLine4['value'];
        }
        if (!empty($this->trailerLine5)) {
            $json['trailer_line_5']                 = $this->trailerLine5['value'];
        }
        if (!empty($this->defaultCheckin)) {
            $json['default_checkin']                = $this->defaultCheckin['value'];
        }
        if (!empty($this->defaultCheckout)) {
            $json['default_checkout']               = $this->defaultCheckout['value'];
        }
        if (!empty($this->defaultRoomRate)) {
            $json['default_room_rate']              = $this->defaultRoomRate['value'];
        }
        if (!empty($this->defaultRoomNumber)) {
            $json['default_room_number']            = $this->defaultRoomNumber['value'];
        }
        if (isset($this->debit)) {
            $json['debit']                          = $this->debit;
        }
        if (isset($this->emv)) {
            $json['emv']                            = $this->emv;
        }
        if (isset($this->cashbackEnable)) {
            $json['cashback_enable']                = $this->cashbackEnable;
        }
        if (isset($this->printEnable)) {
            $json['print_enable']                   = $this->printEnable;
        }
        if (isset($this->sigCaptureEnable)) {
            $json['sig_capture_enable']             = $this->sigCaptureEnable;
        }
        if (isset($this->isProvisioned)) {
            $json['is_provisioned']                 = $this->isProvisioned;
        }
        if (isset($this->tipEnable)) {
            $json['tip_enable']                     = $this->tipEnable;
        }
        if (isset($this->validatedDecryption)) {
            $json['validated_decryption']           = $this->validatedDecryption;
        }
        if (!empty($this->communicationType)) {
            $json['communication_type']             =
                CommunicationTypeEnum::checkValue(
                    $this->communicationType['value']
                );
        }
        if (isset($this->active)) {
            $json['active']                         = $this->active;
        }
        if (isset($this->id)) {
            $json['id']                             = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']                     = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']                    = $this->modifiedTs;
        }
        if (isset($this->lastRegistrationTs)) {
            $json['last_registration_ts']           = $this->lastRegistrationTs;
        }
        if (isset($this->createdUserId)) {
            $json['created_user_id']                = $this->createdUserId;
        }
        if (isset($this->modifiedUserId)) {
            $json['modified_user_id']               = $this->modifiedUserId;
        }
        if (isset($this->location)) {
            $json['location']                       = $this->location;
        }
        if (isset($this->createdUser)) {
            $json['created_user']                   = $this->createdUser;
        }
        if (isset($this->terminalApplication)) {
            $json['terminal_application']           = $this->terminalApplication;
        }
        if (isset($this->changelogs)) {
            $json['changelogs']                     = $this->changelogs;
        }
        if (isset($this->terminalRouters)) {
            $json['terminal_routers']               = $this->terminalRouters;
        }
        if (isset($this->hasTerminalRouters)) {
            $json['has_terminal_routers']           = $this->hasTerminalRouters;
        }
        if (isset($this->terminalCvm)) {
            $json['terminal_cvm']                   = $this->terminalCvm;
        }
        if (isset($this->terminalManufacturer)) {
            $json['terminal_manufacturer']          = $this->terminalManufacturer;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
