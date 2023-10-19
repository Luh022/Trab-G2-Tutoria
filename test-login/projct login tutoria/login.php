<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["senha"];
    
    //include('selenium.webdriver');
    
    if ($username === "seu_usuario" && $password === "sua_senha") {
        header("Location: login.php");
    } else {
        echo "Bem Vindo! Foi logado com sucesso.";
    }
}


//else {
        //echo "Credenciais inválidas. Tente novamente.";
    //}