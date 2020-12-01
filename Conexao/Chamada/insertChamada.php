<?php

require_once "../conexao.php";

try {
    $sql = ("INSERT INTO testechamada (idturma, dia, teste) VALUES (:idTurma, :dia, 1)");
    $query = $conn->prepare($sql);
    
    $query->bindParam(':idTurma',$_POST['idTurma']);
    $query->bindParam(':dia',$_POST['data']);
    
    $query->execute();
    
    echo json_encode(["status"=>true]);
} catch (PDOException $e) {
    echo ("Erro " .$e->getMessage());
    echo json_encode(["status"=>false]);
}

