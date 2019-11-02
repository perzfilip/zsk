<?php
  function value($a):string{
    if($a < 0) {
      return "ujemna";
    } elseif($a>0) {
      return "dodatnia";
    } else {
      return "zero";
    }
  }

  $x = value(-5);
  echo $x . '<br>';
  echo gettype($x) . '<br>';

  function getValue():int {
    return 10.55;
  }
  echo getValue(), '<br>';

  $x = 10;
  function show() {
    echo "Wartość zmiennej \$x: <br>";
    echo $GLOBALS['x'];
  }

  show();

  $y = 10;
  function showY(){
    global $y;
    echo "wartość zmiennej \$y: $y";
    $y = 20;
    echo "wartość zmiennej \$y: $y";
  }

  showY();

  echo $y, '<br>';

  function suma() {
    $liczba = 10;
    echo "\$liczba wynosi: $liczba", '<br>';
    $liczba +=10;
  }
  echo suma();//10
  echo suma();//10

  function suma1() {
    static $liczba = 10;
    echo "\$liczba wynosi: $liczba", '<br>';
    $liczba +=10;
  }
  echo suma1();//10
  echo suma1();//20

  function dodaj($x, $y = 1){
    return $x + $y;
  }

  $z = 20;

  echo dodaj($z,6), '<br>';
  echo dodaj($z,6), '<br>';

  function mnozenie(float $x, float $y) {
    return $x*$y;
  }

  echo mnozenie(3,4), '<br>';
  echo mnozenie(3.5,2), '<br>'; //7
  echo mnozenie(2,3.5), '<br>'; //7
  echo mnozenie(2,3.999), '<br>'; //7
 ?>
