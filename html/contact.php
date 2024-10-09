<?php
    /*include '../composant/connection.php';
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
    */
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
        <div class="banner">
            <h1>Contact us</h1>
        </div>
        <div class="title2">
            <a href="../html/home.php">home </a><span>/ contact</span>
        </div>
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
        <div class="form-container">
            <form method="post">
                <div class="title">
                    <img src="../images/download.png" class="logo">
                    <h1>Leave a message</h1>
                </div>
                <div class="input-field">
                    <p>Your name <sup >*</sup></p>
                    <input type="text" name="name">
                </div>
                <div class="input-field">
                    <p>Your email <sup >*</sup></p>
                    <input type="email" name="email">
                </div>
                <div class="input-field">
                    <p>Your number <sup >*</sup></p>
                    <input type="text" name="number">
                </div>
                <div class="input-field">
                    <p>Your message <sup >*</sup></p>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" nam="submit-btn" class="btn">Send Message</button>
            </form>
            
        </div>
        <div class="address">
                <div class="title">
                    <img src="../images/download.png" class="logo">
                    <h1>Contact detail</h1>
                    <p>
                    Discover our physical location and experience the warmth of our community in person. We're here to welcome you with open arms!                    
                    </p>
                </div>
                <div class="box-container">
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>address</h4>
                            <p>252 bardo,tunis</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-phone-call"></i>
                        <div>
                            <h4>phone number</h4>
                            <p>98648783</p>
                        </div>
                    </div>
                    <div class="box">
                        <i class="bx bxs-map-pin"></i>
                        <div>
                            <h4>email</h4>
                            <p>matchaTN@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>     
             
         <?php include '../composant/footer.php'; ?>
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="../js/script.js"></script>
        <?php include '../composant/alert.php'; ?>
    
    </body>
</html>