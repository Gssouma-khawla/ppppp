<?php 
$i =$_POST['id'];
$n =$_POST['nom'];
$r =$_POST['region'];
$l =$_POST['login'];
$Ps =$_POST['mp'];
$con=mysqli_connect("localhost","root","","minpro");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$sql="insert into agence values('$i','$n','$r','$l','$Ps')";
$result=mysqli_query($con,$sql);

if ($result)
{
  echo "insertion valider ";
}
else {
   echo "erreur";
}
?>