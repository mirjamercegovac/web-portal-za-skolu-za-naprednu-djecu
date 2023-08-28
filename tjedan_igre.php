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
            <a href="predmeti.php" >Predmeti</a>
            <a href="tjedan_igre.php" class="active">Tjedan igre</a>
        </nav>

        <a href="login.php" id="login" class="fas fa-user-circle"></a>
    </header>
    <!-- Navigation end -->


    <section class="heading-link">
        <h3>Tjedan igre</h3>
    </section>


    <section class="students-games">
        <h2>Popis učenika koji sudjeluju na natjecanju</h2>
        <p>UPUTE: Tjedan igre će se održati od 5 do 9 lipnja. Učenici koji su izabrani podijeljeni su po kategorijama. 
            Svaku kategoriju će voditi nastavnik sa izabranim učenicima. Natjecanje se održava cijeli tjedan što znači da svaki dan 
            slijedi nova igra. ...</p>
        <div class="box-container">
                <table class="table">
                    <thead>
                        <tr> 
                            <th>Br.</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Kategorija</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Anna</td>
                            <td>Smerzy</td>
                            <td>Znanost</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>John</td>
                            <td>Smith</td>
                            <td>Znanost</td>
                        </tr>
                        <tr class="line">
                            <td>3.</td>
                            <td>Jen</td>
                            <td>Lie</td>
                            <td>Znanost</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Filip</td>
                            <td>Hero</td>
                            <td>Tehnologija</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Steve</td>
                            <td>Pratt</td>
                            <td>Tehnologija</td>
                        </tr>
                        <tr class="line">
                            <td>3.</td>
                            <td>Sindi</td>
                            <td>King</td>
                            <td>Tehnologija</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Ella</td>
                            <td>Lance</td>
                            <td>Inženjerstvo</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Chloe</td>
                            <td>Deck</td>
                            <td>Inženjerstvo</td>
                        </tr>
                        <tr class="line">
                            <td>3.</td>
                            <td>Johny</td>
                            <td>Hoshi</td>
                            <td>Inženjerstvo</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Sam</td>
                            <td>Light</td>
                            <td>Umjetnost</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Suzzi</td>
                            <td>Cross</td>
                            <td>Umjetnost</td>
                        </tr>
                        <tr class="line">
                            <td>3.</td>
                            <td>Kira</td>
                            <td>Colt</td>
                            <td>Umjetnost</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Sam</td>
                            <td>Light</td>
                            <td>Matematika</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Suzzi</td>
                            <td>Cross</td>
                            <td>Matematika</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Kira</td>
                            <td>Colt</td>
                            <td>Matematika</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </section>

    <section class="card-box">
        <h2 class="h2-card">Rezultati i nagrade</h2>
        <div class="card">
            <div class="card2">
                <div class="card-image">
                    <img src="slike/1.png" alt=""></div>
                <div class="card-text">
                  <span class="date">16.6.2023.</span>
                  <h2>1. Inžinjeri</h2>
                  <p>Nagrada za osvojeno 1. mjesto: ...</p>
                </div>
            </div>
            <div class="card1">
                <div class="card-image">
                    <img src="slike/2.png" alt=""></div>
                <div class="card-text">
                  <span class="date">16.6.2023.</span>
                  <h2>2. Znanstvenici</h2>
                  <p>Nagrada za osvojeno 2. mjesto: ...</p>
                </div>
            </div>
            <div class="card3">
                <div class="card-image">
                    <img src="slike/3.png" alt=""></div>
                <div class="card-text">
                  <span class="date">16.6.2023.</span>
                  <h2>3. Matematičari</h2>
                  <p>Nagrada za osvojeno 3. mjesto: ...</p>
                </div>
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