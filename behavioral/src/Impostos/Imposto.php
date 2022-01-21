<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

interface Imposto
{
    public function calcularImposto(Orcamento $orcamento): float;
}