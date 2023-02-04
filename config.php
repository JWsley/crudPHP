<?php

$host = "localhost";
$user= "root";
$password = "";
$dbName = "crudphp";



$conn = mysqli_connect($host,$user,$password,$dbName);


if($conn){

    echo 'tudo joia :)';


}else{


    echo 'eita bixu deu ruim!';

}


?>