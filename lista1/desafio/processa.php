<?php

session_start();

function sair(){
    echo "<br><a href='index.html'>Voltar para Cadastro</a>";
}

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}


if($_SERVER['REQUEST_METHOD']==='POST'){

    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? '';


    if (empty($nome) || empty($preco)) {
        $mensagem = "Erro: Nome e Preço são obrigatórios.";
    } else if (!is_numeric($preco)) { 
        $mensagem = "Erro: O preço deve ser um valor numérico.";
    } else {

        $precoFormatado = number_format((float)$preco, 2, '.', '');
        

        $_SESSION['produtos'][] = [
            'nome' => htmlspecialchars($nome), 
            'preco' => $precoFormatado
        ];
        $mensagem = "Produto **" . htmlspecialchars($nome) . "** adicionado com sucesso!";
    }
} else {
    $mensagem = "Acesso inválido. Por favor, use o formulário para adicionar produtos.";
}

?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <title>Lista de Produtos</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
<section>
    <div class="resultado">
        <h2>Status:</h2>
        <p style="color: <?php echo (strpos($mensagem, 'Erro') !== false) ? 'red' : 'green'; ?>; font-weight: bold;"><?php echo $mensagem; ?></p>
        
        <hr>

        <h2>Produtos Cadastrados (<?php echo count($_SESSION['produtos']); ?>)</h2>

        <?php if (!empty($_SESSION['produtos'])): ?>
            <ul class="lista-produtos">
                <?php 

                for($i = 0; $i < count($_SESSION['produtos']); $i++): 
                    $produto = $_SESSION['produtos'][$i];
                ?>
                    <li class="item-produto">
                        <span><?php echo ($i + 1) . ". "; ?></span>
                        <span class="nome-produto"><?php echo $produto['nome']; ?></span>
                        <span class="preco-produto">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></span>
                    </li>
                <?php endfor; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum produto cadastrado ainda.</p>
        <?php endif; ?>

        <?php sair(); ?>
    </div>
</section>
</body>
</html>