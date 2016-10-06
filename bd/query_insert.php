<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
include ("config.php");
//include ("index.php");

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telemovel = $_POST['telemovel'];

$sql = "INSERT INTO contactos (nome, apelido, telemovel)
VALUES ('$nome', '$apelido', '$telemovel')";

if ($db->query($sql) === TRUE) {
    echo "Registo inserido com sucesso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$db->close();

//body ("location: index.php");

 ?>

<form action=index.php>
    <input type=submit value='Ok' />
</form>

 </body>
</html>