<?php
$conexao = mysqli_connect('sql10.freemysqlhosting.net:3306', 'sql10278205', 'uQ3lWS3Wf3', 'sql10278205');

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}