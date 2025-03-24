<?php
 abstract class Pessoa{
     public $nome;
 
     public function __construct($nome){
         $this->nome=$nome;
     }
 }
 
 class Aluno extends Pessoa{
 }
 $laura = new Aluno ( "laura" );
 echo $sarah->nome . "É ele";
 
 ?>