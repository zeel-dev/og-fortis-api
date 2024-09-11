<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data21;
use FortisAPILib\Models\ResponseToken;

/**
 * Builder for model ResponseToken
 *
 * @see ResponseToken
 */
class ResponseTokenBuilder
{
    /**
     * @var ResponseToken
     */
    private $instance;

    private function __construct(ResponseToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response token Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseToken());
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets data field.
     */
    public function data(?Data21 $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new response token object.
     */
    public function build(): ResponseToken
    {
        return CoreHelper::clone($this->instance);
    }
}
