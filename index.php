<?php
echo 'Numbers have to be below '.PHP_INT_MAX.' to be solved';
include('partials/input.php');
$num = (!empty($_POST["num"])) ? filter_var($_POST["num"], FILTER_SANITIZE_STRING) : '';

$cont = 2;
while ($num > 1){
  while ($num % $cont != 0){
    $cont++;
	}
  $num /= $cont;
}
echo 'Largest Prime Factor is: '.$cont;
?>
