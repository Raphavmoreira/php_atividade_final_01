<?php
require_once("conexao.php");

// Funções de Criar
function cadastrarServicos($imagem, $titulo, $descricao) 
{
    $con = getConnection();
    $sql = "INSERT INTO servicos (imagem, titulo, descricao) VALUES (:imagem, :titulo, :descricao)";
    $result = $con->prepare($sql);
    $result->bindParam(":imagem", $imagem);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Listar
function listaServicos()
{
    $con = getConnection();
    $sql = "SELECT * FROM servicos";
    $result = $con->query($sql);
    $listaServico = array();
    while($servicos = $result->fetch(PDO::FETCH_OBJ))
    {
        array_push($listaServico, $servicos);
    }
    unset($con);
    unset($result);
    return $listaServico;
}

// Funções de Atualizar
function atualizarServicos($id, $imagem, $titulo, $descricao) 
{
    $con = getConnection();
    $sql = "UPDATE servicos SET imagem = :imagem, titulo =:titulo, descricao =:descricao WHERE id=:id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $result->bindParam(":imagem", $imagem);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Deletar
function apagarServicos($id) 
{
    $con = getConnection();
    $sql = "DELETE FROM servicos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Localizar
function localizaServicosPeloID($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM servicos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    $servico = $result->fetch(PDO::FETCH_OBJ);
    unset($con);
    unset($result);
    return $servico;
}