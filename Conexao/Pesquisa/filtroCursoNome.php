<?php
require_once "../conexao.php";

    $sql = ("SELECT curso.idCurso, curso.nomeCurso, curso.nivelCurso, instituicao.nomeInst, instituicao.logradouroInst, instituicao.bairroInst, instituicao.cidadeInst, instituicao.ufInst FROM curso, instituicao WHERE curso.nomeCurso LIKE :nome AND curso.idInst = instituicao.idInst");
    $query = $conn->prepare($sql);

    $query->bindParam(':nome',$_POST['nomeCurso']);

    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);