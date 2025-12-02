<?php

require_once 'Operacoes.php';

final class Subtrair extends Operacoes{

    public function calcula(): float{
        return $this->num1 - $this->num2;
    }
}
?>