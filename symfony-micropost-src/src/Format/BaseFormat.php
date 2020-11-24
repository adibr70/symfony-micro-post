<?php

namespace App\Format;

abstract class BaseFormat
{
    protected $data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public abstract function convert(): string ;

    public function __toString(): string
    {
        return $this->convert();
    }

}