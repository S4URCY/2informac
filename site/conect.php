<?
$sevidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "aula";
//conectar ao servido de banco de dados.
$conecx�o = mysql_connect($sevidor,$usuario,$senha);
//conectar ao banco de dados
mysql_select_db($bd,$conecx�o); 

?>
