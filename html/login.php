<?php 
include '../composant/connection.php'; 
session_start();
if(isset($_SESSION ['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id ='';
}
// register_user
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $email = filter_var($email,FILTER_SANITIZE_STRING);
    $pass=$_POST['pass'];
    $pass = filter_var($pass,FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM 'users' WHERE email =? AND PASSWORD = ?");
    $select_user->execute([$email,$pass]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);
    if($select_user ->rowCount()>0){
        $_SESSION['user_id'] = $row ['id'];
        $_SESSION['user_name'] = $row ['name'];
        $_SESSION['user_email'] = $row ['email'];
        header('location:home.php');
    }
    else{
        $message[]='incorrect username or password';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>green tea - login now </title>
</head>
<body>
    <div class="main-container">
        <section class="form-container">
            <div class="title">
                <img src="../images/download.png" alt="">
                <h1>Login Now</h1>
                <p>We're excited to have you here. Please log in to access exclusive content and connect with fellow members. Your presence enriches our community. Let's dive in and make memories together!</p>
            </div>
            <form action="" method="post">
                <div class="input-field">
                    <p>your name <sup>*</sup></p>
                    <input type="text"  name="name" required placeholder="entre your name" maxlength="50" id="">
                </div>

                <div class="input-field">
                    <p>your email <sup>*</sup></p>
                    <input type="email"  name="email" required placeholder="entre your email" maxlength="50" 
                    oninput="this.value=this.value.replace(/\s/g,'')">
                </div>
                <div class="input-field">
                    <p>your password <sup>*</sup></p>
                    <input type="password"  name="name" required placeholder="entre your password" maxlength="50" 
                    oninput="this.value=this.value.replace(/\s/g,'')">
                </div>
                
                <input type="submit" name="submit" value="login now" class="btn">
                <p>do not have an account? <a href="register.php">register now</a></p>
            </form>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="../js/script.js"></script>
    <?php include '../composant/alert.php'; ?>
</body>
</html>