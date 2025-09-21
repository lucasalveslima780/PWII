<?php
require_once 'pessoa.php';
require_once 'professor.php';
require_once 'aluno.php';
require_once 'funcionario.php';

$professor = new professor ("Pedro", "123.456.789.12", "12/34/5678", "001", "Português");
$aluno = new aluno ("João", "123.456.789.12", "12/34/5678", "001", "Psicologia");
$funcionario = new funcionario ("Maria", "123.456.789.12", "12/34/5678", "001", "Gerente de Marketing");

echo $professor->exibirInformacoes() . "<br>";
echo $aluno->exibirInformacoes() . "<br>";
echo $funcionario->exibirInformacoes() . "<br>";
?>