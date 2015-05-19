<?php

namespace Classes\Abstracts;
use Classes\Conexao;
/**
 * Description of DbAbstract
 *
 * @Jadiel Cordeiro Filho
 */
class DbAbstract extends Conexao {
    
    protected static $tabela;
    
    public function read(){
        $pdo = parent::getDb();
        
        try{
          $listar = $pdo->prepare("SELECT * FROM".self::$tabela);
          $listar->execute();
          $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
          
        } catch (\PDOException $ex) {
            echo "ERROR: Não foi possível listar dados do banco";
            die("Código: {$ex->getCode()} <br>Mensagem : {$ex->getMessage()} <br> Arquivo: {$ex->getFile()} <br> Linha:{$ex->getLine()}");
        }
        return $dados;
    }
}
