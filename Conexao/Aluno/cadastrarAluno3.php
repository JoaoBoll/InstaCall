<?php

require_once "../conexao.php";

try{
  $sql= "INSERT INTO aluno (nomeAluno, cpfAluno, nascAluno, celAluno, cepAluno, ufAluno, cidadeAluno, bairroAluno, logradouroAluno, numAluno, idTurma, loginAluno, senhaAluno) VALUES (:nome, :cpf, :nasc, :cel, :cep, :uf, :cidade, :bairro, :logradouro, :num, :idTurma, :loginAluno, :senhaAluno)";

  $query = $conn->prepare($sql);

  $query->bindParam(':nome',$_POST['nome']);
  $query->bindParam(':cpf',$_POST['cpf']);
  $query->bindParam(':nasc',$_POST['nascimento']);
  $query->bindParam(':cel',$_POST['celular']);
  $query->bindParam(':cep',$_POST['cep']);
  $query->bindParam(':uf',$_POST['uf']);
  $query->bindParam(':cidade',$_POST['cidade']);
  $query->bindParam(':bairro',$_POST['bairro']);
  $query->bindParam(':logradouro',$_POST['logradouro']);
  $query->bindParam(':num',$_POST['numero']);
  $query->bindParam(':idTurma',$_POST['idTurma']);
  $query->bindParam(':loginAluno',$_POST['login']);
  $query->bindParam(':senhaAluno',$_POST['senha']);

  $query->execute();

  echo json_encode(['status'=>true]);
} catch (PDOException $e) {
  echo ("Erro ".$e->getMessage());
  echo json_encode(['status'=>false]);
}