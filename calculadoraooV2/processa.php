<?php

    require_once 'calculadora.php';
    require_once 'trataeMostra.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $valor1= $_POST['valor1'] ?? '';
    $valor2= $_POST['valor2'] ?? '';
    $operacao= $_POST['operacao'] ?? '';

    $val1 = trataeMostra::parse_num($valor1);
    $val2 = trataeMostra::parse_num($valor2);

    $result = null;
    $error = null;


    //verifica se há erro de entrada ou de operacão

    if ($val1 === null || $val2 === null) {

        $error = 'Entrada inválida. Certifica-se de informar números válidos.';
    } else {

        switch($operacao){
            case 'somar':
                $result= Calculadora::somar($val1, $val2);
            break;

            case 'subtrair':
                $result= Calculadora::subtrair($val1, $val2);
            break;

            case 'multiplicar':
                $result= Calculadora::multiplicar($val1, $val2);
            break;

            case 'dividir':
                if($val2 == 0){
                    $error = 'Divisão por zero não permitida.';
                } else{
                    $result= Calculadora::dividir($val1, $val2);
                }
            break;
            default:
                $error= 'Operação desconhecida.';
        }
    }
}

    trataeMostra::exibirResultado($error, $operacao, $val1, $val2, $result);
?>
