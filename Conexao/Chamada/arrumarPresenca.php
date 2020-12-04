<?php

require_once "../conexao.php";

try {
    $sql = ("UPDATE chamada SET presenca = 1 WHERE idTurma = :idTurma  AND idAluno = :matricula AND diaChamada = :dia");
    $query = $conn->prepare($sql);

    $query->bindParam(':idTurma',$_POST['idTurma']);
    $query->bindParam(':matricula',$_POST['matricula']);
    $query->bindParam(':dia',$_POST['dia']);

    $query->execute();

    echo json_encode(["status"=>true]);

} catch (PDOException $e) {
    echo ("Erro " .$e->getMessage());
    echo json_encode(["status"=>false]);
}