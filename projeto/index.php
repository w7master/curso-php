<?php

require_once ('./lib/config.php');
require_once ('./lib/banco.php');

require_once ('./cabecalho.php');

//  verifica se a pagina existe

$paginas = [
'login',
'registro'
];

if (isset($_GET['pagina']) && in_array($_GET['pagina'],$paginas)){
$pagina = $_GET['pagina'];
}else{
    $pagina = 'login';
}

session_start();

require_once ("./paginas/{$pagina}.php");

// chama o cabeçalho e rodape


require_once ('./rodape.php');

mysqli_close($conexao);