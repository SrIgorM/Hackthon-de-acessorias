<<?php  
$dbhost = "localhost";
$dbUsername = "root";
$dbpassword = "root";
$dbname = "Livros-em-aberto";

$conexao= new mysqli($dbhost,$dbUsername,$dbpassword,$dbname);

if(conexao>conect_erro)
{
print "erro";
}
else
print "conexão efetuada com sucesso"

?>
