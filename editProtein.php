<?php
include 'proteinRepository.php';

$id = $_GET['id']; // Id

$strep = new proteinRepository();
$reg = $strep->getProductById($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="styleShop.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<body>

    <!--------RegjisterForm------>

    <div class="account-page">
        <div class="container">
            <div class="row">
               
                <div class="col-2">
                    <div class="form-container">
                            <span><b>Edit product</b></span> 
                                                   
                        <form action="" method="post">  
                    
                        <input type="text" name="src" value="<?php echo $reg['src'] ?>" placeholder="Img/src">
                        <input type="text" name="Name" value="<?php echo $reg['Name'] ?>" placeholder="Name">
                        <input type="text" name="Price" value="<?php echo $reg['Price'] ?>" placeholder="Price">

                        <input type="submit" name="addBtn" value="save" class="btn"> 
                        <br>
                        </form>

                        
                    </div>
                   

                </div>
            </div>
        </div>
</div>

<?php

if (isset($_POST['addBtn'])) {
    $id = $reg['Id'];
    $src = $_POST['src'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
   

    $strep->editProducts($src,$Name,$Price, $id);

    header("location:Pro.php");
}

?>


