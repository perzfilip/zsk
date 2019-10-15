<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      echo PHP_VERSION;
      echo gettype(PHP_VERSION);
      if(PHP_VERION > 5.6) {
        echo "nowa wersja phpa";
      } else {
        echo "stara wersja phpa";
      }

      echo PHP_OS, "<br>";
      echo __LINE__, "<br>"; //zwróci linie aktualna kodu
      echo __FILE__, "<br>"; //scieżka do pliku łącznie z nazwą
      echo __DIR__, "<br>"; //ścieżka bez nazwy pliku




     ?>
  </body>
</html>
