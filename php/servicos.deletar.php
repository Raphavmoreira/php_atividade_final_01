<?php
    require_once("heroic.crud.php");
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);    
    if(apagarServicos($id))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: servicos.list.php?error=true');
    exit;