<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;
use Exception;

class Finalizado extends EstadoOrcamento
{
    /**
     * @throws Exception
     */
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException("Um orçamento finalizado não pode receber desconto");
    }
}