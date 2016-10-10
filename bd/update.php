<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
include ("config.php");


$id2 = $_POST['id2'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telemovel = $_POST['telemovel'];

$sql = "UPDATE contactos SET nome = '$nome' , apelido = '$apelido' , telemovel = '$telemovel' WHERE id2 = '$id2'";


//$sql = "UPDATE `contactos` SET `nome` = '$nome', `apelido` = '$apelido', `telemovel` = '$telemovel' WHERE `contactos`.`id2` = '$id2'";


if ($db->query($sql) === TRUE) {
    echo "registo editado";
} else {
    echo "Erro: " . $db->error;
}

$db->close();


 ?>

<form action=index.php>
    <input type=submit value='Ok' />
</form>

 </body>
</html>