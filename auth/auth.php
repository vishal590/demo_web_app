<?php                                 //check session is set or not
session_start();

$host="localhost";
$username="root";
$pass="";
$db="ems";

$conn=mysqli_connect($host,$username,$pass,$db);

if(!$conn){
  die("Data connection error");
}

if(!isset($_SESSION['auth']))
{
  header('Location:../login.php');
}

?>