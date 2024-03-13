<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Controle de Empresa</title>
</head>

<body>

    <?php

    include "../model/crudEmpresa.php";

    session_start();

    if (isset($_SESSION["codusuario"])  && isset($_SESSION["nome"])) {
    } else {
        header("Location: login.php");
    }

    $result = buscarEmpresaEditar($_GET['codigo']);
    
    foreach($result as $empresa);



    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Controle de Empresas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Editar Empresa
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item" href="visualizarEmpresa.php">Visualizar Empresas</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="cadastrarEmpresa.php">Cadastrar Empresa</a></li>


                        </ul>
                    </li>

                </ul>

            </div>
        </div>




        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo "$_SESSION[nome]"; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <form method="POST" action="../control/controleUsuario.php">
                            <li><button type="submit" name="opcao" value="sair" class="dropdown-item" href="cadastrarUsuario.php">Sair</li>
                        </form>


                    </ul>
                </li>

            </ul>

        </div>

    </nav>


    <div class="container">

        <h2 class="m-3 text-center">Editar Empresa:</h2>

        <form method="POST" action="../control/controleEmpresa.php">

            <input type="hidden" name="codempresa" value="<?php echo  $empresa['codempresa'] ?>">


            <div class="mb-3">
                <label for="nomeempresa" class="form-label">Nome da Empresa:</label>
                <input type="text" class="form-control" id="nomeempresa" name="nomeempresa" value = "<?php echo $empresa['nomeempresa'] ?>" minlength="1" required>

            </div>
            <div class="mb-3">
                <label for="cnpj" class="form-label">Cnpj:</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" value = "<?php echo $empresa['cnpj'] ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="opcao" value="editar">Editar</button>
            <a href = "visualizarEmpresa.php" class = "btn btn-secondary">Cancelar</a>
        </form>



    </div>

    <script src="jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>

    <script src="mascara.js" type="text/javascript"></script>
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>