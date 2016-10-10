<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Teste</title>
</head>
<body>

<form action="update.php" method="POST">
  Nome:<br>
  <input type="text" name="nome" value="">
  <br>
  Apelido:<br>
  <input type="text" name="apelido" value="">
  <br>
  Telemovel:<br>
  <input type="text" name="telemovel" value="">
  <br><br>
  <input type="hidden" name="id2" value="<?php echo $_GET['id2'] ?>">
  <input type="submit" value="Alterar">
</form>


</body>
</html>
