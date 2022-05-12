<?php

namespace Wouerner\RicksGuitars;

use Wouerner\RicksGuitars\Type;
use Wouerner\RicksGuitars\Builder;
use Wouerner\RicksGuitars\Wood;

final class Guitar
{
    private string $serialNumber;
    private Builder $builder;
    private string $model;
    private Type $type;
    private Wood $backWood;
    private Wood $topWood;
    private float $price;

    public function __construct(
        $serialNumber,
        $price,
        Builder $builder,
        $model,
        Type $type,
        Wood $backWood,
        Wood $topWood
    ) {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
    }

    public function __set($attrib, $value)
    {
        $this->$attrib = $value;
    }

    public function __get($attrib)
    {
        return $this->$attrib;
    }
}
