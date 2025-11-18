<?php

// ----------------------------------------------------
// 1. Funções (Mantidas limpas)
// ----------------------------------------------------
function somar_numeros(float $num1, float $num2): float {
    return $num1 + $num2;
}

function saudar_usuario(string $nome): void {
    // Note: O uso de ** será substituído por <b> no HTML
    echo "<p style='font-size: 1.2em; color: #2a6496;'>Olá, <b>$nome</b>! Bem-vindo(a) ao nosso sistema de demonstração de funções.</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Demonstração de Funções PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f9; }
        .container { max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        h1 { color: #333; border-bottom: 2px solid #5cb85c; padding-bottom: 10px; }
        .section { margin-bottom: 20px; padding: 10px; border-left: 5px solid #007bff; background-color: #e9ecef; border-radius: 4px; }
        .result { font-weight: bold; color: #d9534f; font-size: 1.1em; }
        .success { color: #5cb85c; font-weight: bold; }
        .info { color: #337ab7; }
        b { font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Demonstração de Funções em PHP</h1>

        <?php
        // ----------------------------------------------------
        // 2. Chamada da Função de Saudação
        // ----------------------------------------------------
        saudar_usuario("Alice");
        ?>

        <div class="section">
            <h2>1. Operação de Soma (Retorno Capturado)</h2>
            <?php
            $numero_a = 15;
            $numero_b = 7;

            // Chamada da função e captura do valor
            $soma_total = somar_numeros($numero_a, $numero_b);
            ?>
            <p class="info">Primeiro número: <b><?php echo $numero_a; ?></b></p>
            <p class="info">Segundo número: <b><?php echo $numero_b; ?></b></p>
            <p>Resultado da Soma: <span class="result"><?php echo $soma_total; ?></span></p>
        </div>

        <div class="section">
            <h2>2. Soma Direta</h2>
            <?php
            // Chamada da função, valor usado diretamente na variável
            $valor_final = somar_numeros(5.5, 3.2);
            ?>
            <p>Resultado da soma direta de 5.5 e 3.2: <span class="result"><?php echo $valor_final; ?></span></p>
        </div>

        <div class="section">
            <h2>3. Função em Estrutura Condicional</h2>
            <?php
            $n1 = 20;
            $n2 = 5;
            $soma_condicional = somar_numeros($n1, $n2); // Calculamos uma vez

            echo "<p>Testando a soma de <b>$n1</b> e <b>$n2</b>...</p>";

            if ($soma_condicional > 20) {
                // Usamos a variável pré-calculada para não chamar a função novamente
                echo "<p class='success'>A soma de $n1 e $n2 é maior que 20! (Resultado: $soma_condicional)</p>";
            } else {
                echo "<p class='info'>A soma não é maior que 20.</p>";
            }
            ?>
        </div>

    </div>
</body>
</html>