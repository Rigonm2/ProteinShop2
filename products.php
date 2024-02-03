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
    <meta name = "viewport" content="width-device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="styleShop.css">
    
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>

    <div class="header">
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
     

         <!--  <b>SHATTER RIPPED</b>     -->
       <div class="smallcontanier">


        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                
                <option>Protein</option>
                <option>Creatine</option>
                <option>Weight loss</option>
                <option>Pre-Workout</option>
                <option>Post-Workout</option>
            </select>
        </div>
        
        <div class="row">
            <div class="col-4">
                <a href="http://localhost:8008/ProteinShop2/product1.php"><img src="Img/muscletech-masstech-extreme-vanilla-6lb_400x.webp"></a>
                <h4><b>MASS TECH</b></h4>

                <p>59.99$</p>
            </div>
            <div class="col-4">

                <a href="http://localhost:8008/ProteinShop2/products2.php"><img src="Img/muscletech-nitrotech-chocolate-4lb.webp"></a>
                <h4><b>WHEY PROTEIN</b></h4>

                <p>39.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/muscletech-platinum-musclebuilder-60ct_400x.webp" >
                <h4><b>MUSCLE BUILDER</b></h4>
                
                <p>20.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/muscletech-iso-whey-clear-lemon_400x.webp">
                <h4><b>ISO WHEY CLEAR LEMON</b></h4>
               
                <p>34.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/creactor.webp" >
                <h4><b>CELL-TECH CREACTOR</b></h4>
                
                <p>29.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/Ripped-pre-workout.webp" >
                <h4><b>SHATTER RIPPED</b></h4>
                
                <p>22.99$</p>
            </div>

            <!--    <b>PLATINUM 100% OMEGA FISH OIL</b>   -->
            <div class="col-4">
                <img src="Img/hydrixycyt.webp" >
                <h4><b>HYDROXYCUT HARDCORE ELITE</b></h4>
                
                <p>34.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/fishoil.webp" >
                <h4><b>PLATINUM 100% OMEGA FISH OIL</b></h4>
                
                <p>10.99$</p>
            </div>
        </div>
        
    </div>

    <!-----produktet2------->
    <div class="smallcontanier">
        
        <div class="row">
            <div class="col-4">
                <img src="Img/muscletech-100-mass-gainer-chocolate_1024x1024.webp" >
                <h4><b>MASS GAINER</b></h4>
                
                <p>52.99$</p>

                <!--  <b>CREATINE PREMIUM PACK</b>   -->
            </div>
            <div class="col-4">
                <img src="Img/muscletech-amino-build-tropical_500x.webp" >
                <h4><b>AMINO BUILD</b></h4>
               
                <p>24.99$</p>
            </div>
            <div class="col-4">
                <a href="http://localhost:8008/ProteinShop2/productEuph.php"><img src="Img/euphtoriaCss.webp"></a>
                <h4><b>EUPHORIA PRE-WORKOUT</b></h4>
                <p>33.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/muscletech-nitrotech-ripped-chocolate_480x480.webp" >
                <h4><b>RIPPED WHEY PROTEIN</b></h4>
                <p>54.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/premium-pack.webp" >
                <h4><b>CREATINE PREMIUM PACK</b></h4>
                
                <p>79.99$</p>
            </div>

            
            <div class="col-4">
                <img src="Img/ripped-stack.webp" >
                <h4><b>RIPPED STACK</b></h4>
                
                <p>67.99$</p>
            </div>
            <div class="col-4">
                <a href="http://localhost:8008/ProteinShop2/productCrea4.php"> <img src="Img/cell-tech-creatine.webp" ></a>
                <h4><b>CELL-TECH CREATINE</b></h4>
                
                <p>23.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/alpha-test.webp" >
                <h4><b>ALPHA TEST</b></h4>
                
                <p>29.99$</p>
            </div>
