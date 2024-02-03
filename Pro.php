<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>SRC</th>
                 <th>NAME</th>
                 <th>PRICE</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 <th>Editted</th>

                 
             </tr>

             <?php 
             include_once 'proteinRepository.php';

             $proteinRepository = new proteinRepository();

             $users = $proteinRepository->getAllProducts();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[Id]</td>
                     <td>$user[src]</td>
                     <td>$user[Name] </td>
                     <td>$user[Price] </td>
                     <td><a href='editProtein.php?id=$user[Id]' name ='Edit'>Edit</a> </td>
                     <td><a href='deleteProtein.php?id=$user[Id]'>Delete</a></td>";
                     ?>
                     <td><?php
                      include_once "userRepository.php";
                      
                      $strep = new userRepository();
                      $regs = $strep -> getAllUsers();
                   
                      foreach($regs as $reg){
                        $Emri = $reg['Emri'];
                        $Mbiemri = $reg['Mbiemri'];
                        $Email = $reg['Email'];
                        $username =$reg['Username'];
                        $Password = $reg['Password'];
                       }
                        if(isset($_POST["Edit"])){
                        echo $username;
                        
                 }?></td>
                </tr>
                
            <?php } ?>
             
             
    </table>
</body>
</html>
