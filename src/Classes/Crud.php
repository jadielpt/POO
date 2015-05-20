<?php

namespace Classes;
use Classes\Conexao;
use Classes\Abstracts\DbAbstract;
use Classes\Clientes;
/**
 * Description of Crud
 *
 * @Jadiel Cordeiro Filho
 */
class Crud {
  
    private $pdo;
    private $clientes=array();
    
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function persist(Clientes $clientes) {
        $this->clientes[] = $clientes;
    }
    
    public function flush(){
        foreach ($this->clientes as $clientes){
        
        try {
            $this->connect->beginTransaction();
            $cadastrar = "INSERT INTO clientes (nome,sobrenome,email,cpf,telefone,celular,endereco,tipo,grau) VALUES (:nome,:sobrenome,:email,:cpf,:telefone,:celular,:endereco,:tipo,:grau)";
            $dados = $this->connect->prepare($cadastrar);
            $dados->execute(array(
              "nome"       =>$clientes->getNome(),
              "sobrenome"  =>$clientes->getSobrenome(),
              "email"      =>$clientes->getEmail(),
              "cpf"        =>$clientes->getCpf(),
              "telefone"   =>$clientes->getTelContato(),
              "celular"    =>$clientes->getCelular(),
              "endereco"   =>$clientes->getEndereco(),
              "tipo"       =>$clientes->getTipo(),
              "grau"       =>$clientes->getGrau(),
              
            )
                    
                    );
            
          $this->connect->lastInsertId();
            
        } catch (\PDOException $ex) {
            echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$ex->getCode()}<br> Mensagem:{$ex->getMessage()}<br> Arquivo: {$ex->getFile()}<br> Linha: {$ex->getLine()}");
            
        }
        }
        return true;
    }
}
