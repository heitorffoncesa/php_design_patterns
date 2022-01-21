<?php


namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icms implements Imposto
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * .1;
    }
}