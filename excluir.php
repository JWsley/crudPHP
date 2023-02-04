<?php
    include 'config.php';


    $id = $_POST['id'];

    $delete = "DELETE FROM user where id='$id'";
    $query_del = mysqli_query($conn,$delete);

    header('location:listagem.php');



?>