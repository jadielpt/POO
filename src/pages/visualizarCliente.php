

<h1>Dados do Clientes</h1>
<div class="jumbotron"

<?php
    function findCliente($id, $arrayClientes) {
        foreach($arrayClientes as $cliente) {
            if($cliente->getId() == $id) {
                return $cliente;
            }
        }
    }
    
    $id = filter_input(INPUT_GET, 'id');
    if($id) {
        $cliente = findCliente($id, $clientes);
        echo "<h4>Código:<strong>{$cliente->getId()}</strong></h4>";
        echo "<h4>Nome:<strong>{$cliente->getNome()}</strong></h4>";
        echo "<h4>Sobrenome:<strong>{$cliente->getSobrenome()}</strong></h4>";
        echo "<h4>Email:<strong>{$cliente->getEmail()}</strong></h4>";
        echo "<h4>Cpf:<strong>{$cliente->getCpf()}</strong></h4>";
        echo "<h4>Telefone<strong>{$cliente->getTelefone()}</strong></h4>";
        echo "<h4>Celular<strong>{$cliente->getCelular()}</strong></h4>";
        echo "<h4>Endereco<strong>{$cliente->getEndereco()}</strong></h4>";
    }
    
      
?>

     <a href="index.php"><button class="btn btn-info">Voltar</button></a>
</div>
