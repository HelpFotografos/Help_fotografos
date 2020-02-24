<?php
require_once('config.php');

try {

    if (isset($_POST['enviar'])) {

        $query = 'INSERT INTO cadastro SET nome_usuario=:nickname, nome_completo=:nome, email=:email, senha=:senha, cod_perfil=0';
        $submitData = $connection -> prepare($query);

        $nome_usuario = trim(strip_tags(htmlspecialchars($_POST['nome_usuario'])));
        $nomeCompleto = trim(strip_tags(htmlspecialchars($_POST['nome_completo'])));
        $email = trim(strip_tags(htmlspecialchars($_POST['email'])));
        $senha = trim(strip_tags(htmlspecialchars($_POST['senha'])));

        $submitData -> bindValue(':nickname', $nome_usuario);
        $submitData -> bindValue(':nome', $nomeCompleto);
        $submitData -> bindValue(':email', $email);
        $submitData -> bindValue(':senha', $senha);

        if ($submitData -> execute()) {

            session_start();

            $_SESSION['isLogged'] = true;
            $_SESSION['nome_usuario'] = $nome_usuario;
            $_SESSION['email'] = $email;

            header('Location: pag_perfis.php');

        } else {

            print 'Erro';

        }

    }

} catch (PDOException $error) {

    print 'Conexão falhou! ' . $error -> getMessage();

}