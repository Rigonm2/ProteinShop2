<?php
include 'userRepository.php';

$id = $_GET['id']; // Id

$strep = new userRepository();
$reg = $strep->getUserById($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Edit</title>
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
                            <span><b>Edit</b></span> 
                                                   
                        <form action="" method="post">  
                    
                        <input type="text" id="emri" name="emri" value="<?php echo $reg['Emri'] ?>" placeholder="Name">
                        <input type="text" id="mbiemri" name="mbiemri" value="<?php echo $reg['Mbiemri'] ?>" placeholder="Surname">
                        <input type="email" id="email" name="emaili" value="<?php echo $reg['Email'] ?>" placeholder="Email">
                        <input type="text" id="username" name="username" value="<?php echo $reg['Username'] ?>" placeholder="Username">
                        <input type="password" id="password" name="password" value="<?php echo $reg['Password'] ?>" placeholder="Password">

                        <input type="submit" name="editBtn" value="save" class="btn"> 
                        <br>
                        </form>

                        
                    </div>
                   

                </div>
            </div>
        </div>
</div>

<?php

if (isset($_POST['editBtn'])) {
    $id = $reg['Id'];
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['emaili'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $strep->editUsers($emri, $mbiemri, $email, $username, $password, $id);

    header("location:dashboard.php");
}

?>


<script>

            let nameRegex = /^[A-Z][a-z]{3,8}$/;
            let surnameRegex = /^[A-Z][a-z]{3,8}$/;
            let emailRegex = /[a-zA-Z.-_][a-z]+\.+[a-z]{2,3}$/;
            let PasswordRegex = /^[A-Za-z]\w{7,14}$/;

            function FormaLogin() {
                let nameInput = document.getElementById('name');
                let nameError = document.getElementById('nameError');

                let SurnameInput = document.getElementById('surname');
                let SurnameError = document.getElementById('surnameError');

                let emailInput = document.getElementById('email');
                let emailError = document.getElementById('emailError');

                let PasswordInput = document.getElementById('password');
                let PasswordError = document.getElementById('passwordError');

                nameError.innerText = '';
                SurnameError.innerText = '';
                emailError.innerText = '';
                PasswordError.innerText = '';


                if (!nameRegex.test(nameInput.value)) {
                    nameError.innerText = 'invalid name';
                    return;
                }
                if (!nameRegex.test(SurnameInput.value)) {
                    SurnameError.innerText = 'invalid surname';
                    return;
                }
                if (!emailRegex.test(emailInput.value)) {
                    emailError.innerText = 'invalid email';
                    return;
                }
                if (!PasswordRegex.test(PasswordInput.value)) {
                    PasswordError.innerText = 'invalid password';
                    return;
                }

                alert('Form submitted succesfully!');
            }
</script>