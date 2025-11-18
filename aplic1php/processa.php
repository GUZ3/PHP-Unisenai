<?php

     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $mensagem = $_POST['mensagem'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background: #243757;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        

        .resultado {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba (0,0,0,0.2);
            width: 350px;
        }

        h2 {
            color: #dad5b7;
            text-align: center;
            color: #333;
            
        }

        p {
            color: #243757;
            margin: 10px 0;
            font-size: 16px;
        }

        span {
            color: #665e52;
            font-weight: bold;
        }

        a{  
            color:#243757;
            text-decoration: none;
        }
    </style>
</head>

<body>
        
    <div class="resultado">

        <h2>Dados recebidos</h2>
        <!-- Use <span> quando quiser aplicar (css) em parte de um texto-->
            <p><span>Nome: </span><?php echo htmlspecialchars($nome);?></p>
            <p><span>Email: </span><?php echo htmlspecialchars($email);?></p>
            <p><span>Mensagem: </span><?php echo htmlspecialchars($mensagem);?></p>
            
            <?php echo "<a href='index.html'>Voltar</a>";?>
    </div>

</body>

</html>