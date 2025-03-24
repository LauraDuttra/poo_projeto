<?php
class Pessoa {
    public $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function apresentar(){
        echo "Olá, sou {$this->nome}";
    }
}
//a classe herda de pessoa e sobrescreve o método apresentar

class Aluno extends Pessoa{
    public function apresentar(){
        echo "Oi! Meu nome é {$this->nome} e sou aluno";
    }
}

class Professor extends Pessoa{
    public function apresentar(){
        echo "Oi! Eu sou o Professor {$this->nome}";
    }
}

$laurinha = new Aluno ("Laurinha", 17);
$monserat = new Professor ("Monserat", 37);

echo $laurinha->apresentar();
echo $monserat->apresentar();

?>