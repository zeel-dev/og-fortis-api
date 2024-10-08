<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data19;
use FortisAPILib\Models\ResponseTerminal;

/**
 * Builder for model ResponseTerminal
 *
 * @see ResponseTerminal
 */
class ResponseTerminalBuilder
{
    /**
     * @var ResponseTerminal
     */
    private $instance;

    private function __construct(ResponseTerminal $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response terminal Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseTerminal());
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
    public function data(?Data19 $value): self
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
     * Initializes a new response terminal object.
     */
    public function build(): ResponseTerminal
    {
        return CoreHelper::clone($this->instance);
    }
}
