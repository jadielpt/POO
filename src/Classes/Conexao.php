<?php

namespace Classes;
 
/**
 * Description of Conexao
 *
 * @Jadiel Cordeiro Filho
 */
class Conexao {
    
    private static $dsn = 'mysql:host=localhost;dbname=curso=new';
    private static $user = 'root';
    private static $password = '100731';
    
    private static function connection(){
        
        try {
            $pdo = new \PDO(self::$dsn, self::$username, self::$passwd, self::$options);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\PDOException $ex) {
            echo 'ERROR: Não foi possivel conectar ao banco de dados';
            die("Código: {$ex->getCode()} <br> Messagem: {$ex->getMessage()}<br> Arquivo: {$ex->getFile()} <br> linha: {$ex->getLine()}");
        }
    }
    
    public static function getDb(){
        return self::connection();
    }
}
