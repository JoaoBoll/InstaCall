<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM professor WHERE idProf != :matricula AND cpfProf = :cpf");

$query = $conn->prepare($sql);

$query->bindParam(':matricula',$_POST['matricula']);
$query->bindParam(':cpf',$_POST['cpf']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);