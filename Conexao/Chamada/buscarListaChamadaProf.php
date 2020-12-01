<?php

require_once "../conexao.php";

$sql = ("SELECT tst.idTurma, tst.dia, tst.teste, c.nomeCurso FROM testechamada tst, curso c, turma t WHERE t.idTurma = tst.idTurma AND t.idCurso = c.idCurso AND tst.idTurma = :idTurma ORDER BY tst.teste DESC");

$query = $conn->prepare($sql);

$query->bindParam(":idTurma", $_GET['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);