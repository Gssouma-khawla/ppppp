<?php echo 'Bienveneu'.' '.$_POST['nom'].' '.$_POST['Prénom'];
$n =$_POST['id'];
$pnom =$_POST['nom'];
$l =$_POST['login'];
$l =$_POST['mp'];
$con=mysqli_connect("localhost","root","","minpro");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>

