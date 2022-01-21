<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * @throws DomainException
     */
    abstract public function calcularDescontoExtra(Orcamento $orcamento): float;

    public function aprovar(Orcamento $orcamento)
    {
        throw new DomainException("Este orçamento não pode ser aprovado");
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new DomainException("Este orçamento não pode ser reprovado");
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new DomainException("Este orçamento não pode ser finalizado");
    }
}