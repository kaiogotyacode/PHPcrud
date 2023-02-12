<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <title> PHP CRUD </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php"> Home </a>
                    <a class="nav-item nav-link" href="?page=cadastrar"> Cadastrar </a>
                    <a class="nav-item nav-link" href="?page=metodos&acao=listar"> Listar [CRUD] </a>
                </div>
            </div>
        </div>
    </nav>
    
    <h1 class="display-1 text-center"> PHP CRUD </h1>

    <div class="container">
        <?php
        
        include("config.php");

        switch (@$_REQUEST["page"]) {
            case "cadastrar":
                /* Código: Formulário Cadastrar */
                include("telaCadastrar.php");
                break;
            case "atualizar":
                /* Código: Formulário Atualizar */
                include("telaAtualizar.php");
                break;
            case "metodos":
                /* Código: CRUD Response */
                include("metodos.php");
                break;
            default:
                /* Código: Página Inicial */
                print "<p class='display-4'> Welcome, dear. </p>";
                break;
        }
        ?>
    </div>

    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  <!-- why menu-dropdown isn't working [final] -->

</body>

</html>