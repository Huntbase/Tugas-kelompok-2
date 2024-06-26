<?php require_once("auth.php");

$masked_password = str_repeat('*', 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pettopia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\Akun.css">
    <link rel="shortcut icon" href="img\Login\LogoOutlineHitam.png" type="image/x-icon">
    <link rel="icon" href="img\Login\LogoOutlineHitam.png" type="image/x-icon">
</head>

<body>
    <!-- Navbar -->
    <div class="header">
            <div class="logo">
                <img src="img\Navbar\Logo.png" alt="">
            </div>  
            <ul>
                <li><a href="pettopia.html">Home</a></li> 
                <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown__menu">
                        <ul>
                            <li><a href="Penitipanhewan.html">Penitipan Hewan</a></li>
                            <li><a href="Groominghewan.html">Grooming Hewan</a></li>
                            <li><a href="Dokterhewan.html">Dokter Hewan</a></li>
                            <li><a href="Produk.html">Produk</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="Articles.html">Articles</a></li>
                <li><a href="Promotion.html">Promotion</a></li>
                <li><a href="Myorder.html">My Order</a></li>
            </ul>
            <div class="hkiri">
                <div class = "keranjang">
                    <a href="Keranjang.html"> <img src = "img\Navbar\Keranjang.png"> </a>
                </div>
                <div class="login">
                    <a href="Login.html"> <img src="img\Navbar\profil.png" alt=""> </a>
                </div>
            </div>
        </div>
    <script src="home.js"></script>
    <!-- Navbar -->

    <!-- Tabel Akun -->
    <div class="profile-container">
        <div class="profile-sidebar">
            <div class="profile-picture">
                <img class="profile-picture" src="img\Upload\<?php echo  $_SESSION["user"]["photo"] ?>" />
                <button class="upload-button">Upload New Photo</button>
            </div>
            <div class="profile-info">
                <h3>Welcome Back!</h3>
                <p><?php echo  $_SESSION["user"]["name"] ?></p>
                <p><?php echo  $_SESSION["user"]["username"] ?></p>
            </div>
        </div>
        <div class="profile-main">
            <form action="update_profile.php" method="post">
                <div class="form-section">
                    <h3>User Info</h3>
                    <h4 for="full_name">Name</h4>
                    <p><?php echo  $_SESSION["user"]["name"] ?></p>

                    <h4 for="username">Username</h4>
                    <p><?php echo  $_SESSION["user"]["username"] ?></p>

                    <h4 for="password">Password</h4>
                    <p><?php echo htmlspecialchars($masked_password); ?></p>

                    <h4 for="email">Email Address</h4>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                </div>
            </form>
        </div>
    </div>
    <!-- Tabel Akun -->

</body>

</html>