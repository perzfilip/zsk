<?php
if(isset($_GET['przycisk']) && !empty($_GET['kraj'])) {
  $kraj = $_GET['kraj'];

  switch ($kraj) {
    case 'pl':
      $kraj = 'Polska';
      break;
    case 'en':
      $kraj = 'Anglia';
      break;
  }
  echo $kraj;
  1
} else {
  header('location: ./5_3_form.php');
}
?>
