<?php
//if(isset($_POST['id']){}
 // if($_POST['id'] != ""){}
  require "../conexao.php";
  
  $sql = ("SELECT curso.nomeCurso, curso.nivelCurso, instituicao.idInst, instituicao.nomeInst, instituicao.cepInst, instituicao.ufInst, instituicao.cidadeInst, instituicao.logradouroInst, instituicao.bairroInst, instituicao.numInst FROM curso, instituicao WHERE curso.idCurso = :id AND curso.idInst = instituicao.IdInst");
  $query = $conn->prepare($sql);
  $query->bindParam(':id',$_POST['id']);
  $query->execute();

  $result = $query->fetchObject();
  
  echo json_encode($result);