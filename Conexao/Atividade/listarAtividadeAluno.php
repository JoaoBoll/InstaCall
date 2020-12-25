<?php
require "../conexao.php";

$sql = ("SELECT a.idAtividade, a.nomeAtividade, a.descricaoAtividade, a.dataLimite, c.nomeCurso, p.nomeProf FROM atividade a INNER JOIN turma AS t ON t.idTurma = a.idTurma INNER JOIN curso AS c ON c.idcurso = t.idCurso INNER JOIN professor AS p ON p.idTurma = a.idturma WHERE a.idTurma = :idTurma AND a.teste = 1");
$query = $conn->prepare($sql);
// var_dump($_GET['idTurma']);
$query->bindParam(':idTurma',$_GET['idTurma']);

$query->execute();

$result = $query->fetchAll();

echo json_encode($result);