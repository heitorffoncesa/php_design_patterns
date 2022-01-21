<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

$imposto = new Icms();

echo $calculadora->calcular($orcamento, $imposto);