<?php

function getAcessosProfessor(){
    require('config.php');

    try{
        $sql = "SELECT quantidade FROM acessosprofessor WHERE id = '1'"; 
        $qtd = $pdo->query($sql);

        $quantidade = $qtd->fetch(PDO::FETCH_ASSOC);

        if($quantidade > 0){
            return $quantidade['quantidade'];
        }

    }catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
    }
}

function getAcessosAluno(){
    require('config.php');

    try{
        $sql = "SELECT quantidade FROM acessosaluno WHERE id = '1'"; 
        $qtd = $pdo->query($sql);
        
        $quantidade = $qtd->fetch(PDO::FETCH_ASSOC);

        if($quantidade > 0){
            return $quantidade['quantidade'];
        }

       

    }catch(PDOException $e){
        echo "Falhou: ".$e->getMessage();
    }
}