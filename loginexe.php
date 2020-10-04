<?php
// mengaktifkan session php
if(isset($_SESSION['submit']))
{
    header('location:index.php');
}
 
if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:index.php');
}
 
if(isset($_POST['login']))
{
    $user = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
 
    if($database->login($user,$password,$remember))
    {
      header('location:index.php');
    }
}
?>