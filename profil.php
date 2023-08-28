<?php 

    include('include/connection.php');
    session_start();
    $userid = $_SESSION['userid'];
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
        <li >
            <a href="admin.php">
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
        
        <li class="active">
            <a href="profil.php">
            <i class="fa-solid fa-user"></i>
                <div>Profil</div>
            </a>
        </li>
    </ul>
    </div>
    
    <section class="students">
    
    <?php
        include("profile.php");
    ?>
    </section>
    

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
