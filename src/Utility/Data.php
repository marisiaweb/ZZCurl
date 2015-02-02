<?php namespace Utility;

class Data
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;

    }

    public function getData()
    {
        return $this->data;
    }
}
