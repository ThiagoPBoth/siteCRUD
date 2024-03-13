<?php

    include "conexaoBD.php";

    function login($nome){

        connect();
        $result = query("SELECT * FROM usuario WHERE nomeusuario = '$nome'");
        close();
        return $result;

    }

    function cadastrarUsuario($nome, $senha){

        connect();
        query("INSERT INTO usuario (nomeusuario, senhausuario) VALUES ('$nome', '$senha')");
        close();

    }


?>