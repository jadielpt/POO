<?php

namespace Classes;

/**
 * Classe para cadastrar clientes
 *
 * Jadiel Cordeiro Filho
 */
class Clientes {
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $cpf;
    private $telefone;
    private $celular;
    private $endereco;
    
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
    
}


