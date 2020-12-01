<?php
require_once "../conexao.php";

try {
  $sql = ("INSERT INTO instituicao (nomeInst,cnpjInst, cepInst, ufInst, cidadeInst, bairroInst, logradouroInst, numInst) VALUES (:nomeInst, :cnpj, :cep, :uf, :cidade, :bairro, :logradouro, :numInst)");

  $query = $conn->prepare($sql);
  
  $query->bindParam(':nomeInst',$_POST['nomeInst']);
  $query->bindParam(':cnpj',$_POST['cnpj']);
  $query->bindParam(':cep',$_POST['cep']);
  $query->bindParam(':uf',$_POST['uf']);
  $query->bindParam(':cidade',$_POST['cidade']);
  $query->bindParam(':bairro',$_POST['bairro']);
  $query->bindParam(':logradouro',$_POST['logradouro']);
  $query->bindParam(':numInst',$_POST['numInst']);

  $query->execute();

  echo json_encode(['status'=>true]);

} catch (PDOException $e) {
  echo ('Erro' . $e->getMessage());
  echo json_encode(['status'=>false]);
}
