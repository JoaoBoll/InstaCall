<?php

require_once "../conexao.php";

try {
    $sql = ("INSERT INTO chamada (idTurma, idAluno, diaChamada, presenca) VALUES (:idTurma, :idAluno, :diaChamada, 1)");
    $query = $conn->prepare($sql);
    
    $query->bindParam(':idTurma',$_POST['idTurma']);
    $query->bindParam(':idAluno',$_POST['idAluno']);
    $query->bindParam(':diaChamada',$_POST['data']);
    
    $query->execute();
    
    echo json_encode(["status"=>true]);
} catch (PDOException $e) {
    echo ("Erro " .$e->getMessage());
    echo json_encode(["status"=>false]);
}

