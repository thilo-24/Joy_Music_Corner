<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Joy Music Corner</title>
        <link rel="stylesheet" href="styles/home.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




        <!-- Font Awesome CDN for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="styles/login.css">
        
       
        <script defer src="script.js"></script>
        
    </head>
    
<body>
    <script>
        <?php
            session_start();
            if (isset($_SESSION["success"])) {
                echo "alert('" . $_SESSION["success"] . "');";
                unset($_SESSION["success"]); // Clear the message after showing it
            }

            if (isset($_SESSION["error"])) {
                echo "alert('" . $_SESSION["error"] . "');";
                unset($_SESSION["error"]);
            }
        ?>
    </script>
    <header class="header">
        <div class="logo">
            <img src="images/JOY.gif" alt="Joy Music Corner Logo" class="img-responsive">
        </div>
        <nav class="navbar">
            <a href="homepage.html"><i class="fas fa-home"></i> Home</a>
            <a href="login.php"><i class="fas fa-user"></i> Login</a>
            <a href="products.html"><i class="fas fa-guitar"></i> Products</a>
            <a href="aboutus.html"><i class="fas fa-info-circle"></i> About Us</a>
            <a href="contactus.html"><i class="fas fa-phone-alt"></i> Contact Us</a>
            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
        </nav>
    </header>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="auth/user_login.php" method="POST" class="sign-in-form">
    <h2 class="title">Sign In</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <input type="submit" value="Login" class="btn solid">
</form>

<form action="auth/user_registration.php" method="POST" class="sign-up-form">
    <h2 class="title">Sign Up</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required>
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    </div>
    <input type="submit" value="Sign Up" class="btn solid">
</form>

        </div>
    </div>
    
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Join us and explore a world of opportunities!</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="images/signin.svg" class="image" alt="Sign Up Image">
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Already a member?</h3>
                <p>Sign in to continue your journey.</p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="images/signup.svg" class="image" alt="Sign In Image">
        </div>
    </div>
</div>

<script>
    const signUpBtn = document.querySelector("#sign-up-btn");
    const signInBtn = document.querySelector("#sign-in-btn");
    const container = document.querySelector(".container");

    signUpBtn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
    });

    signInBtn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
    });
</script>




<br>
<br>
<br>
<br>
<br>
<br>
<br>


    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <h4><i class="fas fa-user-circle"></i> My Account</h4>
                    <ul>
                        <li><a href="account.php?type=acc"><i class="fas fa-cogs"></i> Edit Account</a></li>
                        <li><a href="cart.php"><i class="fas fa-shopping-cart"></i> View Cart</a></li>
                        <li><a href="account.php?type=addr"><i class="fas fa-map-marker-alt"></i> Edit Address</a></li>
                        <li><a href="account.php"><i class="fas fa-box"></i> Track Order</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><i class="fas fa-link"></i> Quick Links</h4>
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="private_policy.php"><i class="fas fa-shield-alt"></i> Privacy Policy</a></li>
                        <li><a href="products.php"><i class="fas fa-guitar"></i> Products</a></li>
                        <li><a href="index.php#contact"><i class="fas fa-phone-alt"></i> Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><i class="fas fa-share-alt"></i> Follow Us</h4>
                    <div class="social-links">
                        <a href="https://github.com/jmc-brand"><i class="fab fa-github"></i> GitHub</a>
                        <a href="https://t.me/jmc_support"><i class="fab fa-telegram"></i> Telegram</a>
                        <a href="https://facebook.com/jmc-brand"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="https://instagram.com/jmc-brand"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-row">
                <div class="footer-col">
                    <h4><i class="fas fa-info-circle"></i> Company Info</h4>
                    <ul>
                        <li><a href="aboutus.html"><i class="fas fa-building"></i> About Us</a></li>
                        <li><a href="careers.html"><i class="fas fa-briefcase"></i> Careers</a></li>
                        <li><a href="terms_of_service.html"><i class="fas fa-file-alt"></i> Terms of Service</a></li>
                        <li><a href="faq.html"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4><i class="fas fa-clock"></i> Opening Hours</h4>
                    <ul>
                        <li><span>Mon - Fri:</span> 9:00 AM - 8:00 PM</li>
                        <li><span>Sat - Sun:</span> 10:00 AM - 9:00 PM</li>
                    </ul>
                </div>
            </div>
    
            <h5 align="center">
                Copyright © 2025 Joy Music Corner. All Rights Reserved.
            </h5>
        </div>
    </footer>
    

</body>
</html>
