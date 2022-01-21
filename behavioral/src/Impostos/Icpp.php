<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas implements Imposto
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .03;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * .02;
    }
}