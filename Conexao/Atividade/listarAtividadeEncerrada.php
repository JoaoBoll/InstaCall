<?php
require "../conexao.php";

$sql = ("SELECT atividade.idAtividade, atividade.nomeAtividade, atividade.descricaoAtividade, atividade.dataLimite, curso.nomeCurso, professor.nomeProf FROM professor, atividade, curso, turma WHERE turma.idTurma = :idTurma AND turma.idCurso = curso.idCurso AND professor.idTurma = turma.idTurma and atividade.teste = 0");
$query = $conn->prepare($sql);
// var_dump($_GET['idTurma']);
$query->bindParam(':idTurma',$_GET['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);