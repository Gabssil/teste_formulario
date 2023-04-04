<?php

class pessoa{

    private $nome;
    private $telefone;
    private $origem;
    private $datadecontato;
    private $observacao;
    
    //nome
    public function getNome(){
        return $this -> nome;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }

    //endereço
    public function getTelefone(){
        return $this -> telefone;
    }
    public function setTelefone($telefone){
        $this -> telefone = $telefone;
    }

    //bairro
    public function getOrigem(){
        return $this -> origem;
    }
    public function setOrigem($origem){
        $this -> origem = $origem;
    }

    //cep
    public function getDatadecontato(){
        return $this -> datadecontato;
    }
    public function setDatadecontato($datadecontato){
        $this -> datadecontato = $datadecontato;
    }

    //cidade
    public function getObservacao(){
        return $this -> observacao;
    }
    public function setObservacao($observacao){
        $this -> observacao = $observacao;
    }
    }

?>