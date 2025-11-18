<?php

function sair(){

    echo "<br><hr><a href='index.html'>Voltar</a>"; 
}

if ($_SERVER["REQUEST_METHOD"] == "GET") { 

    $senha = trim($_GET["senha"] ?? ''); 

    if ($senha === '') {
        echo "<h1>ATENÇÃO:</h1>";
        echo "<p>O campo senha não pode ficar vazio.</p>";
        sair();
        exit;
    }

    if (preg_match('/^(?=.*[A-Z])(?=.*\d).{8,}$/', $senha)) {
        echo "<h1>Senha aceita!</h1>";
        echo "<p>Sua senha atende aos requisitos de segurança.</p>";
    } else {
        echo "<h1>Senha fraca!</h1>";
        echo "<p>Sua senha NÃO atende a todos os requisitos mínimos.</p>";
    }
    
    sair(); 
    
} else {
    echo "Envie o formulário corretamente.";
    sair();
}
?>