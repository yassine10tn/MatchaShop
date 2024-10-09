<?php
    /*include '../composant/connection.php';*/
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
        <title> green coffee -about us page</title>
    </head>
    <body>
    <?php include '../composant/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>About us</h1>
        </div>
        <div class="title2">
            <a href="../html/home.php">Home </a><span>/ about</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="../images/produit1.png" alt="">
                <div class="detail">
                    <span>product</span>
                     <h1>Thé Matcha Spicy Chai</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/produit2.png" alt="">
                <div class="detail">
                    <span>product</span>
                    <h1>Thé Matcha Premium</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="../images/acc1.png" alt="">
                <div class="detail">
                     <span>accessoire</span>
                    <h1>Bouteille Isolée Inoxydable</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
             </div>
            <div class="box">
                <img src="../images/acc2.png" alt="">
                <div class="detail">
                    <span>accessoire</span>
                    <h1>Fouet à Bambou Chasen</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
             </div>
        </div>
    <section class="services">
        <div class="title">
            <img src="../images/download.png" alt="logo" class="logo">
            <h1>Why choose us</h1>
            <p>At MatchaTN, we're your top choice for matcha for several reasons. 🍵 We meticulously source only the finest organic matcha leaves, ensuring freshness and purity. ✨ Our commitment to traditional craftsmanship combined with modern innovation guarantees consistent excellence in flavor and texture. 🌱 Plus, we prioritize sustainability, ensuring our practices benefit both customers and the environment. 🌍 Choose MatchaTN for a matcha experience unlike any other.</p>
            <br>
        </div>
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
    <div class="about">
        <div class="row">
            <div class="img-box">
                <img src="../images/aboutpict.png" class="image" alt="">
            </div>
            <div class="detail">
                <h1>visit our beautiful showroom!</h1>
                <p>
                Discover the essence of Japanese tea culture with our premium matcha 🍵. Sourced from Japan's finest estates 🌿, our vibrant green powder is packed with antioxidants and nutrients 💚. Elevate your tea ritual with MatchaWeb's exquisite collection 🍵✨.
                </p>
                <a href="view_products.php" class="btn">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="testimonial-container">
        <div class="title">
            <img src="../images/download.png" class="logo">
            <h1>What People Say About Us</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quidem. Autem ad consequatur magni quos enim, corrupti non. Odio veritatis ex quam, facere alias quibusdam sed placeat explicabo earum doloremque?
            </p>
        </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="../images/01.jpg" alt="">
                    <h1>Sara Hannechi</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, at rerum. Ad, sapiente incidunt. Sint porro ullam reiciendis ea beatae voluptatum accusamus itaque maiores, harum sunt saepe est aut inventore?</p>
                </div>
                <div class="testimonial-item">
                    <img src="../images/02.jpg" alt="">
                    <h1>Sabri ghazouni</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, at rerum. Ad, sapiente incidunt. Sint porro ullam reiciendis ea beatae voluptatum accusamus itaque maiores, harum sunt saepe est aut inventore?</p>
                </div>
                <div class="testimonial-item">
                    <img src="../images/03.jpg" alt="">
                    <h1>dua lipa</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, at rerum. Ad, sapiente incidunt. Sint porro ullam reiciendis ea beatae voluptatum accusamus itaque maiores, harum sunt saepe est aut inventore?</p>
                </div>
                <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
            </div>
        
    </div>
    <?php include'../composant/footer.php'; ?>
</div>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="../js/script.js"></script>
        <?php include '../composant/alert.php'; ?>
    
    </body>
</html>