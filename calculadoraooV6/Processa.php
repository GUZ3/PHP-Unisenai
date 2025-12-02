<?php

require_once 'Operacoes.php';
require_once 'Soma.php';
require_once 'Subtrair.php';
require_once 'Multiplicar.php';
require_once 'Dividir.php';
require_once 'TrataeMostra.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $valor1 = $_POST['valor1'] ?? '';
    $valor2 = $_POST['valor2'] ?? '';
    $operacao = $_POST['operacao'] ?? '';

    $val1 = TrataeMostra::parse_num($valor1);
    $val2 = TrataeMostra::parse_num($valor2);

    $result = null;
    $error = null;

    $oper = null;

    //verifica se há erro de entrada ou de operacão

    if ($val1 === null || $val2 === null) {

        $error = 'Entrada inválida. Certifica-se de informar números válidos.';
    } else {

        switch ($operacao) {
            case 'somar':
                $oper = new Soma();
                break;

            case 'subtrair':
                $oper = new Subtrair();
                break;

            case 'multiplicar':
                $oper = new Multiplicar();
                break;

            case 'dividir':
                if ($val2 == 0) {
                    $error = 'Não é permitido divisão por zero!';
                } else {
                    $oper = new Dividir();
                }

                break;



            default:
                $error = 'Operação desconhecida';
        }
        if ($error === null && $oper !== null) {
            $oper->setNum1($val1);
            $oper->setNum2($val2);
            $result = $oper->calcula();
        }
    }
    TrataeMostra::exibirResultado($error, $operacao, $val1, $val2, $result);
}
