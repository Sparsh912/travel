<?php
$host = "localhost";
$dbname = "tourists";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM tourist WHERE email='$email' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        header(Location :"destination.html");
        exit;
    } else {
        // Login failed
        header(Location :"login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <nav class="nav">
            <div class="logo">
                <img src="icon/logo.png" alt="Triptopia">
            </div>
            <div>
                <a href="http://127.0.0.1:3000/landingpage.html"><span>Home</span></a>
                <a href="http://127.0.0.1:3000/destination.html"><span>Destination</span></a>
                <a href="#information"><span>Contacts</span></a>
            </div>
            <div class="loginbtn">
                <label for="login">
                    <img value="login" src="icon/ic_user-1.svg" alt="">
                    <span value="login"><a href="http://localhost/sparshPHP/login.php">Login</a></span>
                </label>
                <a href="http://localhost/sparshPHP/signup.php"><button class="signupbtn">Sign Up</button></a>
            </div>
        </nav>
    </header>

<div class="wrapper">
    <div class="container">
      <div class="left">
        <img src="https://img.freepik.com/free-photo/attractive-stylish-young-woman-khaki-dress-desert-traveling-africa-safari-wearing-hat-backpack-taking-photo-vintage-camera_285396-9161.jpg?semt=ais_hybrid&w=740" alt="Traveler" />
      </div>
      <div class="right">
        <form class="form">
          <h2>Welcome</h2>
          <p>Login with Email</p>
          <input type="email" placeholder="Enter Email or Username">
          <input type="password" placeholder="Enter Password">
          <button type="submit">LOGIN</button>
          <div class="or">OR</div>
          <p class="login">Don't have account? <a href="http://localhost/sparshPHP/signup.php">Register Now</a></p>
        </form>
      </div>
    </div>
  </div>


    <footer>
        <div class="information" id="information">
            <div class="address">
                <img src="icon/log _bg_blue.png">
                <p>Hello, we are Lift Media. Our goal is to translate the positive effects from revolutionizing</p>
                <div class="icon">
                    <a href="#"><img src="icon/facebook.png"></a>
                    <a href="#"><img src="icon/instagram.png"></a>
                    <a href="#"><img src="icon/twitter.png"></a>

                </div>
            </div>
            <div class="about">
                <h3>About</h3>
                <div><a href="#">About Us</a></div>
                <div><a href="#">Our Services</a></div>
                <div><a href="#">Policy</a></div>
                <div><a href="#">Terms & condition</a></div>
            </div>
            <div class="contact">
                <h3>Contact</h3>
                <div>
                    <img src="icon/contact.png">
                    <span>+012 345 6789</span>
                </div>
                <div>
                    <img src="icon/mail.png">
                    <span>triptopia@gmail.com</span>
                </div>
                <div>
                    <img src="icon/position.png">
                    <span>123 street, Nagpur</span>
                </div>

            </div>
            <div class="gallery">
                <h3>Gallery</h3>
                <img src="icon/footer.png">
            </div>
        </div>
        <div class="copyright">
            <p>© 2024 Triptopia. All rights reserved</p>
        </div>
    </footer>

</body>
</html>
