<?php 
    session_start();
    if(!isset($_SESSION["User"])){
        header("location:regjisterForm.php");
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
                    <a href="http://localhost:8008/ProteinShop2/shopPage.php"><img src="Img/muscletech-logo-blk-checkout_280x.webp" width="125px" alt=""></a>
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


    <!------produkti vet----->

    <div class="small-contanier single-product">
        <div class="row">
            <div class="col-2">
                <img src="Img/chocoIso.webp" width="100%">
            </div>
            <div class="col-2">
                <h1>*NEW* ISO WHEY-PROTEIN</h1>
                <h4><b>49.99$</b></h4>
                <select>
                    <option>Select size</option>
                    <option>900 gr</option>
                    <option>2.27 kg</option>

                </select>
                <select>
                    <option>Select flavor</option>
                    <option>Chocolate</option>
                    <option>Vanilla</option>
                </select>
                <br>
                <br>
                <h3>Product Details</h3>
                <small>
                    <p>ISO Nitro-TechTM WHEY is our new best-in-class scientifically engineered Iso-whey protein formula,
                        enhanced with a researched form of creatine to support more lean muscle, more strength, and
                        better performances.
                        This is the original for a reason.</p>
                </small>

                <a href="" class="btn">Add to Cart </a>
            </div>

        </div>
    </div>






    <!--  <b>SHATTER RIPPED</b>     -->

   
    <div class="smallcontanier">
        <h2 class="Secondtitle">Flavors</h2>
        <div class="boxes">

            <div class="row">

                <div class="col-3">
                    <img src="Img/chocoIso.webp">
                    <h4><b>CHOCOLATE 900 gr</b></h4>
                </div>
                <div class="col-3">
                    <img src="Img/vanillaIso.webp">
                    <h4><b>VANILLA 900 gr</b></h4>
                </div>

                <div class="col-3">
                    <img src="Img/IsoChoco.webp">
                    <h4><b>CHOCOLATE 2.27 kg</b></h4>

                </div>
            
            </div>

        </div>
    </div>
    <div class="testimonial">
        <div class="smallcontanier">
            <h2 class="Secondtitle">Ratings</h2>
            <div class="row">
                <div class="col-3">
                    <p>After year's of trying to gain weight and using several weight gain supplements without any
                        results I gave up. Recently came across Mass Tech Extreme 2000 and decided to give it a try.
                        Using 2 scoops a day in 500ml of milk managed to gain 2.5 kg.This product is amazing does
                        exactly what it says. Great stuff congratulations to Muscle Tech Only downside is the price here
                        where I live which is above my budget so won't be able to continue using it for as long as I
                        would like but for anyone that can believe me this is the one.</p>
                    <img src="Img/user1.avif">
                    <h3>Rigon Mejzini</h3>
                </div>
                <div class="col-3">
                    <p>Started drinking this after a few years of slow progress without drinking supplements. After 4
                        months with this protein, I was jumping recent PRs every week and was pushing weight that I
                        hadn’t seen on my bar in over a decade. Pleasantly surprised at how well this worked. It also
                        tasted great!</p>
                    <img src="Img/user3.avif">
                    <h3>Dion Delolli</h3>
                </div>
                <div class="col-3">
                    <p>I needed something to boost my workouts and get better pumps. Of all the products I have tried
                        over the years this seems to be the best, I have extended my workout from 45 minutes to 1:45hrs.
                        I absolutely love this product, no gitters.</p>
                    <img src="Img/user2.avif">
                    <h3>Sara Ujkani</h3>
                </div>
            </div>
        </div>
    </div>

    <!-----produkte extra---->





    </div>
    </div>
    <div class="smallcontanier">
        <h2 class="thirdtitle">Related Products</h2>
        <div class="boxes">
            <div class="row">
                <div class="col-4">
                    <a href="http://localhost:8008/ProteinShop2/productCrea4.php"> <img src="Img/cell-tech-creatine.webp" ></a>
                    <h4><b>CELL-TECH CREATINE</b></h4>
                    
                    <p>23.99$</p>
                </div>
                <div class="col-4">

                    <a href="http://localhost:8008/ProteinShop2/products2.php"><img src="Img/muscletech-nitrotech-chocolate-4lb.webp"></a>
                    <h4><b>WHEY PROTEIN</b></h4>

                    <p>39.99$</p>
                </div>
                <div class="col-4">
                    <a href="http://localhost:8008/ProteinShop2/productEuph.php"><img src="Img/euphtoriaCss.webp"></a>
                    <h4><b>EUPHORIA PRE-WORKOUT</b></h4>
                    <p>33.99$</p>
                </div>
                <div class="col-4">
                    <a href="http://localhost:8008/ProteinShop2/product1.php"><img src="Img/muscletech-masstech-extreme-vanilla-6lb_400x.webp"></a>
                    <h4><b>MASS TECH</b></h4>

                    <p>59.99$</p>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
    <div class="smallcontanier">
        <a href="http://localhost:8008/ProteinShop2/products.php"
        class="btn22">VIEW ALL PRODUCTS &#8594;</a>
<br>
<br>
<br>
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
  
</body>

</html>