<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Level3Data;
use FortisAPILib\Models\TransactionLevel3;

/**
 * Builder for model TransactionLevel3
 *
 * @see TransactionLevel3
 */
class TransactionLevel3Builder
{
    /**
     * @var TransactionLevel3
     */
    private $instance;

    private function __construct(TransactionLevel3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction level 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionLevel3());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets transaction id field.
     */
    public function transactionId(?string $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Sets level 3 data field.
     */
    public function level3Data(?Level3Data $value): self
    {
        $this->instance->setLevel3Data($value);
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
     * Initializes a new transaction level 3 object.
     */
    public function build(): TransactionLevel3
    {
        return CoreHelper::clone($this->instance);
    }
}
