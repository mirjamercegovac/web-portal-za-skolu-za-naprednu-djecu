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
            <a href="#" class="active">Početna</a>
            <div class="dropdown">
                <a href="oskoli.php">O školi <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="oskoli.php#questions-answers">Pitanja i odgovori</a>
                    <a href="oskoli.php#gallery">Galerija</a>
                </div>
            </div> 
            <a href="kategorije.php">Kategorije</a>
            <a href="predmeti.php">Predmeti</a>
            <a href="tjedan_igre.php">Tjedan igre</a>
        </nav>

        <a href="login.php" id="login" class="fas fa-user-circle"></a>
    </header>
    <!-- Navigation end -->

    <!-- Home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <section class="swiper-slide slide" style="background: url(slike/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <h3>Škola za naprednu djecu</h3>
                        <p>Rješavanjem ankete provjerite u koju kategoriju najviše pripadate.</p>
                        <a href="quiz.php?n=1" class="btn">Započnite</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(slike/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <h3>Škola za naprednu djecu</h3>
                        <p>Postanite dio jedne od najpopularnijih škola 21.stoljeća.</p>
                        <a href="" class="btn">Započnite</a>
                    </div>
                </section>

                <section class="swiper-slide slide" style="background: url(slike/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <h3>Škola za naprednu djecu</h3>
                        <p>Jedina škola s ciljem usmjeravanja djece.</p>
                        <a href="" class="btn">Započnite</a>
                    </div>
                </section>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- Home section end -->


    <section class="steam-category">
        <h2>
            Kategorije <span class="span">Naprednih</span> učenika
        </h2>
        <div class="box-container">
            <div class="s-box">
                <img src="slike/S.png" alt="">
                <h3>Znanost</h3>
                <div class="info">
                    <p>Promatranje <br>
                        Opisivanje <br>
                        Identificiranje <br>
                        Eksperimentiranje
                    </p>
                </div>
                <p class="p">6 predmeta</p>
            </div>
            <div class="t-box">
                <img src="slike/T.png" alt="">
                <h3>Tehnologija</h3>
                <div class="info">
                    <p>Napredovanje <br>
                        Inoviranje <br>
                        Stvaranje <br>
                        Postizanje
                    </p>
                </div>
                <p class="p">4 predmeta</p>
            </div>
            <div class="e-box">
                <img src="slike/E.png" alt="">
                <h3>Inženjerstvo</h3>
                <div class="info">
                    <p>Projektiranje <br>
                        Poboljšavanje <br>
                        Planiranje <br>
                        Konstruiranje 
                    </p>
                </div>
                <p class="p">6 predmeta</p>
            </div>
            <div class="a-box">
                <img src="slike/A.png" alt="">
                <h3>Umjetnost</h3>
                <div class="info">
                    <p>Zamišljanje <br>
                        Istraživanje <br>
                        Izražavanje <br> 
                        Angažiranje 
                    </p>
                </div>
                <p class="p">11 predmeta</p>
            </div>
            <div class="m-box">
                <img src="slike/M.png" alt="">
                <h3>Matematika</h3>
                <div class="info">
                    <p>Mjerenje <br>
                        Formuliranje <br>
                        Kvantificiranje <br>
                        Računanje <br>
                    </p>
                </div>
                <p class="p">6 predmeta</p>
            </div>
        </div>
    </section>


    <section class="events">
        <h2>Događanja</h2>
        <div class="events-l">
            <ul>
                <li>
                    <div class="time">
                        <h3>24<br><span>Svibanj</span></h3>
                    </div>
                    <div class="details">
                        <h4>Dan otvorenih vrata</h4>
                        <p>Škola organizira dan otvorenih vrata za sve osnovnoškolce koji još ne znaju koju školu upisati. Dođite
                            i upoznajte se sa školom! Imat ćete priliku porazgovarati s nastavnicima i upoznati se s učenicima škole. Svi ste dobrodošli!
                        </p>
                    </div>
                </li>
                <li>
                    <div class="time">
                        <h3>2<br><span>Lipanj</span></h3>
                    </div>
                    <div class="details">
                        <h4>Tjedan igre</h4>
                        <p>Pripreme za natjecanje učenika u tjednu igre koji će se održati od 5. do 9. lipnja. Mole se učenici 
                            da dođu u školu kako bi dobili informacije o igarama koje će se održati sljedeći tjedan.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="events-r">
            <ul>
                <li>
                    <div class="time">
                        <h3>5<br><span>Lipanj</span></h3>
                    </div>
                    <div class="details">
                        <h4>Početak igara</h4>
                        <p>Pozivaju se učenici da u školu dođu 5. lipnja s početkom u 8 sati. Prilikom dolaska u školu na 
                            vratima će ih dočekati nastavnici koji će učenike povesti u učionice.</p>
                    </div>
                </li>
                <li>
                    <div class="time">
                        <h3>21<br><span>Lipanj</span></h3>
                    </div>
                    <div class="details">
                        <h4>Kraj škole</h4>
                        <p>Došao je kraj i ove školske godine. 1. i 2. razredi nastavu će imati ujutro od 8 do 11 sati, a 3. i 4. razredi od 13 do 16 sati.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <section class="container-news shape">
    <h2>Novosti</h2>
        <div class="news">
        <?php
            $query = "SELECT * FROM news
            LEFT JOIN category ON news.category = category.category_id
            LEFT JOIN users ON news.author = users.id
            ORDER BY news.news_id DESC";
            $result = mysqli_query($conn, $query);
        
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?> 
            <div class="news-box">
                <img src="upload/<?php echo $row['news_img']; ?>" alt="" class="news-img">
                <h2 class="category"><?php echo $row['category_name']; ?></h2>
                <a href="news_page.php?id=<?php echo $row['news_id']; ?>" class="news-title"><?php echo $row['title']; ?></a>
                <span class="news-date"><?php echo $row['news_date']; ?></span>
                <p class="news-description"><?php echo substr($row['description'],0,200) . "..."; ?></p>
                <span class="author-name">Autor: <?php echo $row['username']; ?></span>
            </div>
            <?php
        }
            }else{
                echo "<h5>nema pronađenih zapisa</h5>";
            }
        ?>
        </div>
        
        <div id="load-more">Učitaj više</div>
    </section>


    <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>

    <?php
        include("include/footer.html");
    ?>


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js links -->
    <script src="https://releases.jquery.com/git/jquery-3.x-git.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="backTop.js"></script>

</body>
</html>