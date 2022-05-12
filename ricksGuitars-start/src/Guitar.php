<?php
namespace Wouerner\RicksGuitars;

final class Guitar
{
    private string $serialNumber;
    private string $builder;
    private string $model;
    private string $type;
    private string $backWood;
    private string $topWood;
    private string $price;

    function __construct($serialNumber, $price, $builder, $model, $type, $backWood, $topWood)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
    }

    public function __set(){
    }

    public function __get(){
    }

    function getSerialNumber()
    {
        return $this->serialNumber;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    function getBuilder()
    {
        return $this->builder;
    }

    function getModel()
    {
        return $this->model;
    }

    function getType()
    {
        return $this->type;
    }

    function getBackWood()
    {
        return $this->backWood;
    }

    function getTopWood()
    {
        return $this->topWood;
    }
}
