<?php


 function addQuantAcessoAluno($qtd){
    require('config.php');
    
    
    try{
        $sql = "UPDATE acessosaluno SET quantidade = '".$qtd."' WHERE id = 1";
        $sql = $pdo->query($sql);

     }catch(PDOException $e){
         echo "Falhou: ".$e->getMessage();
     }
 }

 function addQuantAcessoProfessor($qtd){
    require('config.php');
    
    
    try{
        $sql = "UPDATE acessosprofessor SET quantidade = '".$qtd."' WHERE id = 1";
        $sql = $pdo->query($sql);
        
     }catch(PDOException $e){
         echo "Falhou: ".$e->getMessage();
     }
 }