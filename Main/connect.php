<?php
    //conectando a base de dados
    $servername = "localhost:3307";  // Adding port 3307
    $username = "root";     // Default MySQL username
    $password = "";         // Default MySQL password (blank)
    $dbname = "aula";      // Name of the database you want to connect to

    // Criando conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificando conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br><br>";
?>

