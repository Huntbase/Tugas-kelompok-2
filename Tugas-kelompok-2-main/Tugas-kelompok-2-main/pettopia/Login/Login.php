<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>

<body>
    <!-- Log In Form Section -->
    <section> <!--Menggabungkan konten HTML-->
        <div class="container" id="container">
            <!-- SIGN up Form Section -->
            <div class="form-container sign-up-container">
                <form action="#">
                    <a href="" target="_blank" class="logo"><img src="LogoOutlineHitam.png" alt=""
                            style="width: 70px;"></a>
                    <h1>Sign Up</h1>
                    <div class="social-container">
                        <a href="" target="_blank" class="social"><img src="PETTOPIA/Google.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="fb.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="gmail.png" alt=""></a>
                    </div>
                    <span>Or use your Email for registration</span>
                    <label>
                        <input type="text" placeholder="Name" />
                    </label>
                    <label>
                        <input type="email" placeholder="Email" />
                    </label>
                    <label>
                        <input type="password" placeholder="Password" />
                    </label>
                    <button style="margin-top: 9px">Sign Up</button>
                </form>
            </div>
            <!-- SIGN up Form Section -->
            <!-- Log In Form Section -->
            <div class="form-container sign-in-container">
                <form action="#">
                    <a href="" target="_blank" class="logo"><img src="LogoOutlineHitam.png" alt=""
                            style="width: 70px;"></a>
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="" target="_blank" class="social"><img src="Google.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="fb.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="gmail.png" alt=""></a>
                    </div>
                    <span> Or sign in using Email Address</span>
                    <label>
                        <input type="email" placeholder="Email" />
                    </label>
                    <label>
                        <input type="password" placeholder="Password" />
                    </label>
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <!-- Log In Form Section -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log In</h1>
                        <p>Sign in here if you already have an account </p>
                        <button class="ghost mt-5" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create, Account!</h1>
                        <p>Sign up if you still don't have an account. </p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="Login.js"></script>
</body>

</html>