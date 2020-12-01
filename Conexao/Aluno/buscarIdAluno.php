<?php

require_once '../conexao.php';


$sql = ("SELECT aluno.nomeAluno, aluno.cpfAluno, aluno.nascAluno, aluno.telAluno, aluno.celAluno, aluno.cepAluno, aluno.ufAluno, aluno.cidadeAluno, aluno.logradouroAluno, aluno.bairroAluno, aluno.numAluno, aluno.idTurma, aluno.idTurma, curso.nomeCurso, turma.turno, curso.nivelCurso, aluno.loginAluno, aluno.senhaAluno FROM aluno, turma, curso WHERE aluno.IdAluno = :matricula AND curso.idCurso = turma.idCurso AND turma.idTurma = aluno.IdTurma");

$query = $conn->prepare($sql);

$query->bindParam(':matricula',$_POST['matricula']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);