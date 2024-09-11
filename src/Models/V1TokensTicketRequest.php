<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1TokensTicketRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $accountHolderName = [];

    /**
     * @var array
     */
    private $accountVaultApiId = [];

    /**
     * @var array
     */
    private $tokenApiId = [];

    /**
     * @var array
     */
    private $accountvaultC1 = [];

    /**
     * @var array
     */
    private $accountvaultC2 = [];

    /**
     * @var array
     */
    private $accountvaultC3 = [];

    /**
     * @var array
     */
    private $tokenC1 = [];

    /**
     * @var array
     */
    private $tokenC2 = [];

    /**
     * @var array
     */
    private $tokenC3 = [];

    /**
     * @var array
     */
    private $achSecCode = [];

    /**
     * @var BillingAddress|null
     */
    private $billingAddress;

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $customerId = [];

    /**
     * @var IdentityVerification2|null
     */
    private $identityVerification;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @var array
     */
    private $previousAccountVaultApiId = [];

    /**
     * @var array
     */
    private $previousTokenApiId = [];

    /**
     * @var array
     */
    private $previousAccountVaultId = [];

    /**
     * @var array
     */
    private $previousTokenId = [];

    /**
     * @var array
     */
    private $previousTransactionId = [];

    /**
     * @var array
     */
    private $accountNumber = [];

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
    private $title = [];

    /**
     * @var Joi4|null
     */
    private $joi;

    /**
     * @var string
     */
    private $ticket;

    /**
     * @param string $locationId
     * @param string $ticket
     */
    public function __construct(string $locationId, string $ticket)
    {
        $this->locationId = $locationId;
        $this->ticket = $ticket;
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
     * Returns Account Vault Api Id.
     * This field can be used to correlate Tokens in our system to data within an outside software
     * integration
     */
    public function getAccountVaultApiId(): ?string
    {
        if (count($this->accountVaultApiId) == 0) {
            return null;
        }
        return $this->accountVaultApiId['value'];
    }

    /**
     * Sets Account Vault Api Id.
     * This field can be used to correlate Tokens in our system to data within an outside software
     * integration
     *
     * @maps account_vault_api_id
     */
    public function setAccountVaultApiId(?string $accountVaultApiId): void
    {
        $this->accountVaultApiId['value'] = $accountVaultApiId;
    }

    /**
     * Unsets Account Vault Api Id.
     * This field can be used to correlate Tokens in our system to data within an outside software
     * integration
     */
    public function unsetAccountVaultApiId(): void
    {
        $this->accountVaultApiId = [];
    }

    /**
     * Returns Token Api Id.
     * This field can be used to correlate Tokens in our system to data within an outside software
     * integration
     */
    public function getTokenApiId(): ?string
    {
        if (count($this->tokenApiId) == 0) {
            return null;
        }
        return $this->tokenApiId['value'];
    }

    /**
     * Sets Token Api Id.
     * This field can be used to correlate Tokens in our system to data within an outside software
     * integration
     *
     * @maps token_api_id
     */
    public function setTokenApiId(?string $tokenApiId): void
    {
        $this->tokenApiId['value'] = $tokenApiId;
    }

    /**
     * Unsets Token Api Id.
     * This field can be used to correlate Tokens in our system to data within an outside software
     * integration
     */
    public function unsetTokenApiId(): void
    {
        $this->tokenApiId = [];
    }

    /**
     * Returns Accountvault C1.
     * DEPRECATED (Use token_c1 instead)
     */
    public function getAccountvaultC1(): ?string
    {
        if (count($this->accountvaultC1) == 0) {
            return null;
        }
        return $this->accountvaultC1['value'];
    }

    /**
     * Sets Accountvault C1.
     * DEPRECATED (Use token_c1 instead)
     *
     * @maps accountvault_c1
     */
    public function setAccountvaultC1(?string $accountvaultC1): void
    {
        $this->accountvaultC1['value'] = $accountvaultC1;
    }

    /**
     * Unsets Accountvault C1.
     * DEPRECATED (Use token_c1 instead)
     */
    public function unsetAccountvaultC1(): void
    {
        $this->accountvaultC1 = [];
    }

    /**
     * Returns Accountvault C2.
     * DEPRECATED (Use token_c2 instead)
     */
    public function getAccountvaultC2(): ?string
    {
        if (count($this->accountvaultC2) == 0) {
            return null;
        }
        return $this->accountvaultC2['value'];
    }

    /**
     * Sets Accountvault C2.
     * DEPRECATED (Use token_c2 instead)
     *
     * @maps accountvault_c2
     */
    public function setAccountvaultC2(?string $accountvaultC2): void
    {
        $this->accountvaultC2['value'] = $accountvaultC2;
    }

    /**
     * Unsets Accountvault C2.
     * DEPRECATED (Use token_c2 instead)
     */
    public function unsetAccountvaultC2(): void
    {
        $this->accountvaultC2 = [];
    }

    /**
     * Returns Accountvault C3.
     * DEPRECATED (Use token_c3 instead)
     */
    public function getAccountvaultC3(): ?string
    {
        if (count($this->accountvaultC3) == 0) {
            return null;
        }
        return $this->accountvaultC3['value'];
    }

    /**
     * Sets Accountvault C3.
     * DEPRECATED (Use token_c3 instead)
     *
     * @maps accountvault_c3
     */
    public function setAccountvaultC3(?string $accountvaultC3): void
    {
        $this->accountvaultC3['value'] = $accountvaultC3;
    }

    /**
     * Unsets Accountvault C3.
     * DEPRECATED (Use token_c3 instead)
     */
    public function unsetAccountvaultC3(): void
    {
        $this->accountvaultC3 = [];
    }

    /**
     * Returns Token C1.
     * Custom field 1 for API users to store custom data
     */
    public function getTokenC1(): ?string
    {
        if (count($this->tokenC1) == 0) {
            return null;
        }
        return $this->tokenC1['value'];
    }

    /**
     * Sets Token C1.
     * Custom field 1 for API users to store custom data
     *
     * @maps token_c1
     */
    public function setTokenC1(?string $tokenC1): void
    {
        $this->tokenC1['value'] = $tokenC1;
    }

    /**
     * Unsets Token C1.
     * Custom field 1 for API users to store custom data
     */
    public function unsetTokenC1(): void
    {
        $this->tokenC1 = [];
    }

    /**
     * Returns Token C2.
     * Custom field 2 for API users to store custom data
     */
    public function getTokenC2(): ?string
    {
        if (count($this->tokenC2) == 0) {
            return null;
        }
        return $this->tokenC2['value'];
    }

    /**
     * Sets Token C2.
     * Custom field 2 for API users to store custom data
     *
     * @maps token_c2
     */
    public function setTokenC2(?string $tokenC2): void
    {
        $this->tokenC2['value'] = $tokenC2;
    }

    /**
     * Unsets Token C2.
     * Custom field 2 for API users to store custom data
     */
    public function unsetTokenC2(): void
    {
        $this->tokenC2 = [];
    }

    /**
     * Returns Token C3.
     * Custom field 3 for API users to store custom data
     */
    public function getTokenC3(): ?string
    {
        if (count($this->tokenC3) == 0) {
            return null;
        }
        return $this->tokenC3['value'];
    }

    /**
     * Sets Token C3.
     * Custom field 3 for API users to store custom data
     *
     * @maps token_c3
     */
    public function setTokenC3(?string $tokenC3): void
    {
        $this->tokenC3['value'] = $tokenC3;
    }

    /**
     * Unsets Token C3.
     * Custom field 3 for API users to store custom data
     */
    public function unsetTokenC3(): void
    {
        $this->tokenC3 = [];
    }

    /**
     * Returns Ach Sec Code.
     * SEC code for the account
     */
    public function getAchSecCode(): ?string
    {
        if (count($this->achSecCode) == 0) {
            return null;
        }
        return $this->achSecCode['value'];
    }

    /**
     * Sets Ach Sec Code.
     * SEC code for the account
     *
     * @maps ach_sec_code
     * @factory \FortisAPILib\Models\AchSecCode3Enum::checkValue
     */
    public function setAchSecCode(?string $achSecCode): void
    {
        $this->achSecCode['value'] = $achSecCode;
    }

    /**
     * Unsets Ach Sec Code.
     * SEC code for the account
     */
    public function unsetAchSecCode(): void
    {
        $this->achSecCode = [];
    }

    /**
     * Returns Billing Address.
     * Billing Address Object
     */
    public function getBillingAddress(): ?BillingAddress
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Billing Address Object
     *
     * @maps billing_address
     */
    public function setBillingAddress(?BillingAddress $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Contact Id.
     * Used to associate the Token with a Contact.
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
     * Used to associate the Token with a Contact.
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Used to associate the Token with a Contact.
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Customer Id.
     * Used to store a customer identification number.
     */
    public function getCustomerId(): ?string
    {
        if (count($this->customerId) == 0) {
            return null;
        }
        return $this->customerId['value'];
    }

    /**
     * Sets Customer Id.
     * Used to store a customer identification number.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId['value'] = $customerId;
    }

    /**
     * Unsets Customer Id.
     * Used to store a customer identification number.
     */
    public function unsetCustomerId(): void
    {
        $this->customerId = [];
    }

    /**
     * Returns Identity Verification.
     * Identity verification
     */
    public function getIdentityVerification(): ?IdentityVerification2
    {
        return $this->identityVerification;
    }

    /**
     * Sets Identity Verification.
     * Identity verification
     *
     * @maps identity_verification
     */
    public function setIdentityVerification(?IdentityVerification2 $identityVerification): void
    {
        $this->identityVerification = $identityVerification;
    }

    /**
     * Returns Location Id.
     * A valid Location Id associated with the Contact for this Token
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * A valid Location Id associated with the Contact for this Token
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Previous Account Vault Api Id.
     * Can be used to pull payment info from a previous token api id.
     */
    public function getPreviousAccountVaultApiId(): ?string
    {
        if (count($this->previousAccountVaultApiId) == 0) {
            return null;
        }
        return $this->previousAccountVaultApiId['value'];
    }

    /**
     * Sets Previous Account Vault Api Id.
     * Can be used to pull payment info from a previous token api id.
     *
     * @maps previous_account_vault_api_id
     */
    public function setPreviousAccountVaultApiId(?string $previousAccountVaultApiId): void
    {
        $this->previousAccountVaultApiId['value'] = $previousAccountVaultApiId;
    }

    /**
     * Unsets Previous Account Vault Api Id.
     * Can be used to pull payment info from a previous token api id.
     */
    public function unsetPreviousAccountVaultApiId(): void
    {
        $this->previousAccountVaultApiId = [];
    }

    /**
     * Returns Previous Token Api Id.
     * Can be used to pull payment info from a previous token api id.
     */
    public function getPreviousTokenApiId(): ?string
    {
        if (count($this->previousTokenApiId) == 0) {
            return null;
        }
        return $this->previousTokenApiId['value'];
    }

    /**
     * Sets Previous Token Api Id.
     * Can be used to pull payment info from a previous token api id.
     *
     * @maps previous_token_api_id
     */
    public function setPreviousTokenApiId(?string $previousTokenApiId): void
    {
        $this->previousTokenApiId['value'] = $previousTokenApiId;
    }

    /**
     * Unsets Previous Token Api Id.
     * Can be used to pull payment info from a previous token api id.
     */
    public function unsetPreviousTokenApiId(): void
    {
        $this->previousTokenApiId = [];
    }

    /**
     * Returns Previous Account Vault Id.
     * Can be used to pull payment info from a previous token.
     */
    public function getPreviousAccountVaultId(): ?string
    {
        if (count($this->previousAccountVaultId) == 0) {
            return null;
        }
        return $this->previousAccountVaultId['value'];
    }

    /**
     * Sets Previous Account Vault Id.
     * Can be used to pull payment info from a previous token.
     *
     * @maps previous_account_vault_id
     */
    public function setPreviousAccountVaultId(?string $previousAccountVaultId): void
    {
        $this->previousAccountVaultId['value'] = $previousAccountVaultId;
    }

    /**
     * Unsets Previous Account Vault Id.
     * Can be used to pull payment info from a previous token.
     */
    public function unsetPreviousAccountVaultId(): void
    {
        $this->previousAccountVaultId = [];
    }

    /**
     * Returns Previous Token Id.
     * Can be used to pull payment info from a previous token.
     */
    public function getPreviousTokenId(): ?string
    {
        if (count($this->previousTokenId) == 0) {
            return null;
        }
        return $this->previousTokenId['value'];
    }

    /**
     * Sets Previous Token Id.
     * Can be used to pull payment info from a previous token.
     *
     * @maps previous_token_id
     */
    public function setPreviousTokenId(?string $previousTokenId): void
    {
        $this->previousTokenId['value'] = $previousTokenId;
    }

    /**
     * Unsets Previous Token Id.
     * Can be used to pull payment info from a previous token.
     */
    public function unsetPreviousTokenId(): void
    {
        $this->previousTokenId = [];
    }

    /**
     * Returns Previous Transaction Id.
     * Can be used to pull payment info from a previous transaction.
     */
    public function getPreviousTransactionId(): ?string
    {
        if (count($this->previousTransactionId) == 0) {
            return null;
        }
        return $this->previousTransactionId['value'];
    }

    /**
     * Sets Previous Transaction Id.
     * Can be used to pull payment info from a previous transaction.
     *
     * @maps previous_transaction_id
     */
    public function setPreviousTransactionId(?string $previousTransactionId): void
    {
        $this->previousTransactionId['value'] = $previousTransactionId;
    }

    /**
     * Unsets Previous Transaction Id.
     * Can be used to pull payment info from a previous transaction.
     */
    public function unsetPreviousTransactionId(): void
    {
        $this->previousTransactionId = [];
    }

    /**
     * Returns Account Number.
     * Account number
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Account number
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account number
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Terms Agree.
     * Terms agreement.
     */
    public function getTermsAgree(): ?bool
    {
        return $this->termsAgree;
    }

    /**
     * Sets Terms Agree.
     * Terms agreement.
     *
     * @maps terms_agree
     */
    public function setTermsAgree(?bool $termsAgree): void
    {
        $this->termsAgree = $termsAgree;
    }

    /**
     * Returns Terms Agree Ip.
     * The ip address of the client that agreed to terms.
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
     * The ip address of the client that agreed to terms.
     *
     * @maps terms_agree_ip
     */
    public function setTermsAgreeIp(?string $termsAgreeIp): void
    {
        $this->termsAgreeIp['value'] = $termsAgreeIp;
    }

    /**
     * Unsets Terms Agree Ip.
     * The ip address of the client that agreed to terms.
     */
    public function unsetTermsAgreeIp(): void
    {
        $this->termsAgreeIp = [];
    }

    /**
     * Returns Title.
     * Used to describe the Token for easier identification within our UI.
     */
    public function getTitle(): ?string
    {
        if (count($this->title) == 0) {
            return null;
        }
        return $this->title['value'];
    }

    /**
     * Sets Title.
     * Used to describe the Token for easier identification within our UI.
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title['value'] = $title;
    }

    /**
     * Unsets Title.
     * Used to describe the Token for easier identification within our UI.
     */
    public function unsetTitle(): void
    {
        $this->title = [];
    }

    /**
     * Returns Joi.
     */
    public function getJoi(): ?Joi4
    {
        return $this->joi;
    }

    /**
     * Sets Joi.
     *
     * @maps _joi
     */
    public function setJoi(?Joi4 $joi): void
    {
        $this->joi = $joi;
    }

    /**
     * Returns Ticket.
     * A valid ticket that was created to store the token.
     */
    public function getTicket(): string
    {
        return $this->ticket;
    }

    /**
     * Sets Ticket.
     * A valid ticket that was created to store the token.
     *
     * @required
     * @maps ticket
     */
    public function setTicket(string $ticket): void
    {
        $this->ticket = $ticket;
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
            $json['account_holder_name']           = $this->accountHolderName['value'];
        }
        if (!empty($this->accountVaultApiId)) {
            $json['account_vault_api_id']          = $this->accountVaultApiId['value'];
        }
        if (!empty($this->tokenApiId)) {
            $json['token_api_id']                  = $this->tokenApiId['value'];
        }
        if (!empty($this->accountvaultC1)) {
            $json['accountvault_c1']               = $this->accountvaultC1['value'];
        }
        if (!empty($this->accountvaultC2)) {
            $json['accountvault_c2']               = $this->accountvaultC2['value'];
        }
        if (!empty($this->accountvaultC3)) {
            $json['accountvault_c3']               = $this->accountvaultC3['value'];
        }
        if (!empty($this->tokenC1)) {
            $json['token_c1']                      = $this->tokenC1['value'];
        }
        if (!empty($this->tokenC2)) {
            $json['token_c2']                      = $this->tokenC2['value'];
        }
        if (!empty($this->tokenC3)) {
            $json['token_c3']                      = $this->tokenC3['value'];
        }
        if (!empty($this->achSecCode)) {
            $json['ach_sec_code']                  = AchSecCode3Enum::checkValue($this->achSecCode['value']);
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']               = $this->billingAddress;
        }
        if (!empty($this->contactId)) {
            $json['contact_id']                    = $this->contactId['value'];
        }
        if (!empty($this->customerId)) {
            $json['customer_id']                   = $this->customerId['value'];
        }
        if (isset($this->identityVerification)) {
            $json['identity_verification']         = $this->identityVerification;
        }
        $json['location_id']                       = $this->locationId;
        if (!empty($this->previousAccountVaultApiId)) {
            $json['previous_account_vault_api_id'] = $this->previousAccountVaultApiId['value'];
        }
        if (!empty($this->previousTokenApiId)) {
            $json['previous_token_api_id']         = $this->previousTokenApiId['value'];
        }
        if (!empty($this->previousAccountVaultId)) {
            $json['previous_account_vault_id']     = $this->previousAccountVaultId['value'];
        }
        if (!empty($this->previousTokenId)) {
            $json['previous_token_id']             = $this->previousTokenId['value'];
        }
        if (!empty($this->previousTransactionId)) {
            $json['previous_transaction_id']       = $this->previousTransactionId['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['account_number']                = $this->accountNumber['value'];
        }
        if (isset($this->termsAgree)) {
            $json['terms_agree']                   = $this->termsAgree;
        }
        if (!empty($this->termsAgreeIp)) {
            $json['terms_agree_ip']                = $this->termsAgreeIp['value'];
        }
        if (!empty($this->title)) {
            $json['title']                         = $this->title['value'];
        }
        if (isset($this->joi)) {
            $json['_joi']                          = $this->joi;
        }
        $json['ticket']                            = $this->ticket;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
