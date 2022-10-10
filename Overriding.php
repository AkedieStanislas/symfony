<?php
class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.";
  }
}

class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
  function getInfo()
  {
    return parent::getInfo() . " I like my milk this way.";
  }
}
$milk = new Milk();
echo $milk->getInfo();

<?php
class Beverage {
  private $temperature, $color;
  public $opacity;
  function __construct($temperature, $color) {
    $this->temperature = $temperature;
    $this->color = $color;
  }
  function getInfo() {
    return "This beverage is $this->temperature and $this->color.";
  }
}
class Milk extends Beverage {
  function setOpacity($opacity) {
    $this->opacity = $opacity;
  }
}
<?php
class Beverage {
  private $color;
  function setColor($color){
    $this->color = strtolower($color);
  }
  function getColor(){
    return $this->color;
  }

}

$soda = new Beverage();

<?php
class AdamsUtils {
  public static $the_answer = 42;
  public static function addTowel($string) {
    return $string . " and a towel.";
  }
}
/*Access both members of AdamsUtils statically and print them using echo. Pass $items as an argument for the static method.*/
$items = "I brought apples";
echo AdamsUtils::$the_answer;
echo AdamsUtils::addTowel($items);