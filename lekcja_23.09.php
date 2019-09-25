<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $x = 2;
      echo $x++; //2 wyświetli doda później 1
      echo ++$x; //najpierw doda później wyświetli 4
      echo $x; //też 4
      $y = $x++; //najpierw przypisze 4 pożniej doda 1
      echo $y; //wyświetli 4
      $y = ++$x; //doda do 5 1 i przypisze 6
      echo $y; //wyświetli 6
      echo ++$y; //najpierw doda 1 poźniej wyświetli 7

      echo '<hr>';

      $text = '123sssd1';
      $x = (int)$text;
      echo $x;

        echo '<hr>';

      $text1 = -1;
      $x1 = (bool)$text1;
      echo $x1;

      echo '<hr>';

      $text2 = 100;
      $x2 = (unset) $text2;
      echo $x2;
      echo gettype($x2); //is_null

      echo '<hr>';
      $c;
      echo @$c; //@ pomija błąd
      echo gettype($c);

      echo '<hr>';

      echo PHP_INT_SIZE;
      echo phpinfo(); //iformacje o PHP

      echo '<hr>';

      $x = 10;
      echo is_string($x); //nic nie wyświetla to false
      echo is_int($x); //wyświetli 1
      echo is_null();
      echo is_bool();
      echo is_float();

      echo '<hr>';

      //zmienne superglobalne
      // $_GET, $_POST, $_COKKIE, $_FILES, $_SESSION, $_SERVER

      echo $_SERVER['SERVER_PORT']; //domyślnie 80
      echo $_SERVER['SERVER_NAME']; //localhost
      echo $_SERVER['SCRIPT_NAME']; //
      echo $_SERVER['SERVER_PROTOCOL']; //jakie http
      echo $_SERVER['DOCUMENT_ROOT']; //umiejscowienie dokładne xampa

      $filePlace = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['SCRIPT_NAME'];
      //dokładna lokalizacja pliku
      echo $filePlace;


      echo '<hr>';
      //STAŁE z dużych liter
      define('NAZWISKO', 'KOWAL');
      echo NAZWISKO; //wyświetla KOWAL
      //nie da się przypisywać już czegoś do tej zmiennej
      define('imie', 'janusz'); //małymi też działa
      echo imie;
      define('WIEK', 10, true); //3 argument do mozliwosci wpisywania malymi i wielkimi, ale nie działa w wersjach 8
      echo WIEK;


    ?>
  </body>
</html>
