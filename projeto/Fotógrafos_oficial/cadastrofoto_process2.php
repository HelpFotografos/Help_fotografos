<?php
require_once('config.php');

try {

    if (isset($_POST['enviar'])) {

        $query = 'INSERT INTO cadastro SET nome_usuario=:nickname, nome_completo=:nome, telefone=:telefone, 
        cidade=:cidade, email=:email, senha=:senha, biografia=:biografia, 
        fotos_perfil=:fotos_perfil, fotos=:fotos, face=:face, insta=:insta, linkedin=:linkedin, cod_perfil=1';

        $submitData = $connection -> prepare($query);

        $nome_usuario = isset($_POST['nome_usuario']) ? trim(strip_tags(htmlspecialchars($_POST['nome_usuario']))) : '';
        $nomeCompleto = isset($_POST['nome_completo']) ? trim(strip_tags(htmlspecialchars($_POST['nome_completo']))) : '';
        $email = isset($_POST['email']) ? trim(strip_tags(htmlspecialchars($_POST['email']))) : '';
        $senha = isset($_POST['senha']) ? trim(strip_tags(htmlspecialchars($_POST['senha']))) : '';
        $telefone = isset($_POST['telefone']) ? trim(strip_tags(htmlspecialchars($_POST['telefone']))) : '';
        $cidade = isset($_POST['cidade']) ? trim(strip_tags(htmlspecialchars($_POST['cidade']))) : '';
        $biografia = isset($_POST['biografia']) ? trim(strip_tags(htmlspecialchars($_POST['biografia']))) : '';
        $fotosPerfil = $_POST['fotos_perfil'];
        $fotos = $_POST['fotos'];
        $facebook = isset($_POST['face']) ? trim(strip_tags(htmlspecialchars($_POST['face']))) : '';
        $instagram = isset($_POST['insta']) ? trim(strip_tags(htmlspecialchars($_POST['insta']))) : '';
        $linkedin = isset($_POST['linkedin']) ? trim(strip_tags(htmlspecialchars($_POST['linkedin']))) : '';

        $submitData -> bindValue(':nickname', $nome_usuario);
        $submitData -> bindValue(':nome', $nomeCompleto);
        $submitData -> bindValue(':telefone', $telefone);
        $submitData -> bindValue(':cidade', $cidade);
        $submitData -> bindValue(':email', $email);
        $submitData -> bindValue(':senha', $senha);
        $submitData -> bindValue(':biografia', $biografia);
        $submitData -> bindValue(':fotos_perfil', $fotosPerfil);
        $submitData -> bindValue(':fotos', $fotos);
        $submitData -> bindValue(':face', $facebook);
        $submitData -> bindValue(':insta', $instagram);
        $submitData -> bindValue(':linkedin', $linkedin);

        if ($submitData -> execute()) {

            session_start();

            $_SESSION['isLogged'] = true;
            $_SESSION['nome_usuario'] = $nome_usuario;
            $_SESSION['nome_completo'] = $nomeCompleto;
            $_SESSION['telefone'] = $telefone;
            $_SESSION['cidade'] = $cidade;
            $_SESSION['email'] = $email;
            $_SESSION['biografia'] = $biografia;
            $_SESSION['fotos_perfil'] = $fotosPerfil;
            $_SESSION['fotos'] = $fotos;
            $_SESSION['face'] = $facebook;
            $_SESSION['insta'] = $instagram;
            $_SESSION['linkedin'] = $linkedin;

            header('Location: pag_perfis.php');

        } else {

            print 'Erro';
            

        }

    }

} catch (PDOException $error) {

    print 'Conexão falhou! ' . $error -> getMessage();

}