<?php
    include 'config.php';

    $id = $_POST['id'];
    $nome =$_POST['nome'];
    $email =$_POST['email'];    
    $tel =$_POST['tel'];    

    $update = "UPDATE USER SET nome='$nome',email='$email',tel='$tel'WHERE id='$id'";


    $query_up = mysqli_query($conn,$update);


    header('location:listagem.php');


?>