<?php
Class Acessos{

    private $quantidade;
    private $tipo;

    function __construct($tpo,$qtd){
        $this->tipo = $tpo;
        $this->quantidade = $qtd;
    }

    public function addQuantidade(){
        $this->quantidade += 1;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }
}