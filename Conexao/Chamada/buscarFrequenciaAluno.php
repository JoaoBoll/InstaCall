<?php

require_once "../conexao.php";

$sql = ("SELECT c.diaChamada, c.presenca, cur.nomeCurso FROM chamada c, curso cur, turma t WHERE c.idTurma = :idTurma AND c.idAluno = :idAluno AND t.idCurso = cur.idCurso AND c.idTurma = t.idTurma;");

$query = $conn->prepare($sql);

$query->bindParam(":idTurma", $_GET['idTurma']);
$query->bindParam(":idAluno", $_GET['idAluno']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);