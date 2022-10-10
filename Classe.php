<?php
class Beverage {
  public $temperature, $color, $opacity;
    function getInfo(){
      return "This beverage is $this->temperature and $this->color.";
}
}

$soda = new Beverage();
$soda->color = "black";
$soda->temperature = "cold";
echo $soda->getInfo();

class Beverage {
  public $temperature, $color, $opacity;
 function __construct($temperature, $color)
    {
       $this->temperature = $temperature;
       $this->color = $color;
    }
  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}
$nouveau = new Beverage("cold", "black");
echo $nouveau -> getInfo();


