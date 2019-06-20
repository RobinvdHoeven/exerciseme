<?php

class BmiCalculator {

  private $bodylength;
  private $bodymass;
  
    public function set_bodylength($bodylength) {
    if ($bodylength < 0.546 || $bodylength > 2.75 ) {
      echo "Filled in bodylength incorrect(Most likely too short or too high)!";
      $this ->bodylength = -1;
    } else {
      $this ->bodylength = $bodylength;
    }
  }


  public function set_bodymass($bodymass) {
    if ($bodymass < 10 || $bodymass > 730 ) {
      echo "Filled in bodymass incorrect(Most likely too low or too high)!";
      $this ->bodymass = -1;
    } else {
      $this ->bodymass = $bodymass;
    }
  }

  public function get_bodylength() {
    return $this->bodylength . "m";
  }

  public function get_bodymass() {
    return $this->bodymass . "kg";
  }

  // We gaan de constructor van de class maken. De constructor wordt altijd automatisch aangeroepen wanneer we het woordje new gebruiken.

  public function __construct($args = []) {
      $bodymass = $_POST['bodymass'] ?? 0;
      $this->set_bodymass($bodymass);
      $bodylength = $_POST['bodylength'] ?? 1;
      $this->set_bodylength($bodylength);
      // $this->welcome();
  }

  public function bmi() {
    return round($this ->bodymass / ($this ->bodylength * $this ->bodylength), 1);
}

  public function welcome() {
    echo "<br><br><br><br><br><br><br><div class='background'>" . "Weight: " . $this ->bodymass .
    "kg <br>Length: " . $this ->bodylength . "m" . " <br>BMI: " . $this ->bmicolor() .  "<br>" . $this->interpretation_bmi() . " <hr>" . "</div>";
  }
    

 
  public function bmicolor() {
    if ($this->bmi() > 0 && $this->bmi() < 18.5)
    return '<span style="color: blue;font-weight: bold">' . $this->bmi() . '</span>';
        else if ($this->bmi() > 18.5 && $this->bmi() <= 24.9)
    return '<span style="color: green;font-weight: bold">' . $this->bmi() . '</span>';
        else if ($this->bmi() > 24.9 && $this->bmi() <= 29.9)
    return '<span style="color: black;font-weight: bold">' . $this->bmi() . '</span>';
        else if ($this->bmi() > 29.9)
    return '<span style="color: red;font-weight: bold">' . $this->bmi() . '</span>';
  }

  public function interpretation_bmi() {
    $interpretation = "";
    $calculatebmi = $this->bmi();
    switch(true) {
      case ($calculatebmi <= 18.5):
      $interpretation = '<span style="color: blue;font-weight:bold">Underweight!</span>';
      break;
      case ($calculatebmi <= 24.9):
      $interpretation = '<span style="color: green;font-weight: bold">Normal weight!</span>';
      break;
      case ($calculatebmi <= 29.9):
      $interpretation = '<span style="color: black;font-weight: bold">Over weight!</span>';
      break;
      case ($calculatebmi > 29.9):
      $interpretation = '<span style="color: red;font-weight: bold">Obese!</span>';
    }
    return $interpretation;
  }
} 



?>

<?php
$bmicalc = new BmiCalculator();
echo $bmicalc->welcome();
?>