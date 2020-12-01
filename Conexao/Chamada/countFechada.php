<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM testechamada WHERE idTurma = :idTurma AND dia = :dia AND teste = 1");
$query = $conn->prepare($sql);

$query->bindParam(':idTurma',$_POST['idTurma']);
$query->bindParam(':dia',$_POST['data']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);