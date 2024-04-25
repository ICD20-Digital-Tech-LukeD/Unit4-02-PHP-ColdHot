<link rel="stylesheet" href="css/style.css">
<?php
$userInp = $_POST['userInp'];
if ($userInp > 15) {
  echo "It's hot outside!";
} else{
  echo "It's cold outside!";
}
