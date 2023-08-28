<?php
    include('include/connection.php');
    session_start(); 
    
    include('include/header.php');  
?>

    <!-- Navigation start -->
    <header class="header">

        <div id="menu" class="fas fa-bars"></div>
        <a href="index.php" class="logo"><img src="slike/logo2.png" alt=""><p>ŠND</p></a>
       
        <nav class="navbar">
            <a href="index.php">Početna</a>
            <div class="dropdown">
                <a href="oskoli.php" >O školi <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="oskoli.php#questions-answers">Pitanja i odgovori</a>
                    <a href="oskoli.php#gallery">Galerija</a>
                </div>
            </div> 
            <a href="kategorije.php">Kategorije</a>
            <a href="#" class="active">Predmeti</a>
            <a href="tjedan_igre.php">Tjedan igre</a>
        </nav>

        <a href="login.php" id="login" class="fas fa-user-circle"></a>
    </header>
    <!-- Navigation end -->


    <section class="heading-link">
        <h3>Predmeti</h3>
    </section>


    <section>
        <h2>Nastavnici koji vode kategorije i popis svih predmeta po kategorijama</h2>
        <div class="teacher-content" style="padding-bottom: 4rem;">
            <div class="box-s">
                <img src="https://cdn-icons-png.flaticon.com/512/194/194935.png" alt="">
                <h3>Zeus Grom</h3>
                <h5>Znanost</h5>
                <p class="p">Kontakt e-mail: znanost@steam.com</p>
            </div>
            <div class="box-t">
                <img src="https://cdn-icons-png.flaticon.com/512/194/194935.png" alt="">
                <h3>Ares Rat</h3>
                <h5>Tehnologija</h5>
                <p class="p">Kontakt e-mail: tehnologija@steam.com</p>
            </div>
            <div class="box-e">
                <img src="https://cdn-icons-png.flaticon.com/512/194/194935.png" alt="">
                <h3>Apolon Medi</h3>
                <h5>Inženjerstvo</h5>
                <p class="p">Kontakt e-mail: inzenjerstvo@steam.com</p>
            </div>
            <div class="box-a">
                <img src="https://cdn-icons-png.flaticon.com/512/194/194936.png" alt="">
                <h3>Artemida Moon</h3>
                <h5>Umjetnost</h5>
                <p class="p">Kontakt e-mail: umjetnost@steam.com</p>
            </div>
            <div class="box-m">
                <img src="https://cdn-icons-png.flaticon.com/512/194/194936.png" alt="">
                <h3>Atena Civil</h3>
                <h5>Matematika</h5>
                <p class="p">Kontakt e-mail: matematika@steam.com</p>
            </div>
        </div>

        <div class="subjects-box-container">
            
            <div class="box-s">
                <img src="slike/physics2.png" alt="">
                <h3>Fizika</h3>
                <div class="info">
                    <p></p>
                </div>
            </div>

            <div class="box-s">
                <img src="slike/biology2.png" alt="">
                <h3>Biologija</h3>
                <p></p>
            </div>

            <div class="box-s">
                <img src="slike/chemistry2.png" alt="">
                <h3>Kemija</h3>
                <p>
                </p>
            </div>

            <div class="box-s">
                <img src="slike/geography.png" alt="">
                <h3>Geografija</h3>
                <p></p>
            </div>

            <div class="box-s">
                <img src="slike/geology2.png" alt="">
                <h3>Geologija</h3>
                <p></p>
            </div>

            <div class="box-s">
                <img src="slike/astronomy.png" alt="">
                <h3>Astronomija</h3>
                <p></p>
            </div>

        </div>
        <div class="subjects-box-container">
            
            <div class="box-t">
                <img src="slike/computer.png" alt="">
                <h3>Informatika</h3>
                <div class="info">
                    <p></p>
                </div>
            </div>
            

            <div class="box-t">
                <img src="slike/chemistry2.png" alt="">
                <h3>Biotehnologija</h3>
                <p>
                </p>
            </div>

            <div class="box-t">
                <img src="slike/geography.png" alt="">
                <h3>Biomedicina</h3>
                <p></p>
            </div>

            

            <div class="box-t">
                <img src="slike/robot2.png" alt="">
                <h3>Robotika</h3>
                <p></p>
            </div>

        </div>
        <div class="subjects-box-container">
            
            <div class="box-e">
                <img src="slike/physics2.png" alt="">
                <h3>Strojarstvo</h3>
                <div class="info">
                    <p></p>
                </div>
            </div>

            <div class="box-e">
                <img src="slike/electricalEngineering.png" alt="">
                <h3>Elektrotehnika</h3>
                <p></p>
            </div>

            <div class="box-e">
                <img src="slike/electricalEnergy.png" alt="">
                <h3>Elektroenergetika</h3>
                <p></p>
            </div>

            <div class="box-e">
                <img src="slike/geography.png" alt="">
                <h3>Geografija</h3>
                <p></p>
            </div>

            <div class="box-e">
                <img src="slike/geology2.png" alt="">
                <h3>Geologija</h3>
                <p></p>
            </div>

            <div class="box-e">
                <img src="slike/astronomy.png" alt="">
                <h3>Astronomija</h3>
                <p></p>
            </div>

        </div>
        <div class="subjects-box-container">
            
            <div class="box-a">
                <img src="slike/art.png" alt="">
                <h3>Likovni</h3>
                <div class="info">
                    <p></p>
                </div>
            </div>

            <div class="box-a">
                <img src="slike/music2.png" alt="">
                <h3>Glazbeni</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/history.png" alt="">
                <h3>Povijest</h3>
                <p>
                </p>
            </div>

            <div class="box-a">
                <img src="slike/language.png" alt="">
                <h3>Jezik</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/sociology.png" alt="">
                <h3>Sociologija</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/psychology.png" alt="">
                <h3>Psihologija</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/philosophy3.png" alt="">
                <h3>Filozofija</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/logic.png" alt="">
                <h3>Logika</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/tzk.png" alt="">
                <h3>TZK</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/elections.png" alt="">
                <h3>Politika i gospodarstvo</h3>
                <p></p>
            </div>

            <div class="box-a">
                <img src="slike/rore.png" alt="">
                <h3>Vjeronauk / Etika</h3>
                <p></p>
            </div>

        </div>
        <div class="subjects-box-container">
            
            <div class="box-m">
                <img src="slike/algebra.png" alt="">
                <h3>Algebra</h3>
                <div class="info">
                    <p></p>
                </div>
            </div>

            <div class="box-m">
                <img src="slike/geometry.png" alt="">
                <h3>Geometrija</h3>
                <p></p>
            </div>

            <div class="box-m">
                <img src="slike/analytics.png" alt="">
                <h3>Analitika</h3>
                <p>
                </p>
            </div>

            <div class="box-m">
                <img src="slike/geography.png" alt="">
                <h3>Kombinatorika</h3>
                <p></p>
            </div>

            <div class="box-m">
                <img src="slike/geology2.png" alt="">
                <h3>Vjerojatnost i statistika</h3>
                <p></p>
            </div>

            <div class="box-m">
                <img src="slike/astronomy.png" alt="">
                <h3>Topologija</h3>
                <p></p>
            </div>

        </div>
    </section>
    
   

    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>
    <?php
        include("include/footer.html");
    ?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="backTop.js"></script>
</body>
</html>