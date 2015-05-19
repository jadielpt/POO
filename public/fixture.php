<?php

use Classes\Crud;
use Classes\Conexao;
use Classes\Clientes;

function criarDb(){
   $dsn    = 'mysql:host=localhost';
   $user   = 'root';
   $pass   = '100731';
   $dbname = 'new';
   $table  = 'clientes';
   
   
   try {
     $pdo = new PDO($dsn,$user,$pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
     $pdo->query("use $dbname");
     print ("O banco de dados {$dbname} foi criado com sucesso! <br>");
     
     $tab1 = "CREATE table $table (
         id INT (10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
         nome          VARCHAR (250) NOT NULL,
         sobrenome     VARCHAR (250) NOT NULL,
         email         VARCHAR (250) NOT NULL,
         telefone      VARCHAR (250) NOT NULL,
         celuar        VARCHAR (250) NOT NULL,
         endereco      VARCHAR (250) NOT NULL,
         tipo          VARCHAR (250) NOT NULL,
         grau          VARCHAR (250) NOT NULL,
         endcobranca   VARCHAR (250) NOT NULL,
         telcontato    VARCHAR (250) NOT NULL)";
         
         $pdo->exec($tab1);
         print("A tabela {$table} foi criada com sucesso! <br>");
             
   } catch (PDOException $ex) {
        echo "ERROR: Não foi possível cadastrar dados no banco!";
        die("Código: {$ex->getCode()}<br> Mensagem: {$ex->getMessage()}<br> Arquivo {$ex->getFile()} <br> Linha: {$ex->getLine()}");
       
   }
   return $pdo;
}

criarDb();

$clientes = new Clientes("Jadiel", "Cordeiro Filho", "jadielpt@gmail.com", "84792286", "33628633", "Qno 13 Conj A", "Fisica", "5", "Qno 12 con b", "91294848");

$insert = new Crud(Conexao::getDb());
$insert->persist($clientes);
$insert->flush();