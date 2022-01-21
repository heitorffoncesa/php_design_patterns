<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * .02;
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}