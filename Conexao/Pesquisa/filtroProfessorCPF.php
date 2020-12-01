<?php
require_once "../conexao.php";

    $sql = ("SELECT professor.idprof, professor.nomeProf, professor.cpfProf, professor.nascProf, professor.logradouroProf, professor.numProf, professor.bairroProf, professor.cidadeProf, professor.ufProf FROM professor WHERE cpfProf LIKE :cpf");
    $query = $conn->prepare($sql);

    $query->bindParam(':cpf',$_POST['cpf']);

    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);