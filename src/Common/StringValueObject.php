<?php

namespace AntPack\DataTypes\Common;

abstract class StringValueObject
{

    private $value;

    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value();
    }

    protected function setValue(string $value){
        $this->value = $value;
    }
}
