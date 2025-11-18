<?php

function sair(){

    echo "<p><a href='index.html'>Voltar</a></p>"; 
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $texto = $_POST['texto'] ?? ''; 


    if ($texto === '') {
        echo "<h1>Erro de Validação</h1>";
        echo "<p>O campo de texto não pode ser vazio. Por favor, volte e digite algum conteúdo.</p>";
        sair();
        exit(); 
    }
    
    $qtdPalavras = str_word_count($texto, 0, 'ÀÁÂÃÄÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜàáâãäçèéêëìíîïòóôõöùúûü');

    echo "<h2>Resultado da Análise</h2>";
    echo "<p>Total de palavras: <strong>$qtdPalavras</strong></p>";

    if ($qtdPalavras < 20) {
        echo "<p>Análise: <strong>Texto curto.</strong></p>";

    } else if ($qtdPalavras <= 50) {
        echo "<p>Análise: <strong>Texto médio.</strong></p>";

    } else {
        echo "<p>Análise: <strong>Texto longo.</strong></p>";

    }
    
    sair();
    
} else {

    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, use o formulário em index.html para analisar o texto.</p>";
    sair();
}
?>