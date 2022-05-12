<?php 
namespace Wouerner\RicksGuitars;

class Guitar
{
    private $serialNumber;
    private $builder;
    private $model;
    private $type;
    private $backWood;
    private $topWood;
    private $price;

    function  __construct($serialNumber, $price, $builder, $model, $type, $backWood, $topWood)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
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
