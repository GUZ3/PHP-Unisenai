<?php

function sair(){

    echo "<br><a href='index.html'>Voltar</a>";

}

    if($_SERVER['REQUEST_METHOD']==='POST'){

        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';

        if(empty($nome)){

            echo "O Campo de nome está vazio.<br>";
            sair();     

        }else if(empty($email)){

            echo "O Campo de email está vazio.<br>";
            sair();

        }else if(!empty($nome)&& !empty($email)){

            echo "nome: " . htmlspecialchars($nome). "<br>";
            echo "email: " . htmlspecialchars($email). "<br>";
            sair();
    
        }
    }

?>