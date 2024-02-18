<?php
if($_SERVER["REQUEST_METHOD"] == 'POST')
    $name = $_POST['name'];
$email = $_POST['email'];
$NIM = $_POST['NIM'];

echo "Halo, " .$name. "<br>Email Anda : " .$email. "<br>NIM Anda : ".$NIM;

?>