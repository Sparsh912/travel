<?php
require "dbconnect.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>destHopla - Bali, Indonesia</title>
    <link rel="stylesheet" href="places.css">
    <style>
        .hero {
    background-image: url(<?php
                            require "dbconnect.php";
                            
                            if (isset($_GET['place'])) {
                                $place = $_GET['place'];
                            } 
                            else {
                                echo "No place selected.";
                            }
                            $sql="SELECT placephoto1 FROM  places WHERE placename='$place' ";
                            $result = mysqli_query($conn,$sql);
                            $data=mysqli_fetch_assoc($result);
                            echo $data["placephoto1"];
                            ?>);
    background-size: cover;
    background-position: center;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    color: white;
}
    </style>
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


    <section class="hero">
        <div class="hero-overlay"></div>
        <h1>
            <?php
                require "dbconnect.php";
                // Get the place from URL query parameter
                
                $sql="SELECT placename FROM  places WHERE placename='$place' ";
                $result = mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($result);
                echo $data["placename"];
                ?>
        </h1>
    </section>
    
    <section class="destination-content">
        <div class="destination-info">
            <h2>
                <?php
                require "dbconnect.php";
                $sql="SELECT placefullname FROM  places WHERE placename='$place' ";
                $result = mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($result);
                echo $data["placefullname"];
                ?>
            </h2>

            <div class="price">$
                <?php
                require "dbconnect.php";
                $sql="SELECT placeprice FROM  places WHERE placename='$place' ";
                $result = mysqli_query($conn,$sql);
                $data=mysqli_fetch_assoc($result);
                echo  $data["placeprice"] ;
                ?>
                <span>/ Per Person</span>
            </div>

            <?php
            require "dbconnect.php";
            $sql="SELECT placedetail FROM  places WHERE placename='$place' ";
            $result = mysqli_query($conn,$sql);
            $data=mysqli_fetch_assoc($result);
            echo "<p class='description'>" . $data["placedetail"] . "</p>";
            ?>


            <div class="tour-details">
                <h3>Tour Details</h3>
                <table class="details-table">
                    <tr>
                        <td>Destination</td>
                        <td>
                            <?php
                            require "dbconnect.php";
                            $sql="SELECT placefullname FROM  places WHERE placename='$place' ";
                            $result = mysqli_query($conn,$sql);
                            $data=mysqli_fetch_assoc($result);
                            echo $data["placefullname"];
                            ?>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td>Departure</td>
                        <td>International Airport</td>
                    </tr> -->
                    <tr>
                        <td>Trip Duration</td>
                        <td>
                            <?php
                            require "dbconnect.php";
                            $sql="SELECT placeduration FROM  places WHERE placename='$place' ";
                            $result = mysqli_query($conn,$sql);
                            $data=mysqli_fetch_assoc($result);
                            echo $data["placeduration"];
                            ?>
                            Days Trip
                        </td>
                    </tr>
                    <tr>
                        <td>Weather</td>
                        <td>
                            <?php
                            require "dbconnect.php";
                            $sql="SELECT placeweather FROM  places WHERE placename='$place' ";
                            $result = mysqli_query($conn,$sql);
                            $data=mysqli_fetch_assoc($result);
                            echo $data["placeweather"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Dress Code</td>
                        <td>
                            <?php
                            require "dbconnect.php";
                            $sql="SELECT placedress FROM  places WHERE placename='$place' ";
                            $result = mysqli_query($conn,$sql);
                            $data=mysqli_fetch_assoc($result);
                            echo $data["placedress"];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Price Includes</td>
                        <td>4-Star Resort Accommodation, Airport Transfers, Daily Breakfast & Dinner, Guided Tours</td>
                    </tr>
                    <tr>
                        <td>Not Included</td>
                        <td>• Flights • Travel Insurance • Personal Expenses • Optional Activities</td>
                    </tr>
                </table>
            </div>
            
            <div class="highlights">
                <h3>Tour Highlights</h3>
                <div class="highlight-item">
                    <div class="highlight-icon">✓</div>
                    <div class="highlight-text">Visit the sacred Monkey Forest and Ubud's art villages</div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">✓</div>
                    <div class="highlight-text">Explore the iconic Tanah Lot and Uluwatu temples</div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">✓</div>
                    <div class="highlight-text">Experience the stunning Tegalalang rice terraces</div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">✓</div>
                    <div class="highlight-text">Enjoy water sports and beach time in Nusa Dua</div>
                </div>
                <div class="highlight-item">
                    <div class="highlight-icon">✓</div>
                    <div class="highlight-text">Take part in a traditional Balinese cooking class</div>
                </div>
            </div>

            <div class="gallery">
                <h3>From our gallery</h3>
                <div class="gallery-grid">
                    <img src=<?php
                            require "dbconnect.php";
                            $sql="SELECT placephoto2 FROM  places WHERE placename='$place' ";
                            $result = mysqli_query($conn,$sql);
                            $data=mysqli_fetch_assoc($result);
                            echo $data["placephoto2"];
                            ?>
                            class="gallery-img" alt="Rice Terraces">
                    
                    <!-- <img src="/api/placeholder/400/300" class="gallery-img" alt="Uluwatu Temple">
                    <img src="/api/placeholder/400/300" class="gallery-img" alt="Bali Beach">
                    <img src="/api/placeholder/400/300" class="gallery-img" alt="Balinese Dance">
                    <img src="/api/placeholder/400/300" class="gallery-img" alt="Sacred Monkey Forest">
                    <img src="/api/placeholder/400/300" class="gallery-img" alt="Luxury Resort"> -->
                </div>
            </div>
        </div>
        
        <div class="booking-form">
            <h3>Book This Tour</h3>
            <form id="booking-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="date">Travel Date</label>
                    <input type="date" id="date" required>
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests</label>
                    <select id="guests" required>
                        <option value="1">1 Person</option>
                        <option value="2">2 Persons</option>
                        <option value="3">3 Persons</option>
                        <option value="4">4 Persons</option>
                        <option value="5">5 Persons</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message (Optional)</label>
                    <input type="text" id="message">
                </div>
                <button type="submit" class="book-btn">BOOK NOW</button>
            </form>
        </div>
    </section>
    
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form submission handler
            document.getElementById('booking-form').addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for booking your Bali tour! We will contact you shortly to confirm your reservation.');
            });
        });
    </script>
</body>
</html>