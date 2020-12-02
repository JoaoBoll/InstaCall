<?php

require_once "../conexao.php";

try {

    $sql = ("INSERT INTO chamada (idTurma, idALuno, diaChamada, presenca) VALUES (:idTurma, :idAluno, :dia, 0)");

    $query = $conn->prepare($sql);

    $query->bindParam(':idTurma',$_POST['idTurma']);
    $query->bindParam(':idAluno',$_POST['idAluno']);
    $query->bindParam(':dia',$_POST['dia']);

    $query->execute();

    echo json_encode(["status"=>true]);

} catch (PDOException $e) {
    echo ("Erro " .$e->getMessage());
    echo json_encode(["status"=>false]);
}