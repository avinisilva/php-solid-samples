<?php

class ContaComum
{
    private $manipulador;

    public function __construct()
    {
        $this->manipulador = new ManipuladorDeSaldo();
    }

    public function saca(float $valor) : float
    {
        $this->manipulador->saca($valor);
    }

    public function deposita(float $valor)
    {
       $this->manipulador->deposita($valor);
    }

    public function rende()
    {
        $this->manipulador->rende();
    }

    public function getSaldo(): float
    {
        return $this->manipulador->getSaldo();
    }
}