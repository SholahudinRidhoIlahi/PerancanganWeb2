<?php

if(isset($POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Selamat Datang $username dengan $password di Wifi Ridho";
}

?>