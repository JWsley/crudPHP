<?php

    include 'config.php';

    $exib = "SELECT * FROM user";
    $query_cad = mysqli_query($conn,$exib);
   
?>


<!doctype html>
 <html lang="en">
   <head>
     <title>Cadastro de Clientes</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
    <div class="container">     
    <table class="table" style="border: 3px solid black;margin-top:30px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php      
                while($recive = mysqli_fetch_array($query_cad)){
                    $id = $recive['id'];
                    $nome = $recive['nome'];
                    $email = $recive['email'];
                    $telefone = $recive['tel'];

            
            
            ?>
            <tr>
                <form action="editar.php" method="post">
                    <td scope="row"><?php echo $id ?></td>
                    <td><input  required  type="text" name="nome" value="<?php echo $nome; ?>"></td>
                    <td><input  required  type="text" name="email" value="<?php echo $email; ?>"></td>
                    <td><input  required  type="text" name="tel" value="<?php echo $telefone; ?>"></td>
                    <td>
                    <td><input  required  type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" value="Edit"></td>
                </form>
                <form action="excluir.php
                    " method="post"
                    >
                    <td></td>
                   
                    <td><input  required  type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" value="excluir"></td>
                
                </form>


                </td>
            </tr>
           <?php 
                };
              ?>


                <tr>
                    <form action="cadastro.php
                    " method="post"
                    >
                    <td></td>
                    <td><input  required  type="text" name="nome"></td>
                    <td><input  required  type="email" name="email"></td>
                    <td><input  required  type="text" name="tel"></td>
                    <td><input type="submit" value="send"></td>
                
                </form>
                   


                </tr>


                

        </tbody>
    </table>
    </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>