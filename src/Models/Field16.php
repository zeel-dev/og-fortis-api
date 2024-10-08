<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Field16 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $label;

    /**
     * @var string|null
     */
    private $fieldType;

    /**
     * @var string[]|null
     */
    private $position;

    /**
     * @var bool|null
     */
    private $required;

    /**
     * @var bool|null
     */
    private $readonly;

    /**
     * @var bool|null
     */
    private $visible;

    /**
     * @var array
     */
    private $value = [];

    /**
     * Returns Id.
     * id
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * id
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Label.
     * Label
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     * Label
     *
     * @maps label
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns Field Type.
     * Field Type
     */
    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }

    /**
     * Sets Field Type.
     * Field Type
     *
     * @maps field_type
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * Returns Position.
     * Position
     *
     * @return string[]|null
     */
    public function getPosition(): ?array
    {
        return $this->position;
    }

    /**
     * Sets Position.
     * Position
     *
     * @maps position
     *
     * @param string[]|null $position
     */
    public function setPosition(?array $position): void
    {
        $this->position = $position;
    }

    /**
     * Returns Required.
     * Required
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Sets Required.
     * Required
     *
     * @maps required
     */
    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }

    /**
     * Returns Readonly.
     * Read Only
     */
    public function getReadonly(): ?bool
    {
        return $this->readonly;
    }

    /**
     * Sets Readonly.
     * Read Only
     *
     * @maps readonly
     */
    public function setReadonly(?bool $readonly): void
    {
        $this->readonly = $readonly;
    }

    /**
     * Returns Visible.
     * Visible
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    /**
     * Sets Visible.
     * Visible
     *
     * @maps visible
     */
    public function setVisible(?bool $visible): void
    {
        $this->visible = $visible;
    }

    /**
     * Returns Value.
     * Value
     */
    public function getValue(): ?string
    {
        if (count($this->value) == 0) {
            return null;
        }
        return $this->value['value'];
    }

    /**
     * Sets Value.
     * Value
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value['value'] = $value;
    }

    /**
     * Unsets Value.
     * Value
     */
    public function unsetValue(): void
    {
        $this->value = [];
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
        if (isset($this->id)) {
            $json['id']         = $this->id;
        }
        if (isset($this->label)) {
            $json['label']      = $this->label;
        }
        if (isset($this->fieldType)) {
            $json['field_type'] = $this->fieldType;
        }
        if (isset($this->position)) {
            $json['position']   = $this->position;
        }
        if (isset($this->required)) {
            $json['required']   = $this->required;
        }
        if (isset($this->readonly)) {
            $json['readonly']   = $this->readonly;
        }
        if (isset($this->visible)) {
            $json['visible']    = $this->visible;
        }
        if (!empty($this->value)) {
            $json['value']      = $this->value['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
