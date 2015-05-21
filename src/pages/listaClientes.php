

<h1>Lista de Clientes</h1>

<div class="jumbotron">

    <?php
    $reverseSort = filter_input(INPUT_POST, 'dec');
    if ($reverseSort) {
        krsort($dados);
    }
    ?>

    <form method="post">
        <button class="btn btn-warning" type="submit" value="cres" name="cres">Ordem Crescente</button>
        <button class="btn btn-warning " type="submit" value="dec" name="dec">Ordem Decrescente</button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>COD</th>
                <th>NOME</th>
                <th>SOBRENOME</th>
                <th>E-MAILL</th>
                <th>TELEFONE</th>
                <th>FÍSICA|JÚRIDICA</th>
                <th>NÍVEL</th>
                <th>VISUALIZAR</th>
                <th>ALTERAR</th>
                <th>DELETAR</th>                         

            </tr>

        </thead>
        <tbody>
            <?php
            foreach ($dados as $key => $value) {
                ?>
                <tr>
                    <td><?php echo $value["id"]; ?></td>
                    <td><?php echo $value["nome"]; ?></td>
                    <td><?php echo $value["sobrenome"]; ?></td>
                    <td><?php echo $value["email"]; ?></td>
                    <td><?php echo $value["telefone"]; ?></td>
                    <td><?php echo $value["tipo"]; ?></td>
                    <td><?php echo $value["grau"]; ?></td>
                    <td><a href="visualizarCliente?id=<?php echo $value->getId(); ?>"><button class="btn btn-info " type="submit" name="visualizar" >Visualizar</button></a></td>
                    <td><a href="#"><button class="btn btn-primary disabled" type="submit" name="alterar" >Alterar</button></a></td>
                    <td><a href="#"><button class="btn btn-danger disabled" type="submit" name="deletar">Deletar</button></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>



