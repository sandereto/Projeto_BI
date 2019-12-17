<?php
function conecta( $maquina , $usuario, $senha, $banco, $sql )
{
	error_reporting(0);
    $conexao = mysqli_connect($maquina,$usuario,$senha) or die("<!DOCTYPE html><html lang='pt-br'><head><meta charset='utf-8'/><title>Erro Banco</title></head><body><h3>001-Erro na conexao</h3></body></html>"); 
	//$charset=mysql_set_charset($conexao,"utf8");
	$db = mysqli_select_db($banco,$conexao) or die("<!DOCTYPE html><html lang='pt-br'><head><meta charset='utf-8'/><title>Erro Banco</title></head><body><h3>002-Erro na selecao do banco</body></html>");
	$resultado = mysqli_query($sql,$conexao) or die("<!DOCTYPE html><html lang='pt-br'><head><meta charset='utf-8'/><title>Erro Banco</title></head><body><h3>001-Erro na query</body></html>");
	mysqli_close($conexao);
	return $resultado;
}
?>
