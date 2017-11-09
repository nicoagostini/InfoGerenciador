<?php

class lc{
    private $idlc;
    private $descricao;
    private $data;
    
    public function getIdlc(){
        return $this->idlc;
    }

    public function setIdlc($idlc){
        $this->idlc = $idlc;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }
}