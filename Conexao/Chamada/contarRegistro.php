<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM chamada WHERE idTurma = :idTurma AND diaChamada = :diaChamada AND idAluno = :idAluno AND presenca = 1");
$query = $conn->prepare($sql);

$query->bindParam(':idTurma',$_POST['idTurma']);
$query->bindParam(':idAluno',$_POST['idAluno']);
$query->bindParam(':diaChamada',$_POST['data']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);