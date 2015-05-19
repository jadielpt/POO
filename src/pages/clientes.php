<?php

use Classes\Conexao;
use Classes\Crud;

$clientes = new Crud(Conexao::getDb());
$dados = $clientes->read();
