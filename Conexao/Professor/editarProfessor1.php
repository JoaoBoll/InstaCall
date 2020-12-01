<?php

require_once "../conexao.php";

try{
    
  $sql = ("UPDATE professor SET nomeProf = :nome, cpfProf = :cpf, nascProf = :nasc, cepProf = :cep, ufProf = :uf, cidadeProf = :cidade, bairroProf = :bairro, logradouroProf = :logradouro, numProf = :num, formacaoProf = :formacao, nivelProf = :nivel, instituicaoProf = :nomeInst, idTurma = :idTurma, loginProf = :loginProf, senhaProf = :senhaProf  WHERE idProf = :matricula");

  $query = $conn->prepare($sql);
  
  
  $query->bindParam(':matricula',$_POST['matricula']);
  $query->bindParam(':nome',$_POST['nome']);
  $query->bindParam(':cpf',$_POST['cpf']);
  $query->bindParam(':nasc',$_POST['nascimento']);
  $query->bindParam(':cep',$_POST['cep']);
  $query->bindParam(':uf',$_POST['uf']);
  $query->bindParam(':cidade',$_POST['cidade']);
  $query->bindParam(':bairro',$_POST['bairro']);
  $query->bindParam(':logradouro',$_POST['logradouro']);
  $query->bindParam(':num',$_POST['numero']);
  $query->bindParam(':formacao',$_POST['formacao']);
  $query->bindParam(':nivel',$_POST['nivel']);
  $query->bindParam(':nomeInst',$_POST['nomeInst']);
  $query->bindParam(':idTurma',$_POST['idTurma']);
  $query->bindParam(':loginProf',$_POST['login']);
  $query->bindParam(':senhaProf',$_POST['senha']);

  $query->execute();

  echo json_encode(['status' =>true]);

} catch (PDOException $e) {
  echo ("Erro " .$e->getMessage());
  echo json_encode(['status'=>false]);
}