<?php

require_once "../conexao.php";

$sql = ("SELECT n.idAtividade, n.nota,a.descricaoAtividade, p.nomeProf, c.nomeCurso, a.nomeAtividade FROM notas n, professor p, turma t, atividade a, curso c WHERE n.idAluno = :idAluno AND n.idTurma = :idTurma AND t.idCurso = c.idCurso AND n.idTurma = t.idTurma");
$query = $conn->prepare($sql);

$query->bindParam(':idAluno',$_GET['idAluno']);
$query->bindParam(':idTurma',$_GET['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);
