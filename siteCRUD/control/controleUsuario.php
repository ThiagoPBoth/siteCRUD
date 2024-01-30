<?php

    include "../model/crudUsuario.php";

    $loginD = $_POST['loginD'];
    $senha = $_POST['senha'];

    if(isset($_POST['opcao'])){

        switch ($_POST['opcao']){

            case 'login':
                
                $result = login($loginD, sha1($senha));
                foreach($result as $linha);

                if($loginD == $linha['loginD']){

                    if(sha1($senha) == $linha['senha']){

                        session_start();
                        $_SESSION['coddist'] = $linha['idD'];
                        $_SESSION['dist'] = $linha['loginD'];
                        header("Location: ../view/mostrarAlimento.php");

                    } else {

                        echo "<script> alert('Senha Incorreta!'); </script>";
                        echo "<script> window.location = '../view/login.php' </script>";

                    }
                    
                } else {

                    echo "<script> alert('Login da Distribuidora Incorreto!'); </script>";
                    echo "<script> window.location = '../view/login.php' </script>";

                }
                
                break;

                case 'sair':

                    session_start();
                    session_destroy();
                    echo '<script> alert("Saindo!") </script>';
                    echo "<script> window.location = '../view/login.php' </script>";

                    break;

        }

        


    }



?>