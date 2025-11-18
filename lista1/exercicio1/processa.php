<?php

function sair(){

    echo "<br><a href='index.html'>Voltar</a>";

}


    if($_SERVER['REQUEST_METHOD']==='POST'){

        $nome= $_POST['nome'];

        if(empty($nome)){

            echo "Por favor preencha seu nome.<br>";
            sair();
        } else if(!empty($nome)){

            echo "<h1> SEJA BEM-VINDO!<h1>Nome:" . htmlspecialchars($nome). "<br>";
            echo "<br><a href='index.html'>Sair</a>";

        }
    }

?>