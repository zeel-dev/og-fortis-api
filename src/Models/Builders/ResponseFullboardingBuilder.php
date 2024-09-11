<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data9;
use FortisAPILib\Models\ResponseFullboarding;

/**
 * Builder for model ResponseFullboarding
 *
 * @see ResponseFullboarding
 */
class ResponseFullboardingBuilder
{
    /**
     * @var ResponseFullboarding
     */
    private $instance;

    private function __construct(ResponseFullboarding $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response fullboarding Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseFullboarding());
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
    public function data(?Data9 $value): self
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
     * Initializes a new response fullboarding object.
     */
    public function build(): ResponseFullboarding
    {
        return CoreHelper::clone($this->instance);
    }
}
