<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img class="logoo" src="../images/logoo.png" alt=""></a>
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="view_products.php">PRODUCTS</a>
            <a href="order.php">ORDER</a>
            <a href="about.php">ABOUT US</a>
            <a href="contact.php">CONTACT</a>
        </nav>
        <div class="icons">
            <i class="bx bxs-user" id="user-btn"></i>
            <!--?php
                $count_wishlist_items= $conn->prepare("SELECT * FROM 'wishlist' WHERE user_id=?");
                $count_wishlist_items->execute([$user_id]);
                $total_wishlist_items=$count_wishlist_items->rowCount();
            ?-->
            
            <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup class="supp"><?/*=$total_wishlist_items?*/?>0</sup></a>
            <!--?php
                $count_cart_items = $conn->prepare("SELECT * FROM cart WHERE user_id=?");
                $count_cart_items->execute([$user_id]);
                
                $total_cart_items=$count_cart_items->rowCount();
                
            ?-->
            <a href="cart.php" class="cart-btn"><i class="bx bx-cart-download"></i><sup class="supp"><?/*=$total_cart_items?*/?>0</sup></a>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>    
            <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['email']; ?></span></p>
                <a href="login.php" class="btn">Login</a>
                <a href="register.php" class="btn">Register</a>
                <form method="post">
                    <button type="submit" name="logout" class="logout_btn">Log Out</button>
                </form>
            </div>
    </div>
</header>