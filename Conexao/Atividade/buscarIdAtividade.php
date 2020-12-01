<?php
require_once "../conexao.php";

$sql = ("SELECT * FROM atividade WHERE idTurma = :idTurma AND idAtividade = :idAtividade");
$query = $conn->prepare($sql);
// var_dump($_GET['idTurma']);
$query->bindParam(':idTurma',$_POST['idTurma']);
$query->bindParam(':idAtividade',$_POST['idAtividade']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);