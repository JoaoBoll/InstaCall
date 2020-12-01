<?php
require "../conexao.php";

$sql = ("SELECT turma.turno, curso.idCurso, curso.nomeCurso, curso.nivelCurso, instituicao.nomeInst, instituicao.cepInst, instituicao.ufInst, instituicao.cidadeInst, instituicao.logradouroInst, instituicao.bairroInst, instituicao.numInst FROM turma, curso, instituicao WHERE idTurma = :idTurma AND turma.idCurso = curso.idCurso AND curso.idInst = instituicao.IdInst");
$query = $conn->prepare($sql);

$query->bindParam(':idTurma',$_POST['idTurma']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);