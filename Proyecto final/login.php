<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["user"];
    $password = $_POST["password"];


    $ckuser = "admin";
    $ckpassword = "1234";

    if ($username === $ckuser && $password === $ckpassword) {
        header ("location:listar.php");
    } else {
        header ("location:error.html");
    }
  }
?>
