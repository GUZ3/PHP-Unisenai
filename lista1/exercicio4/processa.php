<?php

    function sair(){
        echo "<br><a href='index.html'>Voltar<a>";
    }


    if($_SERVER['REQUEST_METHOD']==='POST'){

        $num1= $_POST['num1'];
        $num2= $_POST['num2'];
        

        if(empty($num1)){
             echo "preencha o campo 1"; 
             sair();

        } else if(empty($num2)){
            echo "preencha o campo 2"; 
            sair();

        } else {
            for($i=$num1; $i<=$num2; $i++){
                echo htmlspecialchars($i)."<br>";
            } 
            sair();
        }
    }
?>