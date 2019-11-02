<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }

    </style>
  </head>
  <body>
    <table>


    <?php
    $i = 1;
    $dod = 10;
    $suma = 0;
    $suma2 = 0;
      do {
        echo "<tr>";
        $j = 1;

        do {
          if($i==$j) {
            $suma += ($i*$j);
            echo '<td style="background-color: red;">', $i*$j , "</td>";

          } else if($dod==$j) {
            echo '<td style="background-color: blue;">', $i*$j , "</td>";
            $suma2 +=$i*$j;
        }  else {
            echo '<td>', $i*$j , "</td>";
          }
          $j++;
        } while($j <= 10);
        echo "</tr>";
        $i++;
        $dod--;
      }while ($i <= 10);
     ?>
     </table>
     <?php
     echo "suma czerwonych: $suma", '<br>', "suma niebieskich: $suma2"; ?>
  </body>
</html>
