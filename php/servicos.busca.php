<?php

    include_once("heroic.crud.php");

    session_start();
    
    if(filter_input(INPUT_GET, 'id') !== null) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['servicos_dados'] = localizaServicosPeloID($id);
    } else {
        $_SESSION['servicos_lista'] = listaServicos();
    }