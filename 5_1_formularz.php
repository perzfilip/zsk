<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" placeholder="imie" value=""><br><br>
      <input type="number" name="wiek" placeholder="wiek" value=""><br><br>
      <input type="submit" name="przycisk" value="Zatwierdź">
    </form>
    <?php
      if(!empty($_POST['imie'])&&!empty($_POST['wiek'])) {
        $imie = $_POST['imie'];
        $wiek = $_POST['imie'];
        echo "dane przed poprawa: $imie", '<br>';
        echo "długość imienia: ", strlen($imie), '<br>';
        $imiePoprawne = ucfirst(strtolower(substr(trim($imie),0,10)));
        //usuniecie spacji, ograniczenie do 10 znaków i z dużej litery reszta mała
        echo "dane poprawne: $imiePoprawne", "<br>";
        echo "długość imienia po poprawie: ", strlen($imiePoprawne), '<hr>';
     ?>
     <table>
       <tr>
         <th>Imię</th>
         <th>wiek</th>
       </tr>
       <tr>
         <td><?php echo $imie; ?></td>
         <td><?php echo $wiek; ?></td>
       </tr>
     </table>
   <?php } ?>
  </body>
</html>
