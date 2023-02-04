<?php

    include 'config.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];

    $recive = "INSERT INTO user(nome,email,tel) VALUES ('$nome','$email','$tel')";

    $query_cad = mysqli_query($conn,$recive);

    header('location:listagem.php');


?>