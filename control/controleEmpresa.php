<?php

include "../model/crudEmpresa.php";

if (isset($_GET['codigo'])) {
    excluirEmpresa($_GET['codigo']);
    header("Location: ../view/visualizarEmpresa.php");
} else {

    switch ($_POST['opcao']) {
        case 'cadastrar':

            $nome = $_POST['nomeempresa'];
            $cnpj = $_POST['cnpj'];
            $codusuario = $_POST['codusuario'];

            cadastrarEmpresa($nome, $cnpj, $codusuario);
            header("Location: ../view/visualizarEmpresa.php");
            break;

        case 'editar':

            $nome = $_POST['nomeempresa'];
            $cnpj = $_POST['cnpj'];
            $codempresa = $_POST['codempresa'];

            editarEmpresa($nome, $cnpj, $codempresa);
            header("Location: ../view/visualizarEmpresa.php");
            break;
    }
}
