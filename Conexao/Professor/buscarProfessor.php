<?php

require_once "../conexao.php";
session_start();

$sql = ("SELECT professor.idProf, professor.nomeProf, professor.cpfProf, professor.nascProf, professor.telProf, professor.celProf, professor.cepProf, professor.ufProf, professor.cidadeProf, professor.bairroProf, professor.logradouroProf, professor.numProf, professor.formacaoProf, professor.nivelProf, professor.instituicaoProf, professor.idTurma, curso.nomeCurso, turma.turno, professor.loginProf, professor.senhaProf FROM professor, curso, turma WHERE loginProf = :email AND senhaProf = :senha AND turma.idturma = professor.idTurma AND curso.IdCurso = turma.idCurso");

$query = $conn->prepare($sql);

$query->bindParam(':email',$_SESSION['loginGlobal']);
$query->bindParam(':senha',$_SESSION['senhaGlobal']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);