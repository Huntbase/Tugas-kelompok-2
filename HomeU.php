<?php require_once("auth.php"); ?>

<html>

<head>
    <title> Pettopia </title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="shortcut icon" href="img\Login\LogoOutlineHitam.png" type="image/x-icon">
    <link rel="icon" href="img\Login\LogoOutlineHitam.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <!-- Navbar -->
    <div class="header">
        <div class="logo">
            <a href="#"><img src="img\Navbar\Logo.png" alt=""></a>
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
            <div class="keranjang">
                <a href="Keranjang.html"> <img src="img\Navbar\Keranjang.png"> </a>
            </div>
            <div class="login">
                <a href="Login.html"> <img src="img\Navbar\profil.png" alt=""> </a>
            </div>
        </div>
    </div>
    <!-- Navbar -->

    <!-- Gambar slide -->
    <div class="containers">
        <div id="slide">
            <div class="item" style="background-image: url(pettopia/1.jpg);">
                <div class="content">
                    <div class="name">PENITIPAN HEWAN</div>
                    <div class="des">Penitipan hewan dengan tempat yang nyaman untuk hewan peliharaan anda!</div>
                    <!--Jangan lupa diganti linknya-->
                    <a href="Penitipanhewan.html"><button>See more</button></a>
                </div>
            </div>
            <div class="item" style="background-image: url(pettopia/2.jpg);">
                <div class="content">
                    <div class="name">GROOMING HEWAN</div>
                    <div class="des">Tempat memandikan dan memotong bulu hewan dengan layanan terbaik!</div>
                    <!--Jangan lupa diganti linknya-->
                    <a href="Groominghewan.html"><button>See more</button></a>
                </div>
            </div>
            <div class="item" style="background-image: url(pettopia/3.jpg);">
                <div class="content">
                    <div class="name">DOKTER HEWAN</div>
                    <div class="des">Dokter hewan dengan kualifikasi terbaik!</div>
                    <!--Jangan lupa diganti linknya-->
                    <a href="Dokterhewan.html"> <button>See more</button> </a>
                </div>
            </div>
            <div class="item" style="background-image: url(pettopia/4.jpg);">
                <div class="content">
                    <div class="name">JUAL HEWAN PELIHARAAN</div>
                    <div class="des">Berbagai macam hewan peliharaan tersedia!</div>
                    <!--Jangan lupa diganti linknya-->
                    <a href="Produkhewan.html"><button>See more</button></a>
                </div>
            </div>
            <div class="item" style="background-image: url(pettopia/5.jpeg);">
                <div class="content">
                    <div class="name">JUAL MAKANAN HEWAN</div>
                    <div class="des">Menyediakan berbagai macam makanan hewan terbaik!</div>
                    <!--Jangan lupa diganti linknya-->
                    <a href="Produkmakanan.html"><button>See more</button></a>
                </div>
            </div>
            <div class="item" style="background-image: url(pettopia/6.jpeg);">
                <div class="content">
                    <div class="name">JUAL AKSESORIS HEWAN</div>
                    <div class="des">Menjual berbagai aksesoris hewan yang lucu!</div>
                    <!--Jangan lupa diganti linknya-->
                    <a href="Produkaksesoris.html"><button>See more</button></a>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
    <!-- Gambar slide -->

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col">
                <img src="img\Login\LogoOutlineHitam.png" alt="LogoPettopia" class="logofooter">
            </div>
            <div class="col">
                <h3>Menu</h3>
                <ul>
                    <li><a href="pettopia.html">Home</a></li>
                    <li><a href="PenitipanHewan.html">Services</a></li>
                    <li><a href="Articles.html">Articles</a></li>
                    <li><a href="Promotion.html">Promotion</a></li>
                    <li><a href="Myorder.html">My Order</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Contact Us</h3>
                <p>Petshop Pettopia</p>
                <p>Jl. Gelimang Jaya Abadi No 1, Kota Bogor</p>
                <p>0251-1234-5678</p>
                <p>@pettopia.indonesia (IG)</p>
                <p>@pettopia.id (FB)</p>
            </div>
        </div>
        <hr>
        <div class="socialicons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>
        <p class="copyright">©2024 Petshop Pettopia</p>
    </footer>
    <!-- Footer -->

</body>

</html>