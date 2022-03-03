<?php

if (isset($_GET['id'])){
    include '../conexao.php';

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "DELETE FROM users WHERE id=$id ";

    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        header("Location: ../read.php?success=sucesso deletado");
    } else {
        header("Location: ../read.php?error=ERRO AO INSERIR&user_data");
    }
}else {
    header("Location: ../read.php");
}