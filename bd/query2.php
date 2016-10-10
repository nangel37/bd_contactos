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
	echo "<table border='1' cellpadding='10'>";
	echo "<tr><th>ID</th><th>Nome</th><th>Apelido</th><th>Telemovel</th></th></tr>";
   while ($row = $result->fetch_assoc()) {
   	echo "<tr>";
   		echo "<td>" . $row["id2"]. "</td>";
   		echo "<td>" . $row["nome"]. "</td>";
   		echo "<td>". $row["apelido"]. "</td>";
   		echo "<td>" . $row["telemovel"]. "</td>";
   		echo "<td><a href='editar.php?id2=" . $row["id2"]. "'>Edit</a></td>";
   		echo "</tr>";
   }
   echo "</table>";
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

