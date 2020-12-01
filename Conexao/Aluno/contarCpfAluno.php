<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM aluno WHERE cpfAluno = :cpf");

$query = $conn->prepare($sql);

$query->bindParam(':cpf',$_POST['cpf']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);