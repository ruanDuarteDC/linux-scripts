<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

ini_set("display_errors",1);
header('Content-Type: text/html; charset=iso-8859-1');


echo 'Versao atual do PHP:' .phpversion() . '<br>;

$servername = "34.201.104.100";
$username = "root";
$password = "Senha123";
$database = "meubanco";

//Criar conexao

$link = new mysqli($servername, $username, $passworf, $database);
/*chekc connection*/
if(musqli_connecr_erro()){
print("Conenct failed : %s/n", mysqli_connect_error());
}

$valor_rand1 = ran(1, 999);
$valor_rand2 = strtopper(substr(bin2hex(random_bytes(4)),1);
$host_name = gethostname();


$query = "INSERT INTO dados (AlinoID, Nome, Sobrenome, Endereco, Cidade, Host)Values($valor_rand1, $valor_rand2, $host_name)"

if($link->query($query)===TRUE){
echo "New record created successfully";
}else{
echo "Error: " . $link->error;
}

</body>
</html>
