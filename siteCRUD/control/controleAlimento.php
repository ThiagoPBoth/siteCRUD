<?php

    include "../model/crudAlimento.php";

    switch ($_POST['opcao']){

        case 'editar':
            $codA = $_POST['idA'];
            $descricao = $_POST['descricao'];
            $cep = $_POST['cep'];

            editarAlimento($codA, $descricao, $cep);
            header("Location: ../view/mostrarAlimento.php");
            break;
    }

?>