</div>
</div>


            <div class="slider">
                <div class="imgbox">
                    <img  class="sliderImg" src="Slides/creaFoto2.png">
                </div>
                
                <button class="btn22" onclick="prev()"> < </button>
                <button class="btn22" onclick="next()"> > </button>

                <!-- butonin-->
        
            </div>
            
            
            <div class="smallcontanier">
        
                <div class="row">
            
                    <div class="col-4">
                        <a href="http://localhost:8008/ProteinShop2/productsISO.php"><img src="Img/chocoIso.webp"></a>
                        <h4><b>ISO WHEY</b></h4>
                        <p>49.99$</p>
            
                        <!--  <b>CREATINE PREMIUM PACK</b>   -->
                    </div>
                    <div class="col-4">
                        <img src="Img/massmass.webp">
                        <h4><b>MASS-TECH EXTREME 2000</b></h4>
                        <p>54.99$</p>
                    </div>
                    <div class="col-4">
                        <img src="Img/preStack.webp">
                        <h4><b>ENFINITY STACK</b></h4>
                        <p>77.99$</p>
                    </div>
                    <div class="col-4">
                        <img src="Img/tribulus.webp">
                        <h4><b>PLATINUM 100% TRIBULUS</b></h4>
            
                        <p>54.99$</p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img src="Img/eaa+.webp">
                            <h4><b>PLATINUM 100% EAA+</b></h4>
            
                            <p>23.99$</p>
                        </div>
                        <div class="col-4">
                            <img src="Img/creachews.webp">
                            <h4><b>CREATINE CHEWS</b></h4>
            
                            <p>34.99$</p>
                        </div>
                        <div class="col-4">
                            <img src="Img/alphatest.webp">
                            <h4><b>ALPHATEST THERMO</b></h4>
            
                            <p>34.99$</p>
                        </div>
            
                        <!--  <b>100% GLUTAMINE</b>    -->
                        <div class="col-4">
                            <img src="Img/clearMuscle.webp">
                            <h4><b>CLEAR MUSCLE</b></h4>
            
                            <p>44.99$</p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="Img/plantProtein.webp">
                                <h4><b>PLANT PROTEIN</b></h4>
            
                                <p>42.99$</p>
                            </div>
                            <div class="col-4">
                                <img src="Img/burnIQ.webp">
                                <h4><b>BURN IQ - 100 CT</b></h4>
            
                                <p>64.99$</p>
                            </div>
                            <div class="col-4">
                                <img src="Img/stack.webp">
                                <h4><b>GREEN GAINS BUNDLE</b></h4>
            
                                <p>81.23$</p>
                            </div>
                            <div class="col-4">
                                <img src="Img/vitialig.webp">
                                <h4><b>VITALIGENIX T10</b></h4>
            
                                <p>169.99$</p>
                            </div>
                            <?php 
                  include_once "proteinRepository.php";
                  $strep = new proteinRepository();
                  $regs = $strep -> getAllProducts();
               
                  foreach($regs as $reg){
                    $src = $reg['src'];
                    $Name =$reg['Name'];
                    $Price =$reg['Price'];
                  
                ?>   
                <div class="col-4">
                    <img src="<?php echo $src ?>">
                    <h4><b><?php echo $Name ?></b></h4>

                    <p><?php echo $Price ?></p>
                </div>
                <?php }?>
                       

            <!--opitimum-->
            <div class="col-4">
                <img src="Img/optimumwhey.webp" >
                <h4><b>Optimum WHEY PROTEIN</b></h4>
                <p>44.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/optimumiso.webp" >
                <h4><b>Optimum ISO-WHEY PROTEIN</b></h4>
                <p>46.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/optimum4.webp" >
                <h4><b>Optimum CREATINE</b></h4>
                <p>51.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/optimum3.webp" >
                <h4><b>Optimum MASS PROTEIN</b></h4>
                <p>30.99$</p>
            </div>



            <div class="col-4">
                <img src="Img/optimumbca.jpg" >
                <h4><b>Optimum BCAA 1000</b></h4>
                <p>44.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/optimumAmino.webp" >
                <h4><b>Optimum AMINO ENERGY</b></h4>
                <p>46.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/optimumpre.webp" >
                <h4><b>Optimum PRE-WORKOUT</b></h4>
                <p>51.99$</p>
            </div>
            <div class="col-4">
                <img src="Img/optimumglut.webp" >
                <h4><b>Optimum GLUTAMINE</b></h4>
                <p>30.99$</p>
            </div>
            <?php
   include "userRepository.php";
   
   $strep = new userRepository();
   $regs = $strep -> getAllUsers();

   foreach($regs as $reg){
    $Emri = $reg['Emri'];
    $Mbiemri = $reg['Mbiemri'];
    $Email = $reg['Email'];
    $username =$reg['Username'];
    $Password = $reg['Password'];
    
   
   }
   $admin = $strep -> admini($Email,$username,$Password)
    ?>
            <?php 
                  include_once "proteinRepository.php";
                
                  $strep = new proteinRepository();
                  $regs = $strep -> getAllProducts();
               
                  foreach($regs as $reg){
                    $src = $reg['src'];
                    $Name =$reg['Name'];
                    $Price =$reg['Price'];
                  
                ?>   
                <div class="col-4">
                    <img src="<?php echo $src ?>"> 
                    <h4><b><?php echo $Name ?></b></h4>

                    <p><?php echo $Price ?></p>
                    <br>
                    <?php if($admin){
                    echo "<a href='editProtein.php?id=$reg[Id]'>Edit</a> ";
                    echo "      :     ";
                    echo "<a href='deleteProtein.php?id=$reg[Id]'>Delete</a>";
                     }?>
                </div>
                <?php }?>
              
<?php if($admin){
?>
<a href="addProduct.php"
        class="btn22">Add product</a>

        <br>
        
        <a href="Pro.php"
        class="btn22">Dashboard</a>

        <?php } ?>
 <br>
<br>


            <!--Dymatize--> 


            

         </div>
        </div>
       </div>
    </div>
</div>

       <div class="page-btn">
            
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>. . .</span>
        
    </div>
    </div>
        
 <!-----------brendet-------->
 <div class="brands">
    <div class="smallcontanier">
        <div class="row">
            <div class="col-5">
                <img src="Img/muscletech-logo-blk-checkout_280x.webp">
            </div>
            <div class="col-5">
                <img src="Img/dymatize.png">
            </div>
            <div class="col-5">
                <img src="Img/optimum.jpg" >
            </div>
            <div class="col-5">
                <img src="Img/bio-tech.avif" >
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
                    <img src="Img/play-store.png" >
                    <img src="Img/download-apple.svg" >
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

<script>
    var i = 0;
 var slider_img = document.querySelector(".sliderImg");
    var images = ['creaFoto2.png','fotoja1.png','wheyFotoja3.png'];
    

    function changeImg(){
        document.getElementById('sliderImg').src = images[i];

        if(i<images.length-1){
            i++;
        }
        else{
            i=0;
        }
        document.addEventListener(onload,changeImg());

       /*/ document.addEventListener(onload,changeImg)
       function prev(){
        if(i<=0){
            i=images.length;
            i--;
            return setImg();
        }
  
    function setImg(){
        return slider_img.setAttribute('src','Slides/' + images[i]);
        
    }/*/
    }

    function prev(){
        if(i<=0)
            i=images.length;
            i--;
            return setImg();
        
    }
    function next(){
        if(i>= images.length -1)
            i=-1;
            i++;
            return setImg();
        
    }
    function setImg(){
        return slider_img.setAttribute('src','Slides/' + images[i]);
        
    }

</script>
</body>
</html>