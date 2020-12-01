<?php

require_once "../conexao.php";

$sql = ("SELECT COUNT(*) AS total FROM curso WHERE idInst = :idInst AND nomeCurso = :curso AND nivelCurso = :nivel AND idCurso != :idCurso");

$query = $conn->prepare($sql);

$query->bindParam(':idCurso',$_POST['idCurso']);
$query->bindParam(':curso',$_POST['curso']);
$query->bindParam(':nivel',$_POST['nivel']);
$query->bindParam(':idInst',$_POST['idInst']);

$query->execute();

$result = $query->fetchObject();

echo json_encode($result);
