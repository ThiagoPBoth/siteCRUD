<?php


    include "conexaoBD.php";

    function mostrarAlimento($cod){

        connect();
        $result = query("SELECT * FROM alimento WHERE idD = '$cod'");
        close();
        return $result;

    }

    function buscarAlimentoEditar($cod){
        connect();
        $result = query("SELECT * FROM alimento WHERE idA = '$cod'");
        close();
        return $result;
    }

    function editarAlimento($cod, $descricao, $cep){

        connect();
        query("UPDATE alimento SET descricao = '$descricao', cep = '$cep' WHERE idA = '$cod'");
        close();

    }

?>