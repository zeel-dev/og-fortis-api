<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Field implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $field;

    /**
     * @var string|null
     */
    private $order;

    /**
     * Returns Field.
     * Field name used on the sort
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * Sets Field.
     * Field name used on the sort
     *
     * @maps field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * Returns Order.
     * Sort direction ASC/DESC
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * Sets Order.
     * Sort direction ASC/DESC
     *
     * @maps order
     * @factory \FortisAPILib\Models\OrderEnum::checkValue
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
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
        if (isset($this->field)) {
            $json['field'] = $this->field;
        }
        if (isset($this->order)) {
            $json['order'] = OrderEnum::checkValue($this->order);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
