<?php
class Transport
{

    private $brand;
    private $model;

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

    public function infoTransport()
    {
        echo "Marka" . $this->brand;
        echo "Model" . $this->model;
    }
}

class GroundVehicles extends Transport
{
    private $plateNum;
    private $tyre;

    public function __construct($plateNum, $tyre)
    {
        $this->plateNum = $plateNum;
        $this->tyre = $tyre;
    }

    public function infoGroundVehicles()
    {
        echo parent::infoTransport();
        echo "Plaka No" . $this->plateNum;
        echo "Tekerlek" . $this->tyre;
    }
}
echo "mert";
$car = new GroundVehicles('Mercedes', 'C180', '45 araba 45', '4');
$car->infoGroundVehicles();
