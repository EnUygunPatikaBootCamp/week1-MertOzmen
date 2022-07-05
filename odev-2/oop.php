<?php
class Transport
{
    private $model;
    private $brand;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    protected function get_brand()
    {
        return $this->brand;
    }

    protected function get_model()
    {
        return $this->model;
    }
}

interface Method
{

    public function model();
    public function brand();
}
