<!DOCTYPE html>
<html>
<head>
<title>Help!Fotógrafos</title>
</head>
<body>
<form action="cadastrofoto_process2.php" method="post">
<h2>Login</h2>
<?php
//Database connection details to mySQL
$host = 'localhost'; 
$user = 'aluno'; 
$passw = 'aluno'; 
$dbname = 'help_fotografos';

//Make a connection to the database
$conn = mysqli_connect($host, $user, $passw, $dbname) or die("Unable to connect!");
//Create the SQL query
$query = "SELECT nome_usuario, nome_completo, telefone, email, senha, biografia, fotos FROM cadastro ORDER BY nome_usuario ASC";
$result = mysqli_query( $conn, $query ) or die ("Error in query");

//Fetch the result into an associative array
while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; //add each row into the table array
}

?>
<table>
<tr>
<td><strong>Nome do Usuário</strong></td>
<td width="20">&nbsp;</td>
<td><strong>Nome Completo</strong></td>
<td width="20">&nbsp;</td>
<td><strong>Telefone</strong></td>
<td width="20">&nbsp;</td>
<td><strong>E-mail</strong></td>
<td width="20">&nbsp;</td>
<td><strong>Biografia</strong></td>
<td width="20">&nbsp;</td>
<td><strong>Potifólio</strong></td>
<td width="20">&nbsp;</td>
<td><strong>Senha</strong></td>

</tr>
<?php

if ($table) { //Check if there are any rows to be displayed
//Retrieve each element of the array
foreach($table as $d_row) {

?>
<tr>
<td><?php echo($d_row["nome_usuario"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nome_completo"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["telefone"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["biografia"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["fotos"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["senha"]); ?></td>
</tr>

<?php

}
}

?>
</table>
<p>Número de Registros : <?php echo(mysqli_num_rows($result)); ?></p>

<?php

mysqli_close($conn);

?>
</body>
</html>