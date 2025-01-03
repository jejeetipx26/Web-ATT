<?php include 'auth.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pars Coder || Space Travel</title>
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="../img/Logoo.png" alt="">Galaxify</a>
        <ul class="navlist">
            <li class="lilink"><a href="#home" class="nav-item active"><b>Home</b></a></li>
            <li class="lilink"><a href="#flight-list" class="nav-item"><b>Flight List</b></a></li>
            <li class="lilink"><a href="#char" class="nav-item"><b>Character</b></a></li>
        </ul>

        <div class="right-side">
            <a href="./logout.php" class="mybtn">Logout</a>
            <div id="menu-icon" class="bx bx-menu"></div>
        </div>

    </header>


    <!-- start home action -->
    <section id="home" class="home">
        <div class="home-text scroll-left">
            <h1> We Know You Are <span> <?php echo $_SESSION['username']; ?> </span> </h1>
            <h2>Let's Rule The Planet</h2>
        </div>

        <div class="home-img">
            <img src="../img/Alien.png" alt="" class="hero">
            <img src="../img/Black_and_Yellow_Alien_T-Shirt-removebg-preview.png" alt="" class="moon-light">
        </div>

        <div class="planet-rotate">
            <img src="../img/Black Blue.png" alt="" class="planet">
        </div>

    </section>
    <!-- end home action -->

    <!-- start Flight Section-->
    <section id="flight-list" class="flight-list">
        <div class="container">
            <div class="flight-box scroll-top">
                <div class="planet-img">
                    <img src="../img/mercury.png" alt="">
                </div>
                <h2>Mercury</h2>
                <p>The smallest planet in our solar system. It is located closest to the Sun compared
                    to all the other planets. It doesn't have any moons of its own like some other planets do.</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>

            <div class="flight-box scroll-bottom">
                <div class="planet-img">
                    <img src="../img/venus.png" alt="">
                </div>
                <h2>Venus</h2>
                <p>The hottest planet in our solar system. It is often called the "Morning Star" or the "Evening Star"
                    because it shines brightly in the sky before sunrise or after sunset.</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>

            <div class="flight-box scroll-top">
                <div class="planet-img">
                    <img src="../img/earth.png" alt="">
                </div>
                <h2>Earth</h2>
                <p>We lived here! It's the only known planet in the universe that supports life as we know it. Earth is
                    often called the
                    "Blue Planet" because it's covered mostly with water.</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>

            <div class="flight-box scroll-bottom">
                <div class="planet-img">
                    <img src="../img/mars.png" alt="">
                </div>
                <h2>Mars</h2>
                <p>The fourth planet is often called the "Red Planet" because of its reddish appearance. It has two
                    small
                    moons named Phobos and Deimos. Mars have potential for life</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>

            <div class="flight-box scroll-top">
                <div class="planet-img">
                    <img src="../img/Jupiter.png" alt="">
                </div>
                <h2>Jupiter</h2>
                <p>Known as the "King of the Planets" because it's the largest planet in our solar system. Its size is
                    so
                    enormous that you could fit more than 1,300 Earths inside it!</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>


            <div class="flight-box scroll-bottom">
                <div class="planet-img">
                    <img src="../img/Saturn.png" alt="">
                </div>
                <h2>Saturn</h2>
                <p>Saturn is known for its magnificent rings. It is the second-largest planet in our solar system. It
                    has a vast family of moons,
                    with over 80 known moons orbiting around it.</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>

            <div class="flight-box scroll-top">
                <div class="planet-img">
                    <img src="../img/Uranus.png" alt="">
                </div>
                <h2>Uranus</h2>
                <p>Famously known for its sideways tilt, as it spins on its side compared to other planets.
                    It's the coldest planet in our solar system and the seventh planet from the Sun.</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>

            <div class="flight-box scroll-bottom">
                <div class="planet-img">
                    <img src="../img/Neptune.png" alt="">
                </div>
                <h2>Neptune</h2>
                <p>The eighth and farthest planet from the Sun in our solar system. It is located billions of miles away
                    from Earth, making it one
                    of the most distant planets we know.</p>
                <a href="#" class="mybtn">Inspect</a>
            </div>
        </div>
    </section>
    <!-- end Flight Section-->

    <!-- Start Mission History Section-->
    <section id="char" class="flight-list char">
        <div class="container">
            <div class="flight-box scroll-top">
                <img src="../img/Kwibwil.png" alt="">
                <div class="char-details">
                    <div class="title">Kwibwil</div>
                    <p>Kwibwil is remarkably empathetic, intuitively
                        understanding others' emotions and offering support and compassion whenever needed.</p>

                    <a href="#" class="mybtn">Select</a>
                </div>
            </div>

            <div class="flight-box scroll-bottom">
                <img src="../img/Lunar.png" alt="">
                <div class="char-details">
                    <div class="title">Lunar</div>
                    <p>Lunar is incredibly diligent, always meticulously completing tasks with precision and dedication.
                    </p>
                    <a href="#" class="mybtn">Select</a>
                </div>
            </div>

            <div class="flight-box scroll-top">
                <img src="../img/Estharbies.png" alt="">
                <div class="char-details">
                    <div class="title">Estharbies</div>
                    <p> Estharbies exudes boundless optimism, challenged and spreading positivity wherever he goes.</p>

                    <a href="#" class="mybtn">Select</a>
                </div>
            </div>

            <div class="flight-box scroll-bottom">
                <img src="../img/Fluffnugget.png" alt="">
                <div class="char-details">
                    <div class="title">Fluffnugget</div>
                    <p>Fluffnugget effortlessly weaving humor into conversations and brightening everyone's day with her
                        quick remarks.
                    </p>

                    <a href="#" class="mybtn">Select</a>
                </div>
            </div>
        </div>
        <div class="char-btn scroll-scale">
            <a href="#" class="mybtn">More Character</a>
        </div>
    </section>
    <!-- end  Section-->

    <!-- Start Footer Website-->
    <footer>
        <div class="container-foot">

            <div class="leftBox scroll-top">
                <a href="#" class="logo"><img src="../img/Logoo.png" alt="">Galaxify</a>
                <p style="text-align:justify;">"Galaxify" is a sleek web platform for immersive space exploration,
                    featuring stunning imagery and scientific articles to expand your
                    cosmic understanding. Explore the universe at your fingertips.</p>
                <ul class="social-media">
                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                </ul>
            </div>

            <div class="center-box scroll-bottom">
                <h3 class="title">Quick Links</h3>
                <ul class="quick-menu">
                    <li class="lilink"><a href="#home" class="nav-item active">Home</a></li>
                    <li class="lilink"><a href="#flight-list" class="nav-item active">Flight List</a></li>
                    <li class="lilink"><a href="#char" class="nav-item active">Character</a></li>
                </ul>
            </div>

            <div class="rightBox scroll-top">
                <h3 class="title">Contact Us</h3>
                <ul class="info">
                    <li><span><i class='bx bxs-phone'></i>
                            <p><a href="#">+62 877 1738 2364</a></p>
                        </span></li>
                    <li><span><i class='bx bxs-envelope'></i>
                            <p><a href="#">dilaimouts@gmail.com</a></p>
                        </span></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- end Footer Website-->

    <div class="copyRight">
        <p class="scroll-top">Copyright &copy; 2024 by HJD upin ipin kak ros || All Right Reserved</p>
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
    </div>

    <script src="../script.js"></script>

    
</body>

</html>