<?php
 
 // Classe base abstrata
 abstract class Pessoa {
     public $nome;
 
     public function __construct($nome) {
         $this->nome = $nome;
     }
 }
 
 // Classe Aluno herda de Pessoa
 class Aluno extends Pessoa {}
 
 // Criando objeto
 $rafael = new Aluno("Rafael");
 echo $rafael->nome . "\n"; // Rafael
 
 ?>
