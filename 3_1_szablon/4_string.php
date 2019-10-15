<?php
  $text = <<< TEKST
  zsk - Zespół
  szkół
  komunikacji
  TEKST;

  echo "przed wywołaniem funkcji nl2br: <br> $text";
  echo "po wywołaniu funkcji nl2br: <br>";
  echo nl2br($text), "<br>"; //dodawanie do nowej linii br

  $text = "Janusz";

  echo strtolower($text), "<br>"; //na małe litery
  echo strtoupper($text), "<br>"; //na wielkie litery

  $text = "anna Janusz tomek";

  //zamiana pierwszej litery na dużą
  echo ucfirst($text), "<br>";

  //zamiana wszystkich pierwszych liter na duże
  echo ucwords($text), "<br>";

  //=================================================

  $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  echo $lorem, "<br>";

  $col = wordwrap($lorem, 40, '<br>'); //text, długość kolumny w znakach, czym rozdzielamy
  echo $col;

  //czyszczenie zawartości bufora
  ob_clean();

  #===============================
  //usuwanie białych znaków

  $name = 'Janusz';
  $name1 = '   Janusz   ';

  echo 'Długość zmiennej $name: ', strlen($name), '<br>'; //6 znaków
  echo 'Długość zmiennej $name1: ', strlen($name1), '<br>'; //9 znaków

  echo strlen(ltrim($name1)), '<br>'; //7
  echo strlen(rtrim($name1)), '<br>'; //8
  echo strlen(trim($name1)), '<br>'; //obcinanie spacji z obu stron

  //przeszukiwanie ciągów znaków
  $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';
  $search = strstr($address, 'tel'); // od tel pokazuje wszystko po, czyli tel. (61) 445-44-58
  echo $search, '<br>'; //
  $search = strstr($address, 'tel', true); //wszystko przed tel
  echo $search, '<br>';
  $searh = stristr($address, 'Tel'); //nie bedzie zwracał uwagi na znaki

  $mail = strstr("zsk@gmail.com", '@'); //@gmail.com
  $mail = strstr("zsk@gmail.com", 64); //@gmail.com można znaki ascii dawać
  echo $mail, "<br>";

  //========================================

  $ciag1 = 'a';
  $ciag2 = 'aa';

  echo strcmp($ciag1, $ciag2); //-1
  echo strcmp('zz', 'zz')//0
  echo strcmp('za', 'zz')//-1
  echo strcmp('zza', 'zz')//1 - pierwszy wiekszy

  //pozycja
  $pos = strpos('abcdefg', 'cde');
  echo $pos, '<br>'; //2

  $pos = strpos('cdefg', 'cde');
  echo $pos, "<br>"; //0

  /*
  zad 1
  sprawdź czy w ciągu o nazwie text1 znajduje się ciagu text2
  */
  $text1 = 'abcdabcd';
  $text2 = 'abc';

  if(strpos($text1, $text2) === false){ //0 bedzie jako false, === sprawdza tez typ i dziala
      echo "Ciąg $text2 nie został znaleziony w ciągu $text1", "<br>";
  } else {
    echo "Ciąg $text2 został znaleziony w ciągu $text1", "<br>";
  }

#przetwarzanie ciągu znaków
$replace = str_replace('zsk', 'szkola', 'zsk Poznań'); //co, na co, w jakim ciągu
echo $replace, "<br>";

//sub str
echo substr('Janusz kowalski', 3), '<br>'; //ciag, poczatek, koniec - usz kowalski
echo substr('Janusz kowalski', -3), '<br>'; //ski
echo substr('Janusz kowalski', 7, 5), '<br>'; //kowal
echo substr('Janusz kowalski', -8, -3), '<br>'; //kowal
echo substr('Janusz kowalski', -8, 5), '<br>'; //kowal

//zamiana polskich znaków
$login = 'żąkil';
$censore = array('ż', 'ą', 'ś');
$replace = array('z', 'a', 's');

$newLogin = str_replace($censore, $replace, $login); //zamieni te litery w tablicach
echo $newLogin, '<br>';

ob_clean(); //wyczyszczenie ekranu

/*
napisz aplikacje cenzurująca zdanie podane przez użytkownika,
użytkownik podaje dane z formularza
zamień słowa biały, czarny, na ciąg znaków '**#####**'
wyświetl dane w formacie
dane przed sprawdzeniem
dane po sprawdzeniu
*/

echo <<< FORM
<form  method="post">
  <input type="text" name="dane" placeholder="wpisz dane"><br><br>
  <input type="submit" name="button" value="Zatwierdź">
</form>

FORM;

if(isset($_POST['dane'])){
  $data = $_POST['dane'];

  $znaki = array('biały', 'czarny');
  $cenzura = '**###**';
  $correct = str_replace($znaki, $cenzura, $data);

  echo "Dane pobrane od użytkownika: $data", '<br>';
  echo "Dane poprawne: $correct", '<br>';
}
 ?>
