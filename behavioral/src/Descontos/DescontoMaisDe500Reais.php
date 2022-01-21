<?php


namespace Alura\DesignPattern\Descontos;


use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500)
            return $orcamento->valor * .05;

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}