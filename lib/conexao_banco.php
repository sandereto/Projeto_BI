<?php 
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','#');



//Cria conexão com banco de dados
$conexao = mysqli_connect(HOST, USUARIO ,SENHA , DB) or die ('Sem conexão');




//Função que retorna conexão com banco de dados
function buscaconexao(){
$conexao = mysqli_connect(HOST, USUARIO ,SENHA , DB) or die ('Sem conexão');

return $conexao;
}

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';', USUARIO, SENHA);

?>