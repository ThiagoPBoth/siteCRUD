<?php

    include "conexaoBD.php";


    function cadastrarEmpresa($nome, $cnpj, $codusuario){

        connect();
        query("INSERT INTO empresa (nomeempresa, cnpj, codusuario) values ('$nome', '$cnpj', '$codusuario')");
        close();

    }

    function visualizarEmpresa($codUsuario){

        connect();
        $result = query("SELECT * FROM empresa WHERE codusuario = '$codUsuario'");
        close();
        return $result;


    }

    function buscarEmpresaEditar($codempresa){

        connect();
        $result = query("SELECT * FROM empresa WHERE codempresa = '$codempresa'");
        close();
        return $result;

    }

    function editarEmpresa($nome, $cnpj, $cod){

        connect();
        query("UPDATE empresa SET nomeempresa = '$nome', cnpj = '$cnpj' WHERE codempresa = '$cod'");
        close();

    }



    function excluirEmpresa($cod){

        connect();
        query("DELETE FROM empresa WHERE codempresa = '$cod'");
        close();


    }



?>