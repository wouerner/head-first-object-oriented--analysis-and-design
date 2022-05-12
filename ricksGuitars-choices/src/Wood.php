<?php

namespace Wouerner\RicksGuitars;

enum Wood
{
    case INDIAN_ROSEWOOD;
    case BRAZILIAN_ROSEWOOD;
    case MAHOGANY;
    case MAPLE;
    case COCOBOLO;
    case CEDAR;
    case ADIRONDACK;
    case SITKA;
    case ALDER;

    public function get(): string
    {
        switch ($this) {
            case self::INDIAN_ROSEWOOD:
                return "Indian Rosewood";
            case self::BRAZILIAN_ROSEWOOD:
                return "Brazilian Rosewood";
            case self::MAHOGANY:
                return "Mahogany";
            case self::MAPLE:
                return "Maple";
            case self::COCOBOLO:
                return "Cocobolo";
            case self::CEDAR:
                return "Cedar";
            case self::ADIRONDACK:
                return "Adirondack";
            case self::ALDER:
                return "Alder";
            case self::SITKA:
                return "Sitka";
            default:
                return "unspecified";
        }
    }
}
