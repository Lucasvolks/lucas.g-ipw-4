<?php
include '2_trycatch.php';

$query ="insert into teste (nome, email) value (lucasG', 'lucas2gmail.com')";
$sql = $conexao->prepare($query);
$resutado = $sql->execute();
?>