<?php 

include_once "userRepository.php";

$strep = new userRepository();
$regs = $strep->getAllStudents();

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
                        
                        <td><a href='edit.php?id=<?php echo $reg['Id']?>'>Edit</a></td>
                        <td><a href='delete.php?id=<?php echo $reg['Id']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </body>
        </table>
    </body>
</html>