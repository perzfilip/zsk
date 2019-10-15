<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(!empty($_GET['imie'])) {
        echo $_GET['imie'];
      } else {
     ?>
    <form method="get">
      <input type="text" name="imie" placeholder="imie" autofocus><br><br>
      <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
  <?php } ?>
  </body>
</html>
