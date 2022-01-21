<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

class Iss implements Imposto
{

    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * .06;
    }
}