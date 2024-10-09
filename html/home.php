<?php
    include '../composant/connection.php';
    session_start();
    if(isset($_SESSION ['user_id'])){
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id ='';
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
   
?>

<style type="text/css">
    <?php include '../css/style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0"><!--rendre la page web responsive et à garantir une expérience utilisateur optimale sur différents types d'appareils-->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"><!--*la mise en forme des icônes*/-->
        <title> Matcha Tn</title>
    </head>
    <body>
    <?php include '../composant/header.php'; ?>
    <div class="main">
        
        <section class="home-section">
        <div class="slider">
                <div class="slider_slider slide1">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome to matchaTn!</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                     </div>
                    <div class="hero-deco-top"></div>
                    <div class="hero-deco-bottom"></div>
                </div>
                 <!--slide end-->
                 <div class="slider_slider slide2">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome to matchaTn!</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                     </div>
                    <div class="hero-deco-top"></div>
                    <div class="hero-deco-bottom"></div>
                </div>
                 <!--slide end-->
                 <div class="slider_slider slide3">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome to matchaTn!</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                     </div>
                    <div class="hero-deco-top"></div>
                    <div class="hero-deco-bottom"></div>
                </div>
                 <!--slide end-->
                 <div class="slider_slider slide4">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome to matchaTn!</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                     </div>
                    <div class="hero-deco-top"></div>
                    <div class="hero-deco-bottom"></div>
                </div>
                 <!--slide end-->
                 <div class="slider_slider slide5">
                    <div class="overlay"></div>
                    <div class="slide-detail">
                        <h1>Welcome to matchaTn!</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                     </div>
                    <div class="hero-deco-top"></div>
                    <div class="hero-deco-bottom"></div>
                </div>
                 <!--slide end-->
         
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
        </div>
        </section>
         <!--home slider end -->
        <!-- thumb section -->
         <section class="thumb">
            <div class="box-container">
                <div class="box">
                    <img src="../images/thumb2.jpg">
                    <h3>Matcha Tea</h3>
                    <p>OUR YUMMY MATCHA PRODUCTS </p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="../images/thumb0.jpg">
                    <h3>Matcha Supplies</h3>
                    <p>OUR MATCHA ACCESSOIRES  </p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>
        </section>
        <!--offers -->
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img class="image" src="../images/about-us.jpg">
                </div>
                <div class="box">
                    <img src="../images/download.png">
                    <span>Healthy matcha </span>
                    <h1> save up to 20% off</h1>
                    <p> Savor the vibrant flavor of matcha while enjoying up to 20% off! 
                        Don't let this exclusive opportunity pass you by to treat yourself
                         to our premium matcha products </p>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="title">
                <img src="../images/download.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="../images/about.jpg">
                <div class="row-detail">
                    <img class="image" src="../images/basil.jpg">
                    <div class="top-footer">
                        <h1>a cup of Matcha makes you Happy and Healthy</h1>
                    </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img class="prod" src="../images/prod1.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prod2.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prodd3.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prodd4.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prodd5.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prodd6.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prodd7.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
                <div class="box">
                    <img class="prod" src="../images/prodd8.png">
                    <a href="view_products.php" class="btn">Shop Now!</a>
                </div>
            </div>
        </section>
        
        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="../images/6.jpg" alt="">
                    <div class="detail">
                        <span>Matcha</span>
                        <h1>PRODUCTS</h1>
                        <a href="view_products.php" class="btn">shop Now</a>
                    </div>                
                </div>
                <div class="box">
                    <img src="../images/7.jpg" alt="">
                    <div class="detail">
                        <span>Matcha</span>
                        <h1>ACCESSOIRES</h1>
                        <a href="view_products.php" class="btn">shop Now</a>
                    </div>                
                </div>
            </div>
        </section>
        <section class="services">
            <div class="box-container">
                <div class="box">
                    <img src="../images/icon2.png" alt="">
                    <div class="detail">
                        <h3>great savings</h3>
                        <p>save big every order</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../images/icon1.png" alt="">
                    <div class="detail">
                        <h3>24*7</h3>
                        <p>one-on-one support</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../images/icon0.png" alt="" >
                    <div class="detail" >
                        <h3>gift vouchers</h3>
                        <p>vouchers on every festivals</p>
                    </div>
                </div>
                <div class="box">
                    <img src="../images/icon.png" alt="">
                    <div class="detail">
                        <h3>regional delivery</h3>
                        <p>dropship regional</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="brand">
            <div class="box-container">
                <div class="box">
                    <img src="../images/brand1.png" alt="">
                </div>
                <div class="box">
                    <img src="../images/brand2.png" alt="">
                </div>
                <div class="box">
                    <img src="../images/brand3.png" alt="">
                </div>
                <div class="box">
                    <img src="../images/brand5.png" alt="">
                </div>
                
            </div>

        </section>
         <?php include '../composant/footer.php'; ?>
    </div>
     
        
        
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="../js/script.js"></script>
        <?php include '../composant/alert.php'; ?>
    
    </body>
</html>