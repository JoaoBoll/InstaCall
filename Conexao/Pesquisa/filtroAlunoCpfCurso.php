<?php
require_once "../conexao.php";

    $sql = ("SELECT aluno.idAluno, aluno.nomeAluno, aluno.cpfAluno, aluno.nascAluno, aluno.logradouroAluno, aluno.numAluno, aluno.bairroAluno, aluno.cidadeAluno, aluno.ufAluno FROM aluno WHERE cpfAluno LIKE :cpf AND idCurso = :idCurso");
    $query = $conn->prepare($sql);

    $query->bindParam(':cpf',$_POST['cpf']);
    $query->bindParam(':idCurso',$_POST['idCurso']);

    $query->execute();

    $result = $query->fetchAll();
  
    echo json_encode($result);