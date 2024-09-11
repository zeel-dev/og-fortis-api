<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress;
use FortisAPILib\Models\IdentityVerification2;
use FortisAPILib\Models\Joi16;
use FortisAPILib\Models\V1TokensAchRequest;

/**
 * Builder for model V1TokensAchRequest
 *
 * @see V1TokensAchRequest
 */
class V1TokensAchRequestBuilder
{
    /**
     * @var V1TokensAchRequest
     */
    private $instance;

    private function __construct(V1TokensAchRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v1 tokens ach request Builder object.
     */
    public static function init(string $locationId): self
    {
        return new self(new V1TokensAchRequest($locationId));
    }

    /**
     * Sets account holder name field.
     */
    public function accountHolderName(?string $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Unsets account holder name field.
     */
    public function unsetAccountHolderName(): self
    {
        $this->instance->unsetAccountHolderName();
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets account vault api id field.
     */
    public function accountVaultApiId(?string $value): self
    {
        $this->instance->setAccountVaultApiId($value);
        return $this;
    }

    /**
     * Unsets account vault api id field.
     */
    public function unsetAccountVaultApiId(): self
    {
        $this->instance->unsetAccountVaultApiId();
        return $this;
    }

    /**
     * Sets token api id field.
     */
    public function tokenApiId(?string $value): self
    {
        $this->instance->setTokenApiId($value);
        return $this;
    }

    /**
     * Unsets token api id field.
     */
    public function unsetTokenApiId(): self
    {
        $this->instance->unsetTokenApiId();
        return $this;
    }

    /**
     * Sets accountvault c 1 field.
     */
    public function accountvaultC1(?string $value): self
    {
        $this->instance->setAccountvaultC1($value);
        return $this;
    }

    /**
     * Unsets accountvault c 1 field.
     */
    public function unsetAccountvaultC1(): self
    {
        $this->instance->unsetAccountvaultC1();
        return $this;
    }

    /**
     * Sets accountvault c 2 field.
     */
    public function accountvaultC2(?string $value): self
    {
        $this->instance->setAccountvaultC2($value);
        return $this;
    }

    /**
     * Unsets accountvault c 2 field.
     */
    public function unsetAccountvaultC2(): self
    {
        $this->instance->unsetAccountvaultC2();
        return $this;
    }

    /**
     * Sets accountvault c 3 field.
     */
    public function accountvaultC3(?string $value): self
    {
        $this->instance->setAccountvaultC3($value);
        return $this;
    }

    /**
     * Unsets accountvault c 3 field.
     */
    public function unsetAccountvaultC3(): self
    {
        $this->instance->unsetAccountvaultC3();
        return $this;
    }

    /**
     * Sets token c 1 field.
     */
    public function tokenC1(?string $value): self
    {
        $this->instance->setTokenC1($value);
        return $this;
    }

    /**
     * Unsets token c 1 field.
     */
    public function unsetTokenC1(): self
    {
        $this->instance->unsetTokenC1();
        return $this;
    }

    /**
     * Sets token c 2 field.
     */
    public function tokenC2(?string $value): self
    {
        $this->instance->setTokenC2($value);
        return $this;
    }

    /**
     * Unsets token c 2 field.
     */
    public function unsetTokenC2(): self
    {
        $this->instance->unsetTokenC2();
        return $this;
    }

    /**
     * Sets token c 3 field.
     */
    public function tokenC3(?string $value): self
    {
        $this->instance->setTokenC3($value);
        return $this;
    }

    /**
     * Unsets token c 3 field.
     */
    public function unsetTokenC3(): self
    {
        $this->instance->unsetTokenC3();
        return $this;
    }

    /**
     * Sets ach sec code field.
     */
    public function achSecCode(?string $value): self
    {
        $this->instance->setAchSecCode($value);
        return $this;
    }

    /**
     * Unsets ach sec code field.
     */
    public function unsetAchSecCode(): self
    {
        $this->instance->unsetAchSecCode();
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?BillingAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets contact id field.
     */
    public function contactId(?string $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Unsets contact id field.
     */
    public function unsetContactId(): self
    {
        $this->instance->unsetContactId();
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Unsets customer id field.
     */
    public function unsetCustomerId(): self
    {
        $this->instance->unsetCustomerId();
        return $this;
    }

    /**
     * Sets identity verification field.
     */
    public function identityVerification(?IdentityVerification2 $value): self
    {
        $this->instance->setIdentityVerification($value);
        return $this;
    }

    /**
     * Sets previous account vault api id field.
     */
    public function previousAccountVaultApiId(?string $value): self
    {
        $this->instance->setPreviousAccountVaultApiId($value);
        return $this;
    }

    /**
     * Unsets previous account vault api id field.
     */
    public function unsetPreviousAccountVaultApiId(): self
    {
        $this->instance->unsetPreviousAccountVaultApiId();
        return $this;
    }

    /**
     * Sets previous token api id field.
     */
    public function previousTokenApiId(?string $value): self
    {
        $this->instance->setPreviousTokenApiId($value);
        return $this;
    }

    /**
     * Unsets previous token api id field.
     */
    public function unsetPreviousTokenApiId(): self
    {
        $this->instance->unsetPreviousTokenApiId();
        return $this;
    }

    /**
     * Sets previous account vault id field.
     */
    public function previousAccountVaultId(?string $value): self
    {
        $this->instance->setPreviousAccountVaultId($value);
        return $this;
    }

    /**
     * Unsets previous account vault id field.
     */
    public function unsetPreviousAccountVaultId(): self
    {
        $this->instance->unsetPreviousAccountVaultId();
        return $this;
    }

    /**
     * Sets previous token id field.
     */
    public function previousTokenId(?string $value): self
    {
        $this->instance->setPreviousTokenId($value);
        return $this;
    }

    /**
     * Unsets previous token id field.
     */
    public function unsetPreviousTokenId(): self
    {
        $this->instance->unsetPreviousTokenId();
        return $this;
    }

    /**
     * Sets previous transaction id field.
     */
    public function previousTransactionId(?string $value): self
    {
        $this->instance->setPreviousTransactionId($value);
        return $this;
    }

    /**
     * Unsets previous transaction id field.
     */
    public function unsetPreviousTransactionId(): self
    {
        $this->instance->unsetPreviousTransactionId();
        return $this;
    }

    /**
     * Sets terms agree field.
     */
    public function termsAgree(?bool $value): self
    {
        $this->instance->setTermsAgree($value);
        return $this;
    }

    /**
     * Sets terms agree ip field.
     */
    public function termsAgreeIp(?string $value): self
    {
        $this->instance->setTermsAgreeIp($value);
        return $this;
    }

    /**
     * Unsets terms agree ip field.
     */
    public function unsetTermsAgreeIp(): self
    {
        $this->instance->unsetTermsAgreeIp();
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Unsets title field.
     */
    public function unsetTitle(): self
    {
        $this->instance->unsetTitle();
        return $this;
    }

    /**
     * Sets joi field.
     */
    public function joi(?Joi16 $value): self
    {
        $this->instance->setJoi($value);
        return $this;
    }

    /**
     * Sets account type field.
     */
    public function accountType(?string $value): self
    {
        $this->instance->setAccountType($value);
        return $this;
    }

    /**
     * Unsets account type field.
     */
    public function unsetAccountType(): self
    {
        $this->instance->unsetAccountType();
        return $this;
    }

    /**
     * Sets is company field.
     */
    public function isCompany(?bool $value): self
    {
        $this->instance->setIsCompany($value);
        return $this;
    }

    /**
     * Sets routing number field.
     */
    public function routingNumber(?string $value): self
    {
        $this->instance->setRoutingNumber($value);
        return $this;
    }

    /**
     * Unsets routing number field.
     */
    public function unsetRoutingNumber(): self
    {
        $this->instance->unsetRoutingNumber();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new v1 tokens ach request object.
     */
    public function build(): V1TokensAchRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
