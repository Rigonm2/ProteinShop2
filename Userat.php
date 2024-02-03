<?php 

include_once "userRepository.php";

$strep = new userRepository();
$regs = $strep->getAllUsers();

?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
            <tr>
                <th>Emri</th>
                <th>Mbiemri</th>
                <th>Emaili</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            </thead>
            <body>
                <?php foreach($regs as $reg) { ?> 
                    <tr>
                        <td><?php echo $reg['Emri'];?></td>
                        <td><?php echo $reg['Mbiemri'];?></td>
                        <td><?php echo $reg['Email'];?></td>
                        <td><?php echo $reg['Username'];?></td>
                        <td><?php echo $reg['Password'];?></td>
                        
                        <td><a name = "edit" href='edit.php?id=<?php echo $reg['Id']?>'>Edit</a></td>
                        <td><a href='delete.php?id=<?php echo $reg['Id']?>'>Delete</a></td>
                    </tr>
                    <?php 
                if(isset($_POST["edit"])){
                    echo $reg['Username'] . " editted";
                }
                ?>
                <?php }?> 
                
            </body>
        </table>
    </body>
</html>