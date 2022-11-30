<?php
$servername = "";
$username = "root";
$password = "senha123"
$database = "meubanco"


// criar conexao

$link = new mysqli($servername, $username,  $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>