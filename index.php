<html>

<head>
    <title> Pettopia </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <h3 style="font-family:'Franklin Gothic Medium'"> <i>PETTOPIA</i> </h3>
        <p>Melayani Anda dengan Sepenuh Hati</p>
    </div>

    <div class="logo">
        <img src="img\Navbar\Logo.png" alt="">
    </div>

    <div class="login">
        <a href="Login.php"> <img src="img\Navbar\profil.png" alt=""> </a>
    </div>

    <form>
        <input type="text" name="search" placeholder="Search">
    </form>

    <div class="keranjang">
        <a href="Keranjang.html"> <img src="img\Navbar\Keranjang.png"> </a>
    </div>


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

    <nav class="navbar">
        <ul>
            <li><a href="pettopia.html">Home</a></li>
            <li><a href="Aboutus.html">About Us</a></li>
            <li><a href="#">Services</a>
                <ul>
                    <li><a href="Penitipanhewan.html">Penitipan Hewan</a></li>
                    <li><a href="Groominghewan.html">Grooming Hewan</a></li>
                    <li><a href="Dokterhewan.html">Dokter Hewan</a></li>
                    <li><a href="Produk.html">Produk</a>
                    </li>
                </ul>
            </li>
            <li><a href="Articles.html">Articles</a></li>
            <li><a href="Promotion.html">Promotion</a></li>
            <li><a href="Contactus.html">Contact Us</a></li>
            <li><a href="Myorder.html">My Order</a></li>
        </ul>
    </nav>

    <script src="home.js"></script>

</body>

</html>