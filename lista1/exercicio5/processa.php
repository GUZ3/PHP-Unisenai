<?php

function sair(){
    echo "<br><a href='index.html'>Voltar</a>";
}

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <title>Resultado da Validação</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<section>
    <form style='height: auto; width: 400px; padding: 30px;'>
        <div style='text-align: center;'>";

if($_SERVER['REQUEST_METHOD']==='POST'){

    $email = $_POST['email'] ?? '';

    if(empty($email)){
        echo "<h1>Erro!o</h1>";
        echo "<p style='color: red; font-size: 18px;'>O campo de E-mail não pode estar **vazio**.</p>";
        sair();
    } 

    else if (strpos($email, '@') === false) {
        echo "<h1>Resultado da Validação:</h1>";
        echo "<p style='color: red; font-size: 18px; font-weight: bold;'>Formato inválido.</p>";
        echo "<p style='font-size: 16px;'>O e-mail deve conter o símbolo '@'.</p>";
        sair();
    } 

    else {
        $emailValido = htmlspecialchars($email);

        echo "<h1>E-mail Recebido!</h1>";
        echo "<p>O seguinte e-mail foi validado e recebido:</p>";
        echo "<p style='font-weight: bold; font-size: 20px; color: green;'>$emailValido</p>";
        sair();
    }
} else {
    echo "<h1>Acesso Negado</h1>";
    echo "<p style='color: red; font-size: 18px;'>Acesso inválido. Preencha o campo de email.</p>";
    sair();
}


echo "</div>
    </form>
</section>
</body>
</html>";

?>