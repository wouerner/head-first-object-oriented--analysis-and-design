<?php
namespace Wouerner\RicksGuitars;

use Wouerner\RicksGuitars\Guitar;

final class Inventory {
  private array $guitars;

  public function __construct() {
      $guitars = [];
  }

  public function addGuitar(
      string $serialNumber,
      float $price,
      string $builder, 
      string $model,
      string $type, 
      string $backWood, 
      string $topWood
  ) : void {
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

  public function search(Guitar $searchGuitar) : Guitar {
      foreach ($this->guitars as $guitar) {
          $builder = $searchGuitar->getBuilder();

          if (
              $builder != null && 
              !$builder == "" && 
              !$builder == $guitar->getBuilder()
          ) {
              continue;
          }

          $model = $searchGuitar->getModel();
          if (
              ($model != null) && 
              (!$model==("")) &&
              (!$model == ($guitar->getModel())))
              continue;

          $type = $searchGuitar->getType();
          if (($type != null) && (!$searchGuitar==("")) &&
              (!$type == ($guitar->getType())))
              continue;

          $backWood = $searchGuitar->getBackWood();
          if (($backWood != null) && 
              (!$backWood== "") &&
              (!$backWood == ($guitar->getBackWood()))
          )
              continue;

          $topWood = $searchGuitar->getTopWood();
          if (($topWood != null) && (!$topWood == ("")) &&
              (!$topWood == ($guitar->getTopWood())))
              continue;

          return $guitar;
      }
      return null;
  }
}
