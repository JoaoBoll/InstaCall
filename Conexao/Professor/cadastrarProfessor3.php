<?php
require_once "../conexao.php";

try{
  $sql = ("INSERT INTO professor (nomeProf, cpfProf, nascProf, telProf, cepProf, ufProf, cidadeProf, bairroProf, logradouroProf, numProf, formacaoProf, nivelProf, instituicaoProf, idTurma, loginProf, senhaProf) VALUES (:nome, :cpf, :nasc, :tel, :cep, :uf, :cidade, :bairro, :logradouro, :num, :formacao, :nivel, :nomeInst, :idTurma, :loginProf, :senhaProf)");

  $query = $conn->prepare($sql);

  $query->bindParam(':nome',$_POST['nome']);
  $query->bindParam(':cpf',$_POST['cpf']);
  $query->bindParam(':nasc',$_POST['nascimento']);
  $query->bindParam(':tel',$_POST['telefone']);
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

}catch (PDOException $e) {
  echo ("Erro " .$e->getMessage());
  echo json_encode(['status' =>false]);
}