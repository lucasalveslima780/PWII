<?php
require_once 'pessoa.php';
require_once 'corredor.php';
require_once 'nadador.php';

$corredor = new corredor ("Nicolas", "17", 3);
$nadador = new nadador("Larissa", "16", 8);

echo "<h3>Lista de corredores</h3>";
echo $corredor->exibirInformacoes() . "<br>";
echo $corredor->correr() . "<br><br>";

echo "<h3>Lista de Nadadores</h3>";
echo $nadador->exibirInformacoes() . "<br>";
echo $nadador->nadar() . "<br><br>";
?>