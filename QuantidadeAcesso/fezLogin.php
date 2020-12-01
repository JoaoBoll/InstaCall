<?php
require('acessos.php');
require('dao/getacesso.php');
require('dao/addacesso.php');

$quantidadeProf = getAcessosProfessor();
$quantidadeAluno = getAcessosAluno();


$professor = new Acessos("Professor", $quantidadeProf);
$aluno = new Acessos("Aluno", $quantidadeAluno);

$addAcesso = filter_input(INPUT_POST,'add');
$verAcesso = filter_input(INPUT_POST,'ver');
$tipo = filter_input(INPUT_POST, 'tipo');


if ($addAcesso){
    if ($tipo == "Aluno"){
        $aluno->addQuantidade();
        addQuantAcessoAluno($aluno->getQuantidade());
    }else if ($tipo == "Professor"){
        $professor->addQuantidade();
        addQuantAcessoProfessor($professor->getQuantidade());
    }
   
}
if ($verAcesso){
    if ($tipo == "Aluno"){
        echo $aluno->getQuantidade();
    }else if ($tipo == "Professor"){
        echo $professor->getQuantidade();
    }
    
}