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
            <a href="index.php" >Početna</a>
            <div class="dropdown">
                <a href="oskoli.php">O školi <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="oskoli.php#questions-answers">Pitanja i odgovori</a>
                    <a href="oskoli.php#gallery">Galerija</a>
                </div>
            </div> 
            <a href="#" class="active">Kategorije</a>
            <a href="predmeti.php">Predmeti</a>
            <a href="tjedan_igre.php">Tjedan igre</a>
        </nav>

        <a href="login.php" id="login" class="fas fa-user-circle"></a>
    </header>
    <!-- Navigation end -->

    <section class="heading-link">
        <h3>Kategorije</h3>
    </section>

    
    <!-- <div class="line-container" >
   
        <svg viewBox="0 0 91 1262" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M47.9997 0V330.752C47.9997 333.757 49.3505 336.602 51.6785 338.501L66.9998 351C66.9998 351 43.9998 338.433 29.4998 351C21.9998 357.5 20.4996 369.8 25.9997 377.5C35.8431 391.28 55.9996 385.5 68.4997 397C78.0544 405.79 78.9229 418.5 71.9998 426C53.9997 445.5 23.4997 429.5 23.4997 429.5L43.4676 442.54C46.2952 444.387 47.9997 447.536 47.9997 450.913L47.9997 534.204C47.9997 538.551 45.1915 542.4 41.0519 543.727L8.99969 554H87.9997V558H47.9997V639.112C47.9997 640.866 49.0399 642.452 50.6481 643.151V643.151C54.1104 644.657 54.1982 649.535 50.7923 651.164L50.5799 651.266C49.0047 652.019 48.0055 653.614 48.0146 655.36L48.4661 742.05C48.4866 745.977 50.8036 749.529 54.3895 751.129L76.4997 761H20.9997V798H68.4997V801H20.9997V845H76.4997L55.2868 852.197C51.2293 853.574 48.4997 857.382 48.4997 861.667L48.4998 950.5L9.99976 1055.5H13.4998L50.4997 955L86.9997 1055.5H83.4997L72.4997 1026H28.4998L17.4998 1055.5H38.4998C44.0226 1055.5 48.4998 1059.98 48.4998 1065.5L48.5 1141.91C48.5 1147.27 44.2726 1151.68 38.9163 1151.9L21.6374 1152.62C16.4644 1152.83 12.3113 1156.96 12.0651 1162.13L12.0001 1163.5L2.00006 1261H5.00006L14.5001 1164L46.5001 1227L80 1164L89.5 1261" stroke="black" stroke-width="2"/>
        </svg>

    </div> -->
    
    
    
    
    
    

    <section>
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'Categories')" id="defaultOpen">O kategorijama</button>
            <button class="tablinks" onclick="openTab(event, 'Science')">Znanost</button>
            <button class="tablinks" onclick="openTab(event, 'Technology')">Tehnologija</button>
            <button class="tablinks" onclick="openTab(event, 'Engineering')">Inženjerstvo</button>
            <button class="tablinks" onclick="openTab(event, 'Art')">Umjetnost</button>
            <button class="tablinks" onclick="openTab(event, 'Math')">Matematika</button>

        </div>

        <div id="Categories" class="tabcontent">
            <h3>Kategorije</h3>
            <p>Pojam "Darovito dijete" što zapravo znači i što uraditi po tom pitanju? Vrlo je važno da dijete što 
                ranije počne razvijati svoje sposobnosti u 
                području za koje najviše pokazuje interes.
                <br>Ta djeca mogu biti nadarena u mnogim različitim područjima koja uključuju:
                    <li>jezik/verbalno (npr. sposobnost pisanja, govora ili čitanja),</li>
                    <li>vizualne i izvedbene umjetnosti (crtanje, slikanje, glazbene sposobnosti),</li>
                    <li>tijelo/pokret/psihomotorna sposobnost (npr. ples),</li>
                    <li>logički i matematički (npr. broj i klasifikacija),</li>
                    <li>međuljudski (npr. komunikacija, sposobnost vođenja).</li>  
            </p>
            <p>U nastavku na karticama znanost, tehnologija, inženjerstvo, umjetnost, matematika može se pronaći 
                nešto više o tome kakv interes pokazuju djeca za
                pojedinu kategoriju, te popis predmeta za svaku kategoriju.
            </p>
            <br><p>Neki od poznatih genija su:</p>
            <div class="teacher-content">
            <div class="box">
                <img src="slike/Richard_Feynman.jpg" alt="">
                <h3>Richard Feynman</h3>
                <h5>Fizika</h5>
                <p>Kasno je govorio i nije progovorio sve do svog trećeg rođendana. Na njega snažno je utjecao njegov otac, koji ga je
                     poticao da postavlja pitanja kako bi doveo u pitanje ortodoksno razmišljanje. Kao dijete, imao je talent za inženjerstvo. 
                    Dok je bio u osnovnoj školi, napravio je kućni protuprovalni sustav.</p>
            </div>
            <div class="box">
                <img src="slike/Albert_Einstein.jpg" alt="">
                <h3>Albert Einstein</h3>
                <h5>Fizika</h5>
                <p>Progovorio je kasnije nego većina prosječne djece. Einstein je sam tvrdio da nije progovorio prije svoje treće godine. 
                    Einstein je imao sreću što je oko sebe našao ljude koji su poticali njegov interes za matematiku i znanost. itanje. Kad je Einstein
                     imao 12 godina, sam je učio geometriju iz jedne od tih knjiga.</p>
            </div>
            <div class="box">
                <img src="slike/IsaacNewton.jpg" alt="">
                <h3>Isaac Newton</h3>
                <h5>Fizika, matematika, astronomija</h5>
                <p> Nije bio običan dječak, umjesto da se igrao tipičnim igračkama on je vrijeme provodio konstruirajući mehaničke lutke, 
                    fenjere, drveni sat koji se sam navijao, mlin kojeg je pokretao miš itd. Od 12. do 17.godine odgajao ga je ljekarnik.
                    To je razvilo njegov interes za kemiju. Mladi Isaac bio je prirodno znatiželjan.</p>
            </div>
            <div class="box">
                <img src="slike/marie-curie.jpg" alt="">
                <h3>Marie Curie</h3>
                <h5>Kemija, fizika</h5>
                <p>Roditelji su poticali njezino zanimanje za znanost. Kad god je imala vremena, proučavala je knjige iz kemije, 
                    fizike i matematike. Bila je toliko gladna učenja da je čak pohađala ilegalno sveučilište, 
                    kako bi učila o poljskoj kulturi i praktičnoj znanosti. </p>
            </div>
            </div>
        </div>

        <div id="Science" class="tabcontent">
            <div class="section-category S" style="background:url(slike/Physics.png) no-repeat; 
                                                background-position-x: 60px;
                                                background-position-y: 10px;">
                <div class="image">
                    <img src="slike/S.png" alt="">
                </div>
                <div class="content" style="background:#d7ffae;">
                    <h3>Znanost (engl. Science)</h3>
                    <p>Učenik će pokazivati jaku znatiželju o predmetima i okolini, trežit će obješnjenja za stvari i događaje koje opaža, često će postavljati
                        pitanja, posebice "Zašto?". Pokazivat će interes za istraživanje znanstvenih fenomena. Pokazivat će dobru kocentraciju, sakupljanje, sortiranje
                        i klasificiranje predmeta. Biti će zainteresiran za jedno određeno područje znanosti (npr. astrofizika) dok će druga područja isključivati.
                        Povezivat će nove ideje s poznatim. Brzo će uočiti smjer istrage i predvidjeti ishode. Koristit će opširniji znanstveni riječnik od svojih vršnjaka
                        kada objašnjavaju stvari i događaje.
                    </p>
                    <a href="https://science-education-research.com/projects/apecs/ascend-project/who-are-gifted-in-science/" target=”_blank” class="btn">Više</a>
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
        </div>

        <div id="Technology" class="tabcontent">
            <div class="section-category T" style="background:url(slike/Circuit.png) no-repeat;
                                                background-position-x: 60px;
                                                background-position-y: 10px;">
                <div class="image">
                    <img src="slike/T.png" alt="">
                </div>
                <div class="content" style="background:#d7e8ff;">
                    <h3>Tehnologija (engl. Technology)</h3>
                    <p>Učenike će zanimati kodiranje. Voljet će računalne igre, aplikacije i programe. Pokazivat će interes prema slagalicama (puzzle). Učenik
                    će moći prepoznati strukturalne nedostatke (dijelove koji se ne uklapaju) i naučiti kako izgraditi nešto iz temelja (dovršiti slagalicu).
                    Voljet će rješavati probleme i mikro zadatke. Razmišljat će logično.
                    </p>
                    <a href="https://blog.hatchcoding.com/4-signs-that-your-child-will-like-coding" target="_blank" class="btn">Više</a>
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
        </div>

        <div id="Engineering" class="tabcontent">
            <div class="section-category E" style="background:url(slike/Automation.png) no-repeat;
                                                background-position-x: 60px;
                                                background-position-y: 10px;">
                <div class="image">
                    <img src="slike/E.png" alt="">
                </div>
                <div class="content" style="background:#fffbc5;">
                    <h3>Inženjerstvo (engl. Engineering)</h3>
                    <p>Učenike koji su napredni u inženjerstvu prepoznat ćemo po tehničkim i mekim vještinama. Tehničke vještine: osnove informatike, 
                        viša matematika, vjerojatnost i statistika, modeliranje podataka, dizajn sustava. Meke vještine: vodstvo, komunikacija, kritičko misljenje i vještine,
                        timski rad, jaka želja za učenjem, pozornost na detalje.
                    </p>
                    <a href="https://areteem.org/blog/gifted-students-engineering-professions/" target="_blank" class="btn">Više</a>
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
        </div>

        <div id="Art" class="tabcontent">
            <div class="section-category A" style="background:url(slike/PaintPaletteWithBrush.png) no-repeat;
                                                background-position-x: 60px;
                                                background-position-y: 10px;">
                <div class="image">
                    <img src="slike/A.png" alt="">
                </div>
                <div class="content" style="background:#f2d4ff;">
                    <h3>Umjetnost (engl. Arts)</h3>
                    <p>Učenik će imati jaku želju za stvaranjem u vizualnom obliku jer ga pokreće ideja, mašta, humor ili osobno iskustvo. Razmišljat će i izražavati se na kreativan, originalan način. Odgovarat 
                        će na pitanja s detaljnim opisom. Može stavljati svoj rad u druge medije. Rezultati mogu biti visoke kvalitete.
                    </p>
                    <a href="https://www.abrakadoodle.com/blog/how-do-you-know-if-your-child-is-gifted-in-art/" target="_blank" class="btn">Više</a>
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
        </div>

        <div id="Math" class="tabcontent">
            <div class="section-category M" style="background:url(slike/Calculator.png) no-repeat;
                                                background-position-x: 60px;
                                                background-position-y: 10px;">
                <div class="image">
                    <img src="slike/M.png" alt="">
                </div>
                <div class="content" style="background:#ffd4d6;">
                    <h3>Matematika (engl. Mathematics)</h3>
                    <p>Učenik će rješavati problem, ali ponekad neće biti u stanju objasniti postupke. Lako i točno će izvoditi proračune. Lako radi s kalkulatorima, računalima i drugim
                        mjernim uređajima. osmišljava vlastite jezike, kodove i sustave brojeva. intuitivno rješava naizgled teške probleme. Izračunava odgovore 
                        na netradicionalan način. koristi neobične tehnike u rješavanju problema. Visoka sposobnost apstraktnog razmišljanja. 
                        Neobična oštra svijest i intezivna znatiželja, brzina učenja, razumijevanja.
                    </p>
                    <a href="https://www.davidsongifted.org/gifted-blog/mathematically-gifted-students-how-can-we-meet-their-needs/" target="_blank" class="btn">Više</a>
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
        </div>


        
    </section>
    
    <script>
        function openTab(evt, categoryName) {
            //deklaracija svih varijabli
        var i, tabcontent, tablinks;

        //dohvaćanje svih elemenata s class="tabcontent" i skrivanje istih
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        //dohvaćanje svih elemenata s class="tablinks" i uklanjanje klase "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        //prikazana trenutra kartica, te dodavanje "active" klase gumbu koji je otvorio karticu
        document.getElementById(categoryName).style.display = "block";
        evt.currentTarget.className += " active";
        }

        // dohvaćanje elementa s id="defaultOpen" i klik na njega
        document.getElementById("defaultOpen").click();
    </script>

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