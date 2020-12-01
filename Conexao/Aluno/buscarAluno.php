<?php

require_once "../conexao.php";
session_start();

$sql = ("SELECT a.idAluno, a.nomeAluno, a.idTurma, c.nomeCurso FROM aluno a, curso c, turma WHERE a.loginAluno = :email AND senhaAluno = :senha AND turma.idturma = a.idTurma AND c.IdCurso = turma.idCurso;");

$query = $conn->prepare($sql);

$query->bindParam(':email',$_SESSION['loginGlobal']);
$query->bindParam(':senha',$_SESSION['senhaGlobal']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);