<?php
Class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name() {
    return "Your bike is a " . $this->year . " " . $this->brand . " " . $this->model;
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

}

$schwinn = new Bicycle;
$schwinn->brand = "Schwinn";
$schwinn->model = "Stingray";
$schwinn->year = 1973;
$schwinn->weight_kg = 20.2;

echo "<p>" . $schwinn->name() . "</p>";
echo "<p>It weighs " . $schwinn->weight_kg . " kg</p>";
echo "<p>Which converts to " . round($schwinn->weight_lbs(), 2) . " lbs.</p>";


?>