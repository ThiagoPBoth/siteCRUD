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

    session_start();

    if (isset($_SESSION["coddist"])  && isset($_SESSION["dist"])) {
    } else {
        header("Location: login.php");
    }


    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Controle de Alimentos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Visualizar Alimentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="mostrarAlimento.php">Visualizar Alimentos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"></a></li>


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

        <h2 class="m-3 text-center">Alimentos Cadastrados:</h2>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Cep</th>
                    <th scope="col">Opções</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                

                <?php

                    include "../model/crudAlimento.php";
                    
                    $result = mostrarAlimento($_SESSION["coddist"]);

                    foreach($result as $linha){
                        echo "<tr>";
                        echo "<td>" . $linha['descricao'] . "</td>";
                        echo "<td>" . $linha['cep'] . "</td>";
                        echo "<td>" . "<a class = 'm-1 btn btn-primary' href = 'editarAlimento.php?codigo=$linha[idA]'>Editar</a>" . "</td>";
                        echo "</tr>";
                    }
                   

                ?>
                   
                  
                    
               
                
            </tbody>
        </table>


    </div>


    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>