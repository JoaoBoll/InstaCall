<?php

require_once "../conexao.php";

try {
    $sql = ("UPDATE turma SET idCurso = :idCurso, turno = :turno WHERE idTurma = :idTurma");
    $query = $conn->prepare($sql);

    $query->bindParam(':idTurma',$_POST['idTurma']);
    $query->bindParam(':idCurso',$_POST['idCurso']);
    $query->bindParam(':turno',$_POST['turno']);

    $query->execute();

    echo json_encode(["status"=>true]);
} catch(PDOException $e) {
    echo ("Erro " .$e->getMessage());
    echo json_encode(["status"=>false]);
}
