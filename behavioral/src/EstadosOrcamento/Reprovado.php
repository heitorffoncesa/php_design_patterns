<?php


namespace Alura\DesignPattern\EstadosOrcamento;


use Alura\DesignPattern\Orcamento;
use Exception;

class Reprovado extends EstadoOrcamento
{
    /**
     * @throws Exception
     */
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new Exception("Um orçamento reprovado não pode receber desconto");
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}