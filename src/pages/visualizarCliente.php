

<h1>Dados do Clientes</h1>
<div class="col-md-12"

<?php
    
       if(isset($_GET)) {
        
        $id = array_keys($_GET);
         
        foreach ($id as $key => $value){
            $valor = $value -1;
  
        echo "<h4>Código:<strong>".$dados[$valor]['id']."</strong></h4>";
        echo "<h4>Nome:<strong>".$dados[$valor]['nome']."</strong></h4>";
        echo "<h4>Sobrenome:<strong>".$dados[$valor]['sobrenome']."</strong></h4>";
        echo "<h4>Email:<strong>".$dados[$valor]['email']."</strong></h4>";
        echo "<h4>Cpf|Cnpj:<strong>".$dados[$valor]['cpf']."</strong></h4>";
        echo "<h4>Telefone:<strong>".$dados[$valor]['telefone']."</strong></h4>";
        echo "<h4>Celular:<strong>".$dados[$valor]['celular']."</strong></h4>";
        echo "<h4>Endereco:<strong>".$dados[$valor]['endereco']."</strong></h4>";
        
        echo "<h4>Endereço de entrega:<strong>".$dados[$valor]['EndCobranca']."</strong></h4>";
        echo "<h4>Telefone de Referecia::<strong>".$dados[$valor]['TelContato']."</strong><h4>";
        }
         
    }
?>

     <a href="index.php"><button class="btn btn-info">Voltar</button></a>
</div>
