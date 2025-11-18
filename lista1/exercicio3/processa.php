<?php

function sair(){

    echo "<br><a href='index.html'>Voltar</a>";

}

    if($_SERVER['REQUEST_METHOD']==='POST'){

    $numeros= [
        $num1 = $_POST['num1'] ?? '',
        $num2 = $_POST['num2'] ?? '',
        $num3 = $_POST['num3'] ?? '',
        $num4 = $_POST['num4'] ?? '',
    ];

        $media= 0;
        $soma= 0;

        if(empty($num1)){

            echo "O Campo de número 1 está vázio.<br>";
            sair(); 

        } else if(empty($num2)){

            echo "O Campo de número 2 está vázio.<br>";
            sair();  

        } else if(empty($num3)){

            echo "O Campo de número 3 está vázio.<br>";
            sair();  

        } else if(empty($num4)){

            echo "O Campo de número 4 está vázio.<br>";
            sair();  
        
        }else if(!empty($num1)&& !empty($num2) && !empty($num3) && !empty($num4)){

            echo "Número 1: " . htmlspecialchars($num1). "<br>";
            echo "Número 2: " . htmlspecialchars($num2). "<br>";
            echo "Número 3: " . htmlspecialchars($num3). "<br>";
            echo "Número 4: " . htmlspecialchars($num4). "<br><br>";

            for ($i=0;$i<4;$i++){
                $soma+=$numeros[$i];
            }

            $media= $soma/4;

            echo "Média: " . htmlspecialchars($media) . "<br>";

            if($media>=7){
                echo "Situação: Aprovado! <br>";
                sair();
            } else{
                echo "Situação: REPROVADO! <br>";
                sair();
            }
            
        }
    }

?>