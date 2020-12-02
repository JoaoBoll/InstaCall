<?php
require "../conexao.php";

$sql = ("SELECT a.idAtividade, a.nomeAtividade, a.descricaoAtividade, a.dataLimite, c.nomeCurso, p.nomeProf, a.idTurma FROM professor p, atividade a, curso c, turma t WHERE a.idTurma = :idTurma AND a.idTurma = t.idTurma AND t.idCurso = c.idCurso AND p.idTurma = t.idTurma and a.teste = 1");
$query = $conn->prepare($sql);
// var_dump($_GET['idTurma']);
$query->bindParam(':idTurma',$_GET['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);