<?php

require_once '../conexao.php';

$sql = ("SELECT COUNT(*) AS total FROM notas WHERE idAtividade = :idAtividade AND idTurma = :idTurma AND idAluno = :idAluno");

$query = $conn->prepare($sql);
$query->bindParam(':idAtividade',$_POST['idAtividade']);
$query->bindParam(':idTurma',$_POST['turma']);
$query->bindParam('idAluno',$_POST['idAluno']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);

?>