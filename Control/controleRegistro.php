<?php 

require('../Model/Registro.class.php');

if(isset($_POST['cadastrar_registro'])){
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$aluno = $_POST['aluno'];
$motivo = $_POST['motivo'];

echo $ano . '<br>';
echo $turma . '<br>';
echo $aluno . '<br>';
echo $motivo . '<br>';
}



































?>