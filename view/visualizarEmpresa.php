<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Controle de Empresas</title>
</head>

<body>


    <?php

    session_start();

    if (isset($_SESSION["codusuario"])  && isset($_SESSION["nome"])) {
    } else {
        header("Location: login.php");
    }


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
                            Visualizar Empresas
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

        <h2 class="m-3 text-center">Suas Empresas Cadastradas:</h2>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cnpj</th>
                    <th scope="col">Opções</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                

                <?php

                    include "../model/crudEmpresa.php";
                    
                    $result = visualizarEmpresa($_SESSION["codusuario"]);

                    foreach($result as $linha){
                        echo "<tr>";
                        echo "<td>" . $linha['nomeempresa'] . "</td>";
                        echo "<td>" . $linha['cnpj'] . "</td>";
                        echo "<td>" . "<a class = 'm-1 btn btn-primary' href = 'editarEmpresa.php?codigo=$linha[codempresa]'>Editar</a>" . "<a class = 'btn btn-danger' href = '../control/controleEmpresa.php?codigo=$linha[codempresa]'>Excluir</a>" . "</td>";
                        echo "</tr>";
                    }
                   

                ?>
                   
                  
                    
               
                
            </tbody>
        </table>


    </div>


    <script src="../js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>