<?php

include "../model/crudUsuario.php";



switch ($_POST['opcao']) {
    case 'login':

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $result = login($_POST['nome']);


        foreach ($result as $linha);

            if($nome === $linha["nomeusuario"]){

                if (sha1($senha) === $linha['senhausuario']) {

                    session_start();
                    $_SESSION["codusuario"] = $linha['codusuario'];
                    $_SESSION["nome"] = $nome;
                    header("Location: ../view/visualizarEmpresa.php");
                } else {

                    echo "<script> alert('Senha Incorreta!'); </script>";
                    echo "<script> window.location = '../view/login.php' </script>";
                }
            } else {

                echo "<script> alert('Usuário Incorreto!'); </script>";
                echo "<script> window.location = '../view/login.php' </script>";
            }
        



        break;

    case 'cadastrar':

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        cadastrarUsuario($nome, sha1($senha));
        header("Location: ../view/login.php");

        break;

    case 'sair':
        session_start();
        session_destroy();
        echo '<script> alert("Saindo!") </script>';
        echo "<script> window.location = '../view/login.php' </script>";
        break;
}
