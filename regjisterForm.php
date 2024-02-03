<?php 
    session_start();
    if(isset($_SESSION["User"])){
        header("location:shopPage.php");
    }

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

    <div class="header3">
        <div class="container">

            <div class="navabar">
                <div class="logo">
                    <a href="shopPage.html"><img src="Img/muscletech-logo-blk-checkout_280x.webp" width="125px" alt=""></a>
                </div>
                <nav>

                    <ul id="Menuitems">
                    <li><a href="http://localhost:8008/ProteinShop2/shopPage.php">Home</a></li>
                        <li><a href="http://localhost:8008/ProteinShop2/products.php">Products</a></li>
                        <li><a href="http://localhost:8008/ProteinShop2/aboutUs.php">About us</a></li>
                        <li><a href="http://localhost:8008/ProteinShop2/regjisterForm.php">Account</a></li>
                    </ul>
                </nav>
                <a href=""><img src="Img/3144456.png" width="30px" height="30px"></a>
            </div>

        </div>
        
    </div>

    <!--------RegjisterForm------>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <!-- <img src="Img/158mb.png" alt=""> -->
                    <img src="Img/Mobile-login.jpg" alt="">
                </div>
                <div class="col-2">
                    <div class="form-container">


                        <div class="form-btn">

                            <span onclick="login()">Sign in</span>
                            <span onclick="regjister()">Sign up</span>
                            <hr id="indi">

                        </div>
                        <br>
                        <?php
include_once 'User.php';
include_once 'userRepository.php';
include_once 'DatabaseConnection.php';
//ktu po du me bo qe nese ekziston qaj username ose qajo email mos me lon me shkru apet e mir ardh si alert qe that 
// username exist po e provova diqka spom bon 

if (isset($_POST['submitbtn'])) {
   
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = mysqli_query($conn, "SELECT FROM form WHERE Email = $email");
    // $stmt = $conn->prepare($sql); 
    // $stmt->bind_param("i", $email);
    // $stmt->execute();
    // $result = $stmt->get_result(); 
    // $query = $result->fetch_assoc();

    $strep = new userRepository();


   $erorrs = array();
            if(empty($emri) OR empty($mbiemri) OR empty($email) OR empty($username) OR empty($password)){
               array_push($erorrs,"All fields required!!");
               echo "<b>All fields required!!</b>";
            }
//             if(mysqli_num_rows($result)>0){
//             echo "This email has already been registered";
// }        
            // if($strep->UsernameTaken($username)){
            //     echo "Username already exists. Please choose a different one.";
            //     die();
            // }
            if(strlen($password)<8){
                array_push($erorrs,"Password should be longer!!");
                echo"<br><b>Password should be longer!!</b>";
            }
            if(count($erorrs)>0){
                foreach($erorrs as $error){
                    echo "<div class = 'alert alert-danger'></div>";
                }
            }else{


    // $admin = $strep -> admini($emri,$mbiemri,$email,$username,$password);
    // if($admin){
    //     header("location:Userat.php");
         
            
    $reg = new User($emri, $mbiemri, $email,$username,$password);

    $userRepository = new userRepository();
// }
// else{
    $reg = new User($emri, $mbiemri, $email,$username,$password);
    $userRepository = new userRepository();
    $userRepository->insertUser($reg);

    session_start();
    $_SESSION["User"] = true;
    header("location:shopPage.php");
    die();

}
}
//}

?>


<?php 
include_once 'User.php';
include_once 'userRepository.php';
include_once 'DatabaseConnection.php';

if(isset($_POST["loginBtn"])){
    $strep = new userRepository();

    $em = $_POST['Emaill'];
    $pass = $_POST['Passwordd'];

    $dbConn = DatabaseConnection::getinstance();
    
    if($strep->login($em,$pass)){
        header("location:shopPage.php");
    }else{
        echo "Wrong email or password";
    }
    $dbConn ->closeConnection();
   

}

?>
                        
                        <form id = "loginForm"action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">  
                    
                        <input type="text" id="emri" name ="emri" placeholder="Name">
                        <input type="text" id="mbiemri" name ="mbiemri" placeholder="Surname">
                        <input type="email" id="email" name ="email" placeholder="Email">      
                        <input type="text" id="username" name ="username" placeholder="Username">
                        <input type="password" id="password" name ="password" placeholder="Password">
                       
                        <input type="submit"  name="submitbtn" value="Submit" class="btn">
                            
                        <br>
                        </form>
                        

                        <form id="regjisterForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                            <label>Email</label>
                            <input type="text2" id="email" name ="Emaill" placeholder="Emaill">

                            <label>Password</label>
                            <input type="password" id="password" name ="Passwordd" placeholder="Passwordd">
                            <input type="submit"  name="loginBtn" value="Submit" class="btn"> 
                            <a href="">Forgot password</a>

                        </form>

                        
                    </div>
                   

                </div>
            </div>
        </div>
</div>


        <!----------footer-------->
        <div class="footer">
            <div class="contanier">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for IOS and Android mobile phone</p>
                        <div class="app-logo">
                            <img src="Img/play-store.png">
                            <img src="Img/download-apple.svg">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="Img/muscleTech.png">

                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>

                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>FaceBook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>YouTube</li>
                        </ul>

                    </div>
                </div>
            </div>
            </div>

        
        <!-----------js-------------->

        <script>

            var LoginForm = document.getElementById("loginForm");
            var RegjisterForm = document.getElementById("regjisterForm");
            var Indi = document.getElementById("indi");

            function regjister() {
                RegjisterForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indi.style.transform = "translateX(100px)";
            }

            function login() {
                RegjisterForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indi.style.transform = "translateX(0px)";
            }


        </script>


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
            function FormaRegjister() {
            
            let emailInput = document.getElementById('email2');
            let emailError = document.getElementById('emailError2');

            let PasswordInput = document.getElementById('password2');
            let PasswordError = document.getElementById('passwordError2');

            
            emailError.innerText = '';
            PasswordError.innerText = '';


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

       

</body>

</html>