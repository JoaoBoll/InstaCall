<?php

require_once "../conexao.php";

$sql = ("SELECT n.idAtividade, n.nota, p.nomeProf, a.nomeAtividade, a.descricaoAtividade FROM notas AS n INNER JOIN atividade AS a ON a.idAtividade = n.idAtividade INNER JOIN professor AS p ON p.idTurma = a.idTurma WHERE n.idAluno = :idAluno AND n.idTurma = :idTurma");
$query = $conn->prepare($sql);

$query->bindParam(':idAluno',$_GET['idAluno']);
$query->bindParam(':idTurma',$_GET['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);
