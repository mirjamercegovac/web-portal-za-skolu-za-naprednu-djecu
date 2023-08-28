<?php

    include('include/connection.php');
    session_start();
    
    $userid = $_SESSION['userid'];
    if(!isset($_SESSION['admin_username'])){
        header('location:login.php');
    }
    include('include/header.php'); 
?>

    <!-- Navigation start -->
    <header class="header" style="background: #333; box-shadow: 0 .1rem .3rem black;">

        <a href="admin.php" class="logo"><img src="slike/logo2.png" alt=""><p>Škola za naprednu djecu</p></a>
        
        <img src="slike/default-avatar.jpg" class="user-pic" onclick="toggleMenu()">
        <div class="profile-menu" id="profileMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="slike/default-avatar.jpg">
                    <h3> <?php echo $_SESSION['admin_username']; ?></h3>
                </div>
                <hr>
                <a href="logout.php" id="logout" class="sub-menu-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Odjavi se</p>
                </a>
            </div>
        </div>
    </header>
    <!-- Navigation end -->
    
    <div class="sidebar">
        <ul>
            <li class="active">
                <a href="#">
                    <i class="fas fa-th-large"></i>
                    <div>Kontrolna ploča</div>
                </a>
            </li>
            <li>
                <a href="students.php">
                    <i class="fas fa-user-graduate"></i>
                    <div>Učenici</div>
                </a>
            </li>
            <li>
                <a href="news.php">
                    <i class="fa-solid fa-newspaper"></i>
                    <div>Novosti</div>
                </a>
            </li>
            <li>
                <a href="quiz_view.php">
                    <i class="fa-solid fa-question"></i>
                    <div>Anketa</div>
                </a>
            </li>
            
            <li>
                <a href="profil.php">
                <i class="fa-solid fa-user"></i>
                    <div>Profil</div>
                </a>
            </li>
        </ul>
    </div>
   
    <div class="main">
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="number">
                    <?php 
                        $query = "SELECT id FROM users WHERE user_type='user' ORDER BY id";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_num_rows($result); 
                        echo $row 
                    ?>
                    </div>
                    <div class="card-name">Učenici</div>
                </div>
                <div class="icon-box">
                    <i class="fas fa-user-graduate"></i>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="number">
                    <?php 
                        $query = "SELECT news_id FROM news ORDER BY news_id";
                        $result1 = mysqli_query($conn, $query);
                        $row1 = mysqli_num_rows($result1); 
                        echo $row1 
                    ?>
                    </div>
                    <div class="card-name">Novosti</div>
                </div>
                <div class="icon-box">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="number">
                    <?php 
                        $query = "SELECT id FROM users WHERE user_type='admin' ORDER BY id";
                        $result2 = mysqli_query($conn, $query);
                        $row2 = mysqli_num_rows($result2);
                        echo $row2;
                         
                    ?>
                    </div>
                    <div class="card-name">Zaposlenici</div>
                </div>
                <div class="icon-box">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="number">
                    <?php 
                        $query = "SELECT question_id FROM questions ORDER BY question_id";
                        $result3 = mysqli_query($conn, $query);
                        $row3 = mysqli_num_rows($result3);
                        echo $row3;
                         
                    ?>
                    </div>
                    <div class="card-name">Broj pitanja ankete</div>
                </div>
                <div class="icon-box">
                    <i class="fa-solid fa-question"></i>
                </div>
            </div>
            
        </div>
        <div class="charts">
            <div class="chart">
                <h2>Učenici podijeljeni po kategorijama</h2>
                <div id="piechart" ></div>
            </div>
        </div>
    </div>
    
  
    <!-- custom js links -->
    
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).on('click', 'ul li', function(){
         $(this).addClass('active').siblings().removeClass('active');
        });
    </script>
      
</body>
</html>
