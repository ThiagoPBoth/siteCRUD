1<?php

    $conexao;

    function connect(){


        global $conexao;
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $base = "palimento";
        $conexao = mysqli_connect($servidor, $usuario, $senha, $base) or (mysqli_connect_error());
    }

    function query($sql){

        global $conexao;
        mysqli_query($conexao, "SET CHARACTER SET utf8");
        $query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        return $query;

    }

    function close(){

        global $conexao;
        mysqli_close($conexao);
        
    }


?>