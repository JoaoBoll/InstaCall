<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM professor WHERE loginProf = :login");

$query = $conn->prepare($sql);

$query->bindParam(':login',$_POST['login']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);