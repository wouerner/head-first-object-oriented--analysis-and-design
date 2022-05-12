<?php

namespace Wouerner\RicksGuitars;

use Wouerner\RicksGuitars\Inventory;
use Wouerner\RicksGuitars\Wood;
use Wouerner\RicksGuitars\Type;
use Wouerner\RicksGuitars\Builder;

final class FindGuitarTester
{
    public function main(array $args = [])
    {
        // Set up Rick's guitar inventory
        $inventory = new Inventory();
        $this->initializeInventory($inventory);

        $whatErinLikes = new Guitar(
            "",
            0,
            Builder::FENDER,
            "Stratocastor",
            Type::ELECTRIC,
            Wood::ALDER,
            Wood::ALDER
        );

        $guitar = $inventory->search($whatErinLikes);

        if ($guitar != null) {
            echo ("Erin, you might like this " .
                $guitar->builder->get() . " " . $guitar->model .  " " .
                $guitar->type->get() . " guitar:\n   " .
                $guitar->backWood->get() . " back and sides,\n   " .
                $guitar->topWood->get() . " top.\nYou can have it for only $" .
                $guitar->price . "!");
        } else {
            echo ("Sorry, Erin, we have nothing for you.");
        }
    }

    private function initializeInventory(Inventory $inventory): void
    {
        $inventory->addGuitar(
            "11277",
            3999.95,
            Builder::COLLINGS,
            "CJ",
            Type::ACOUSTIC,
            Wood::INDIAN_ROSEWOOD,
            Wood::SITKA
        );

        $inventory->addGuitar(
            "V95693",
            1499.95,
            Builder::FENDER,
            "Stratocastor",
            Type::ELECTRIC,
            Wood::ALDER,
            Wood::ALDER
        );

        $inventory->addGuitar(
            "V9512",
            1549.95,
            Builder::FENDER,
            "Stratocastor",
            Type::ELECTRIC,
            Wood::ALDER,
            Wood::ALDER
        );

        $inventory->addGuitar(
            "122784",
            5495.95,
            Builder::MARTIN,
            "D-18",
            Type::ACOUSTIC,
            Wood::MAHOGANY,
            Wood::ADIRONDACK
        );

        $inventory->addGuitar(
            "76531",
            6295.95,
            Builder::MARTIN,
            "OM-28",
            Type::ACOUSTIC,
            Wood::BRAZILIAN_ROSEWOOD,
            Wood::ADIRONDACK
        );

        /* $inventory->addGuitar("70108276", 2295.95, "Gibson", "Les Paul", "electric", */
        /*     "Mahogany", "Maple"); */
        /* $inventory->addGuitar("82765501", 1890.95, "Gibson", "SG '61 Reissue", */
        /*     "electric", "Mahogany", "Mahogany"); */
        /* $inventory->addGuitar("77023", 6275.95, "Martin", "D-28", "acoustic", */
        /*     "Brazilian Rosewood", "Adirondack"); */
        /* $inventory->addGuitar("1092", 12995.95, "Olson", "SJ", "acoustic", */
        /*     "Indian Rosewood", "Cedar"); */
        /* $inventory->addGuitar("566-62", 8999.95, "Ryan", "Cathedral", "acoustic", */
        /*     "Cocobolo", "Cedar"); */
        /* $inventory->addGuitar("6 29584", 2100.95, "PRS", "Dave Navarro Signature", */
        /*     "electric", "Mahogany", "Maple"); */
    }
}

require_once __DIR__ . '/../vendor/autoload.php';

$find = new FindGuitarTester();
$find->main();
