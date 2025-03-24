<?php
 class Pessoa {
     public $nome;
     public function __construct($nome)
     {
         $this->nome = $nome;
     }
     public fuNction apresentar(){
         echo "Olá, sou {$this->nome}";
     }
 }
 // A classe Aluno Herda de Pessoa e sobrescreve o método apresentar
 
 class Aluno extends Pessoa{
     public function apresentar(){
         echo "Oi! Meu nome é {$this->nome} e sou aluno </br>";
     }
 }
 class Professor extends Pessoa{
     public function apresentar(){
         echo "Oi! Eu sou o Professor {$this->nome} </br>";
     }
 }
 $rayssa = new Aluno ("Rayssa", 19);
 $raul = new Professor("Raul", 36);
 
 
 echo $rayssa->apresentar();
 echo $raul->apresentar();
 ?>