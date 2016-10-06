<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
include ("config.php");

$sql = "SELECT * FROM contactos";
$result = $db->query($sql);

if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
   		echo $row["nome"]. " " . $row["apelido"]. " " . $row["telemovel"] . "<br>";
   }
} else {
    echo "no results";
}

$db->close();
 ?>

<form action=index.php method=get >
    <input type=submit value='Voltar' />
</form>

</body>
</html>

