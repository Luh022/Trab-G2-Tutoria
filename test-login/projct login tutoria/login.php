<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["senha"];
    
    // Aqui você pode adicionar a lógica de autenticação, como verificar em um banco de dados
    // Se as credenciais estão corretas, você pode redirecionar o usuário para uma página de boas-vindas.
    
    if ($username === "seu_usuario" && $password === "sua_senha") {
        header("Location: welcome.php");
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
