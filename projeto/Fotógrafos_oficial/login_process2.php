<?php

require_once('config.php');

try {
	if (isset($_POST['submit'])) {
		$query = 'SELECT nome_usuario, nome_completo, email, cod_usuario, cod_perfil FROM cadastro WHERE nome_usuario=:usuario AND senha=:senha';

		$submitData = $connection -> prepare($query);

		$nome_usuario = isset($_POST['nome_usuario']) ? trim(strip_tags(htmlspecialchars($_POST['nome_usuario']))) : '';
		$senha = isset($_POST['senha']) ? trim(strip_tags(htmlspecialchars($_POST['senha']))) : '';

		$submitData -> bindParam(':usuario', $nome_usuario);
		$submitData -> bindParam(':senha', $senha);

		// executa a query
		$submitData -> execute();

		// conta a quantidade de linhas que foi atingida
		$userAmount = $submitData -> rowCount();
		// usa o fetch para pegar todos os usuários com dados correspondentes
		$user = $submitData -> fetch(PDO::FETCH_ASSOC);
		if ($userAmount > 0) {
			session_start();

			$_SESSION['isLogged'] = true;
			$_SESSION['nome_usuario'] = $user['nome_usuario'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['cod_usuario'] = $user['cod_usuario'];
			header('Location: pag_perfis.php');
		} 
	}
} catch (PDOException $error) {
	print 'Conexão falhou! ' . $error -> getMessage();
}

?>