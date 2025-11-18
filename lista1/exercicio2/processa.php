<?php

    function sair(){
        echo "<br> <a href='index.html'>Voltar</a>";

    }

    

    if($_SERVER['REQUEST_METHOD']==='POST'){

        $numero=  $_POST['numero'];

        if($numero % 2 === 0){
            echo "O número ". $numero ." é par";
        } else {
            echo "O número ". $numero ." é ímpar";
        }
    }

?>