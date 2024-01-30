<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Controle de Alimentos</title>
</head>

<body>

    <?php

    include "../model/crudAlimento.php";

    session_start();

    if (isset($_SESSION["coddist"])  && isset($_SESSION["dist"])) {
    } else {
        header("Location: login.php");
    }

    $result = buscarAlimentoEditar($_GET['codigo']);
    
    foreach($result as $alimento);



    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Controle de Alimento</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Editar Alimento
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item" href="mostrarAlimento.php">Visualizar Alimento</a></li>
                            


                        </ul>
                    </li>

                </ul>

            </div>
        </div>




        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo "$_SESSION[dist]"; ?>
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

        <h2 class="m-3 text-center">Editar Alimento:</h2>

        <form method="POST" action="../control/controleAlimento.php">

            <input type="hidden" name="idA" value="<?php echo  $alimento['idA'] ?>">


            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição do Alimento:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value = "<?php echo $alimento['descricao'] ?>" minlength="1" required>

            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">Cep:</label>
                <input type="text" class="form-control" id="cep" name="cep" value = "<?php echo $alimento['cep'] ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="opcao" value="editar">Editar</button>
            <a href = "mostrarAlimento.php" class = "btn btn-secondary">Cancelar</a>
        </form>



    </div>

    <script src="jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>

    <script src="mascara.js" type="text/javascript"></script>
    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>