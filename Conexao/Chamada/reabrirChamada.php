<?php

require_once "../conexao.php";

$sql = ("UPDATE testeChamada SET teste = 1 WHERE dia = :dia AND idTurma = :idTurma");
$query = $conn->prepare($sql);

$query->bindParam(':idTurma',$_POST['idTurma']);
$query->bindParam(':dia',$_POST['data']);

$query->execute();

echo json_encode(["status"=>true]);