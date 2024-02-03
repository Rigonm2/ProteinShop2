<?php
include_once 'proteins.php';
include_once 'proteinRepository.php';

if (isset($_POST['submitbtn'])) {
   
    $src = $_POST['src'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];



    $reg = new Product($src,$Name,$Price);

    $proteinRepository = new proteinRepository();
    $proteinRepository->insertProduct($reg);
    
    header("location:shopPage.php");
    
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="styleShop.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>

<body>

   

    <div class="account-page">
        <div class="container">
            <div class="row">
                
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">

                            <span>Add product</span>

                        </div>
                        
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">  
                    
                        <input type="text" name ="src" placeholder="src">
                        <input type="text" name ="Name" placeholder="Name">
                        <input type="text" name ="Price" placeholder="Price">
                       

                        <input type="submit" name="submitbtn" value="Submit" class="btn"> 
                        <br>
                        </form>

                        
                    </div>
                   

                </div>
            </div>
        </div>
</div>


        
       

       

</body>

</html>