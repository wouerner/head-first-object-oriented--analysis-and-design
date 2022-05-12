<?php

namespace Wouerner\RicksGuitars;

enum Type
{
    case ACOUSTIC;
    case ELECTRIC;

    public function get(): string
    {
        switch ($this) {
            case self::ACOUSTIC:
                return "acoustic";
            case self::ELECTRIC:
                return "electric";
            default:
                return "unspecified";
        }
    }
}
