<?php

class Musica {

    private $nome;
    private $vezesTocada;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->vezesTocada = 0;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getVezesTocada() {
        return $this->vezesTocada;
    }

    public function tocar() {
        $this->vezesTocada++;
        echo "Tocando música: " . $this->getNome() . "<br>";
    }

    public function __toString() {
        return $this->nome;
    }

}