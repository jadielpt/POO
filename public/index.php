
<?php

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . '/../src/pages/header.php';



$route = ltrim(filter_input(INPUT_SERVER, 'REQUEST_URI'), '/');

$pagina = strpos($route, "?") ? explode("?", $route)[0] : $route;
$permission = array('vizualizarCliente', 'index.php');

switch ($pagina) {
    case 'visualizarCliente':
        require_once __DIR__ . '/../src/pages/visualizarCliente.php';
        break;
    case in_array($pagina, $permission) != $permission:
        require_once __DIR__ . '/../src/pages/404.php';
        break;
    default:

        require_once __DIR__ . '/../src/pages/listaClientes.php';
}

require_once __DIR__ . '/../src/pages/footer.php';



