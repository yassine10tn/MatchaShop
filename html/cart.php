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

    //update product in cart
    if(isset($_POST['update_cart'])){
        $cart_id=$_POST['cart_id'];
       $cart_id= filter_var($cart_id,FILTER_SANITIZE_STRING);
        $qty = $_POST['qty'];
        $qty = filter_var($qty,FILTER_SANITIZE_STRING);
        $update_qty=$conn->prepare("UPDATE 'cart' SET qty = ? where id = ?");
        $update_qty->execute([$qty,$cart_id]);
        $sucess_msg[] = 'cart quantity updated sucessfully';
    }

     //delete item from wishlist
     if(isset($_POST['delete_item'])){
       $cart_id=$_POST['cart_id'];
       $cart_id= filter_var($cart_id,FILTER_SANITIZE_STRING);

        $varify_delete_items = $conn->prepare("SELECT * FROM 'cart' where id=? ");
        $varify_delete_items ->execute([$cart_id]);
        if ($varify_delete_items->rowCount()>0){
            $delete_cart_id = $conn->prepare(("DELETE FROM 'cart' where id = ? "));
            $delete_cart_id->execute([$cart_id]);
            $sucess_msg[] = "cart item delete successfully";
        }else{
            $warning_msg[] = 'cart item already deleted';
        }
     }
    //empty cart
    if(isset($_POST['empty_cart'])) {
        $varify_empty_item = $conn->prepare("SELECT * from 'cart' where user_id=?");
        $varify_empty_item -> execute([$user_id]); 
        
        if($varify_empty_item ->rowCount() >0){
            $delete_cart_id = $conn->prepare(("DELETE FROM 'cart' where user_id = ? "));
            $delete_cart_id->execute([$user_id]);
            $sucess_msg[] = "empty successfully";
        }else{
            $warning_msg[] = 'cart item already deleted';
        }
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
        <title> matcha TN - wishlist page</title>
    </head>
    <body>
        <?php include '../composant/header.php'; ?>
    <div class="main">
        <div class="banner">
            <h1>my cart</h1>
        </div>
        <div class="title2">
            <a href="../html/home.php">home </a><span>/ cart</span>
        </div>
        <section class="products">
                <h1 class="title">products added in cart</h1>
                <div class="box-container">
                <?php
                    $grand_total=0;
                    $select_cart = $conn->prepare("SELECT * FROM cart WHERE user_id=?");
                    $select_cart->execute([$user_id]);
                    if($select_cart->rowCount()>0){
                        while($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)){
                            $select_products = $conn->prepare("SELECT * FROM 'products' where id= ?" );
                            $select_products->execute([$fetch_cart['$product_id']]);
                            if($select_products->rowCount()>0){
                                $fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)
                    ?>
                    <form action="" method="post" class="box">
                        <input type="hidden" name="cart"  value="<?=$fetch_cart['id']; ?>">
                        <img src="image/<?=$fetch_products['image']; ?> " class="img">
                        <h3 class="name"><?=$fetch_products['name'];?></h3>
                        <div class="flex">
                            <p class="price">price $<?$fetch_products['price'];?>/-</p>
                            <input type="number" name="qty" required min="1" value="<?=$fetch_cart['qty']; ?>" max="99" maxlength="2" class="qty" >
                            <button type="submit" name="update_cart" class="bx bxs-edit fa-edit"></button>
                        </div>
                        <p class="sub-total">sub sub-total : <span>$<?=$sub_total=($fetch_cart['$qty']* $fetch_cart['price']) ?></span></p>
                        <button class="btn" type="submit" name="delete_item" onclick="return confirm('delete this item')">delete</button>
                        
                        
                    </form>
                    <?php
                                    $grand_total+=$sub_total;
                                    }else{
                                        echo '<p class="empty">product was not found</p>';
                                    }
                                }
                            }else{
                                echo'<p class="empty">no products added yet!</p>';
                            
                            }    
                        ?>
                </div> 
                <?php 
                    if($grand_total !=0){
                        ?>
                        <div class="cart-total">
                            <p>total amount payable : <span>$ <?= $grand_total; ?>/-</span></p>
                            <div class="button">
                                <form action="post">
                                    <button type="submit" name="empty_cart" class="btn" onclick="return confirm('are you sure to empty your cart')" >empty cart</button>
                                </form>
                                <a href="checkout.php" class="btn">proceed to checkout</a>
                            </div>
                        </div>
                        <?php } ?>  
        </section>      
         <?php include '../composant/footer.php'; ?>
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="../js/script.js"></script>
        <?php include '../composant/alert.php'; ?>
    
    </body>
</html>