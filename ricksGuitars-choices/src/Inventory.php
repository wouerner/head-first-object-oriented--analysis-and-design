<?php
namespace Wouerner\RicksGuitars;

use Wouerner\RicksGuitars\Guitar;
use Wouerner\RicksGuitars\Builder;
use Wouerner\RicksGuitars\Wood;
use Wouerner\RicksGuitars\Type;

final class Inventory
{
    private array $guitars;

    public function __construct()
    {
        $this->guitars = [];
    }

    public function addGuitar(
        string $serialNumber,
        float $price,
        Builder $builder,
        string $model,
        Type $type,
        Wood $backWood,
        Wood $topWood
    ): void {
        $guitar = new Guitar(
            $serialNumber,
            $price,
            $builder,
            $model,
            $type,
            $backWood,
            $topWood
        );

        $this->guitars[] = $guitar;
    }

    public function getGuitar(string $serialNumber) : Guitar {
        foreach($this->guitars as $guitar){
            if ($guitar->getSerialNumber() == $serialNumber) {
                return $guitar;
            }
        }
        return null;
    }

    public function search(Guitar $searchGuitar): Guitar
    {
        foreach ($this->guitars as $guitar) {
            $builder = $searchGuitar->builder;

            if (
                $builder != null && 
                !$builder == "" && 
                !$builder == $guitar->builder
            ) {
                continue;
            }

            $model = $searchGuitar->model;
            if (
                ($model != null) && 
                (!$model==("")) &&
                (!$model == ($guitar->model)))
                continue;

            $type = $searchGuitar->type;
            if (($type != null) && (!$searchGuitar==("")) &&
                (!$type == ($guitar->type)))
                continue;

            $backWood = $searchGuitar->backWood;
            if (($backWood != null) && 
                (!$backWood== "") &&
                (!$backWood == ($guitar->backWood))
            )
            continue;

            $topWood = $searchGuitar->topWood;
            if (($topWood != null) && (!$topWood == ("")) &&
                (!$topWood == ($guitar->topWood)))
                continue;

            return $guitar;
        }
        return null;
    }
}
