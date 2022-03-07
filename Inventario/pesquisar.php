<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>READ</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript">
        function alerte() {
            alert('Este campo será excluído!');
        }
    </script>

</head>

<body>

    <div class="container">


        <div class="box" style="width:750 px;">


            <h1>Pesquisar</h1>


            <form method="POST" action="">



                <label for="nome"> Nome do Item</label>
                <input type="text" name="nome" id="nome" placeholder="nome" required>

                <input name="SendPesqUser" type="submit" class="btn btn-outline-dark" value="Pesquisar">

            </form>
            <?php

            $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($SendPesqUser) {
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $result_usuario = "SELECT * FROM users WHERE name LIKE '%$nome%'";
                $resultado_usuario = mysqli_query($conn, $result_usuario); ?>
                <br>
                <table class="table table-striped" style=" padding: 20px ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ação</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td> <?= $row_usuario['name'] ?></td>
                                <td> <?= $row_usuario['email'] ?></td>
                                <td> <?= $row_usuario['data'] ?> </td>
                                <td> <a href="update.php?id=<?= $row_usuario['id'] ?>" class="btn btn-success">Update</a> </td>
                                <td onclick="alerte()"> <a href="php/delete.php?id=<?= $row_usuario['id'] ?>" class="btn btn-primary">Delete</a> </td>

                            <?php  } ?>
                    </tbody>
                </table>
            <?php  } ?>


            <br>
            <div class="col-md-6" style="margin-bottom: 10px;">
                <a href="index.php" class="btn btn-success">Create</a>
                <a href="read.php" class="btn btn-primary">View</a>
            </div>


            <script src="script.js"> </script>
        </div>
    </div>
</body>

</html>