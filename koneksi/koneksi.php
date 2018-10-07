<?php
try{
$koneksi = new PDO('mysql:host=localhost;dbname=tekkim',"root","");
}catch (PDOException $e){
    die($e-> getMessage());
    exit();
}
?>