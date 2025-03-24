<?php
 
 class Pessoa {
     public $nome;
     public $idade;
 
     public function __construct($nome, $idade)
     {
       $this->nome = $nome;
       $this->idade = $idade;  
     }
     public function apresentar(){
         echo "Olá, sou {$this->nome} e tenho {$this->idade}</br>";
 
     }
 
 }
 
 // A Classe Aluno herdar de Pessoas
 class Aluno extends Pessoa {
     public function estudar(){
     echo "{$this->nome} está estudando </br>";
     }
 }
 
 // A Classe Professor herda de Pessoas
 class Professor extends Pessoa {
     public function ensinar(){
     echo "O professor {$this->nome} está ensinando </br>";
     }
 }
 
 // Criando Objetos
 $isa = new Aluno ("Isa", 49);
 $nadja = new Professor("Nadja", 16);
 
 echo $isa->estudar();
 echo $isa->apresentar();
 echo $nadja->ensinar();
 echo $nadja->apresentar();
 ?>
