<header class="header">
    <div class="logo">
        <img src="images/JOY.gif" alt="Joy Music Corner Logo" class="img-responsive">
    </div>
    
    <nav class="navbar">
        <a href="homepage.html"><i class="fas fa-home"></i> Home</a>
        <?php if (isset($_SESSION["user_id"])): ?>
            <form action="./auth/logout.php" method="POST" style="display:inline;">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                <button type="submit">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        <?php else: ?>
            <a href="login.php"><i class="fas fa-user"></i> Login</a>
        <?php endif; ?>
        <a href="products.html"><i class="fas fa-guitar"></i> Products</a>
        <a href="aboutus.html"><i class="fas fa-info-circle"></i> About Us</a>
        <a href="contactus.html"><i class="fas fa-phone-alt"></i> Contact Us</a>
        <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
    </nav>
</header>