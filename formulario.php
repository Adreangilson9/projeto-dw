<?php
$sql= "CREATE TABLE IF NOT EXISTS dados_formulario (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(30) N0T NULL, usuario VARCHAR(50), MENSAGEM TEXT)";
$host ='localhost/phpmyadmin';
$bd = 'clientes';
$senhabd ='root';
$userbd = $bd;

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"]

$conexao = mysql_connect($host, $bd, $senhabd);
if (!$conexao)
        die("Erro ".mysql_error());
$banco = mysql_select_db($bd, $conexao);
if (!$banco)
         die("Erro".mysql_error())

$query = "INSERT INTO 'clientes' ('nome', 'usuario', 'senha')
VALUES ($nome, $usuario, $senha, '')";
mysql_query($query, $conexao);
echo "CADASTRO REALIZADO COM SUCESSO"

