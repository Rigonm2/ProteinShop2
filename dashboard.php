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
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../ProteinShop2/userRepository.php';

             $userRepository = new userRepository();

             $users = $userRepository->getAllUsers();
             $strep = new userRepository();
                $regs = $strep -> getAllUsers();

                foreach($users as $user){
                    echo 
                    "
                    <tr>
                         <td>$user[Id]</td>
                         <td>$user[Emri]</td>
                         <td>$user[Mbiemri] </td>
                         <td>$user[Email] </td>
                         <td>$user[Username] </td>
                         <td>$user[Password] </td>
                         <td><a href='edit.php?id=$user[Id]'>Edit</a> </td>
                         <td><a href='delete.php?id=$user[Id]'>Delete</a></td>
                         
                    </tr>
                    ";
                 }
    
                 
                 
                 ?>

             
             
            
    </table>
</body>
</html>