<?php
// include database connection
include 'config.php';
session_start();

try {
// get record ID
// isset() is a PHP function used to verify if a value is there or not
$cod_usuario = isset($_GET['cod_usuario']) ? $_GET['cod_usuario'] : die('ERROR: Record ID not found.');
// delete query
$query = "DELETE FROM cadastro WHERE cod_usuario = ?";
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $cod_usuario);
if($stmt->execute()){
// redirect to read records page and
// tell the user record was deleted
header('Location: w3.html?acao=deleted');
}else{
die('Não foi possível excluir o registro.');
}
}
// show error
catch(PDOException $exception){
die('ERROR: ' . $exception->getMessage());
}
?>


