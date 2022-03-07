<?php include 'php/update.php'; ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">

    <title>Update</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">


        <form action="php/update.php" method="post">
            <h5 class="display-4 text-center">Update</h5>
            <hr><br>

            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" name="name" value="<?= $row['name'] ?>" placeholder="Novo nome">
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" id="name" name="email" value="<?= $row['email'] ?>" placeholder="novo valor">
            </div>
            <input type="text" name="id" value="<?= $row['id'] ?>" hidden>

            <button type="submit" class="btn btn-primary" name="update">Update</button>

            <a href="read.php" class="link-primary">View</a>

        </form>
    </div>
</body>

</html>