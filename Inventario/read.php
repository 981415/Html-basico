<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>READ</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <div class="box" style="width: 750px;">
            <h5 class="display-4 text-center">READ</h5>
            <hr>

            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>

            <?php if (mysqli_num_rows($result)) { ?>
                <table class="table table-striped" style=" padding: 20px ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data</th>
                            <th scope="col" >Ação</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td> <?= $rows['name'] ?> </td>
                                <td> <?= $rows['email'] ?> </td>
                                <td> <?= $rows['data'] ?> </td>
                                <td> <a href="update.php?id=<?=$rows['id']?>"class="btn btn-success" >Update</a> </td>
                                <td> <a href="php/delete.php?id=<?=$rows['id']?>"class="btn btn-primary" >Delete</a> </td>
                             
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="link-right">
                <a href="index.php" class="link-primary">Create</a>
            </div>
        </div>
    </div>
</body>

</html>