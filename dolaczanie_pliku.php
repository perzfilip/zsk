<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Początek pliku

    <?php
    // przy includzie kod przy bledzie wykona sie dalej
      // include './dolaczanie_pliku/plik.php';
      // include_once './dolaczanie_pliku/plik.php';

      //przy require kod nie wykona sie dalej przy bledzie
      require './dolaczanie_pliku/plik.php';
      require_once './dolaczanie_pliku/plik.php'; //tylko jednokrotnie require'uje
     ?>

    koniec pliku
  </body>
</html>
