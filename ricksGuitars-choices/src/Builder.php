<?php

namespace Wouerner\RicksGuitars;

enum Builder
{
    case FENDER;
    case MARTIN;
    case GIBSON;
    case COLLINGS;
    case OLSON;
    case RYAN;
    case PRS;
    case ANY;

    public function get(): string
    {
        switch ($this) {
            case self::FENDER:
                return "Fender";
            case self::MARTIN:
                return "Martin";
            case self::GIBSON:
                return "Gibson";
            case self::COLLINGS:
                return "Collings";
            case self::OLSON:
                return "Olson";
            case self::RYAN:
                return "Ryan";
            case self::PRS:
                return "PRS";
            default:
                return "Unspecified";
        }
    }
}
