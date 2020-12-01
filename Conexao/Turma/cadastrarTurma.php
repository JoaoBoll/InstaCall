<?php
require_once "../conexao.php";

try {

  $sql = "INSERT INTO turma (idCurso, turno) VALUES (:id, :turno)";
  $query = $conn->prepare($sql);

  $query->bindParam(':id', $_POST['id']);
  $query->bindParam(':turno', $_POST['turno']);

  $query->execute();

  echo json_encode(['status' =>true]);

} catch (PDOException $e){
  echo ("Erro " . $e->getMessage());
  echo json_encode(['status' =>false]);
}