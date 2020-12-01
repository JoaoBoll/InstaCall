<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM professor WHERE loginProf = :loginProf AND idProf != :matricula");

$query = $conn->prepare($sql);

$query->bindParam(':loginProf',$_POST['login']);
$query->bindParam(':matricula',$_POST['matricula']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);