<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Barra-navegação Looping</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#barra-navegacao">
                    <span class="sr-only">Alternar Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">LOGO</a>
            </div>

            <div class="collapse navbar-collapse" id="barra-navegacao">
                <!-- esconde a barra quando diminui a tela -->

                <ul class="nav navbar-nav navbar-right ">
                    <li> <a href="#">HOME</a> </li>
                    <li> <a href="#">Empresa</a> </li>
                    <li> <a href="#">Clientes</a> </li>
                    <li> <a href="#">Produtos</a> </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Minha conta <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li> <a href="#">Editar</a> </li>
                            <li> <a href="#">Logout</a> </li>
                        </ul>

                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <div class="container">

        <div class="page-header">
            <h1>Tabela Bootstrap</h1>
        </div>


        <!--         <table class="table table-striped table-bordered table-hover table-condensed" > -->
        <table class="table table-striped table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                </tr>
            </thead>

            <?php

            for ($i = 0; $i < 10; $i++) {

            ?>

            <tbody>
                <tr class="success">
                    <td>Notebook 980</td>
                    <td>HP</td>
                    <td>R$1.800,00</td>
                    <td style="text-align: right;">
                        <button class="btn btn-primary glyphicon glyphicon-pencil"></button>
                        <button class="btn btn-warning glyphicon glyphicon-search"></button>
                        <button class="btn btn-danger glyphicon glyphicon-trash"></button>
                    </td>
                </tr>
                <?php
            }
                ?>

            </tbody>
        </table>
    </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>