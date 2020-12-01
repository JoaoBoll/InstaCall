<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM aluno WHERE cpfAluno = :cpf AND idAluno != :matricula");

$query = $conn->prepare($sql);

$query->bindParam(':cpf',$_POST['cpf']);
$query->bindParam(':matricula',$_POST['matricula']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);