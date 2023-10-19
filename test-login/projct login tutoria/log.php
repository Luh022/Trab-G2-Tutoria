<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["senha"];
    
    //include('selenium.webdriver');
    
    if ($username === "seu_usuario" && $password === "sua_senha") {
        header("Location: log.php");
    } else {
        echo "Sua nova senha foi criada com sucesso";
    }
}
