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
                <a href="#" class="active">O školi <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="#questions-answers">Pitanja i odgovori</a>
                    <a href="#gallery">Galerija</a>
                </div>
            </div> 
            <a href="kategorije.php">Kategorije</a>
            <a href="predmeti.php">Predmeti</a>
            <a href="tjedan_igre.php">Tjedan igre</a>
        </nav>

        <a href="login.php" id="login" class="fas fa-user-circle"></a>
    </header>
    <!-- Navigation end -->


    <section class="heading-link">
        <h3>O školi</h3>
    </section>

    <section class="about">
       <div class="image">
        <img src="slike/allen.png" alt="">
       </div>

       <div class="content">
            <h3>O školi</h3>
            <p>Škola za naprednu djecu. Podijeljena je na kategorije: Znanost, Tehnologija, Inženjerstvo, Umjetnost, Matematika.</p>
            <h3>Tko smo mi?</h3>
            <p>Jedina škola u državi sa podijelom učenika u jednu od STEAM kategorija.</p>
            <h3>Ciljevi</h3>
            <p>Usmjeriti učenike na pravi smjer i poticati njihov razvoj na ona područja za koja pokazuju najviše interesa i najbolja postignuća.</p>
            
        </div>
        <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-phone"></i>
                    <h3>Telefon</h3>
                    <span>Tajništvo: +123-456-789</span>
                    <span>Računovodstvo: +123-456-789</span>
                    <span>Ravnateljica: +123-456-789</span>
                </div>
                <div class="icons">
                    <i class="fas fa-envelope"></i>
                    <h3>E-mail</h3>
                    <span>skolazadarovite@steam.com</span>
                </div>
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <h3>Adresa</h3>
                    <span>dar, steam - 00000</span>
                </div>
                <div class="icons">
                    <i class="fa-regular fa-clock"></i>
                    <h3>Radno vrijeme</h3>
                    <span>Ujutro: od 11 do 12 sati</span>
                    <span>Popodne: od 13:30 do 14:30 sati</span>
                </div>
            </div>
    </section>





    <!-- Questions and answers start -->
    <section class="questions-answers" id="questions-answers">
        <h2>Najčešća pitanja i odgovori</h2>
        <div class="container-qa">
            <article class="qa">
                <div class="qa-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="q-a">
                    <h4>Zašto se škola zove škola za naprednu djecu?</h4>
                    <p>Zato što je škola za razliku od ostalih podijeljena po kategorijama Znanost, Tehnologija, Inženjerstvo, Umjetnost, Matematika. Svakoj kategoriji dodijeljeni su predmeti samo za tu kategoriju.
            </article>
            <article class="qa">
                <div class="qa-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="q-a">
                    <h4>Gdje mogu pronaći anketu?</h4>
                    <p>Anketu možete pronaći prilikom prijave u sustav na navigacijskoj traci.</p>
                </div>
            </article>
            <article class="qa">
                <div class="qa-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="q-a">
                    <h4>Tko sve može upisati školu?</h4>
                    <p>Školu mogu upisati svi koji imaju preddispozicije za napredno dijete. Više o tome možete pronaći na stranici "Kategorije" gdje možete vidjeti kakve interese imaju djeca po pojedinoj kategoriji.</p>
                </div>
            </article>
            <article class="qa">
                <div class="qa-icon"><i class="fa-solid fa-plus"></i></div>
                <div class="q-a">
                    <h4>Kada se odvijaju igre?</h4>
                    <p>Igre su u školi organizirane svake godine, pred kraj školske godine i traju 1 tjedan.</p>
                </div>
            </article>
        </div>
    </section>
    <!-- Questions and answers end -->

    <!-- Gallery start -->
    <section class="gallery" id="gallery">
        <h2>Galerija</h2>
        <div class="box-container">
            <a href="slike/allen.png" class="box">
                <div class="image">
                    <img src="slike/allen.png" alt="">
                </div>
               
            </a>
            <a href="slike/Allen-exterior.jpg" class="box">
                <div class="image">
                    <img src="slike/Allen-exterior.jpg" alt="">
                </div>
                
            </a>
            <a href="slike/AllenSteam.jpg" class="box">
                <div class="image">
                    <img src="slike/AllenSteam.jpg" alt="">
                </div>
                
            </a>
            
            <a href="slike/STEMvsSTEAM.png" class="box">
                <div class="image">
                    <img src="slike/STEMvsSTEAM.png" alt="">
                </div>
                
            </a>
            <a href="slike/AI-LAB.webp" class="box">
                <div class="image">
                    <img src="slike/AI-LAB.webp" alt="">
                </div>
               
            </a>
            <a href="slike/students.jpg" class="box">
                <div class="image">
                    <img src="slike/students.jpg" alt="">
                </div>
               
            </a>
            <a href="slike/logo2.png" class="box">
                <div class="image">
                    <img src="slike/logo.png" alt="" style="width: 50%;">
                </div>
               
            </a>
            
        
        </div>
    </section>
    <!-- Gallery end -->

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