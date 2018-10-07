<?php
require_once('../../koneksi/koneksi.php');
require('login.view.php');

if(isset($_POST['username']) && isset($_POST['password']){

    $userName = $_POST['username'];
    $password = $_POST['password']

    var_dump($userName);
}
?>