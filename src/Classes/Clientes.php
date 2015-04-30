<?php

namespace Classes;
use Classes\interfaces\ClientesInterfaces;
/**
 * Classe para cadastrar clientes
 *
 * Jadiel Cordeiro Filho
 */
class Clientes implements ClientesInterfaces {
    protected $id;
    protected $nome;
    protected $sobrenome;
    protected $email;
    protected $cpf;
    protected $telefone;
    protected $celular;
    protected $endereco;
    protected $tipo;
    protected $grau;
    
    public function getId() {
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }
    
    public function setSobrenome($sobrenome){
        $this->sobrenome=$sobrenome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }

    public function getCpf(){
        return $this->cpf;
    }
    
    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;
    }
    
    public function getCelular(){
        return $this->celular;
    }
    
    public function setCelular($celular){
        $this->celular=$celular;
    }
    
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco=$endereco;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    
    public function getGrau(){
        return $this->grau;
    }
    
    public function setGrau($Grau){
        $this->grau=$Grau;
    }
}


