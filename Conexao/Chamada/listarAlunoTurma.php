<?php

require_once "../conexao.php";

$sql = ("SELECT a.idAluno FROM aluno a WHERE idTurma = :idTurma");
$query = $conn->prepare($sql);

$query->bindParam(':idTurma',$_POST['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);