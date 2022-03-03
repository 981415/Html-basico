<?php


require_once  "../conexao.php";


if (isset($_POST['create'])) {



    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);

    $user_data = 'name=' . $name . 'email=' . $email;

    if (empty($name)) {
        header("Location: ../index.php?error=Digite o nome&user_data");
    } else if (empty($email)) {
        header("Location: ../index.php?error=Digite o email&user_data");
    } else {
        $sql = "INSERT INTO users(name, email) VALUES('$name', '$email') ";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: ../read.php?success=sucesso criado");
        } else {
            header("Location: ../index.php?error=ERRO AO INSERIR&user_data");
        }
    }
}
