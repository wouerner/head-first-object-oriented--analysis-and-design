<?php

namespace Wouerner\RicksGuitars;

// import java.util.Iterator;
// import java.util.LinkedList;
// import java.util.List;
/* include_once('Guitar.php'); */

use Wouerner\RicksGuitars\Guitar;

class Inventory {
  /* private List guitars; */
  private array $guitars;

  public function __construct() {
    /* guitars = new LinkedList(); */
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
    /* for (Iterator $i = $this->guitars.iterator(); $i.hasNext(); ) { */
      foreach($this->guitars as $guitar){
      /* $guitar = (Guitar)$i.next(); */
      if ($guitar.getSerialNumber().equals($serialNumber)) {
        return $guitar;
      }
    }
    return null;
  }

  public function search(Guitar $searchGuitar) : Guitar {
      foreach ($this->guitars as $guitar) {
          /* $guitar = (Guitar)i.next(); */
          // Ignore serial number since that's unique
          // Ignore price since that's unique

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
