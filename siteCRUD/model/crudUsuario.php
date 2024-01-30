<?php

    include "conexaoBD.php";

    function login($loginD, $senha){

        connect();
        $result = query("SELECT * FROM distribuidora WHERE loginD = '$loginD'");
        close();
        return $result;

    }


?>