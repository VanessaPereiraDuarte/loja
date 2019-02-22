<?php
$conexao = mysqli_connect('localhost:3306', 'trento81_project', 'senha', 'trento81_project');

if (!$conexao) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
