<?php

require_once "../conexao.php";

$sql = ("SELECT c.idTurma, a.nomeAluno, c.diaChamada, c.presenca, cur.nomeCurso FROM aluno a,chamada c, curso cur, turma t, professor p WHERE t.idTurma = c.idTurma AND t.idCurso = cur.idCurso AND p.idTurma = t.idTurma AND a.idTurma = c.idTurma AND c.idAluno = :idAluno AND c.idTurma = :idTurma");

$query = $conn->prepare($sql);

$query->bindParam(":idTurma", $_GET['idTurma']);
$query->bindParam(":idAluno", $_GET['idAluno']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);