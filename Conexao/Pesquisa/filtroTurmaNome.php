<?php
require_once "../conexao.php";

    $sql = ("SELECT turma.idTurma, turma.turno, curso.NomeCurso, curso.nivelCurso, instituicao.nomeInst, instituicao.logradouroInst, instituicao.bairroInst, instituicao.cidadeInst, instituicao.ufInst FROM curso, turma, instituicao WHERE curso.nomeCurso LIKE :nome AND turma.idCurso = curso.idCurso AND curso.idInst = instituicao.idInst");
    $query = $conn->prepare($sql);

    $query->bindParam(':nome',$_POST['nomeCurso']);

    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);