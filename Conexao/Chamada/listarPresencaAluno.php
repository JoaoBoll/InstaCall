<?php

require_once "../conexao.php";

$sql= ("SELECT c.idTurma, c.idAluno, a.nomeAluno, c.diaChamada, c.presenca 
FROM chamada AS c
INNER JOIN aluno AS a ON c.idTurma = a.idTurma AND c.idAluno = a.idAluno
WHERE c.idTurma = :idTurma ORDER BY c.diaChamada DESC");

$query = $conn->prepare($sql);

$query->bindParam(":idTurma",$_POST['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);