<?php 

    include('include/connection.php');
    session_start();

    include('questions.php');


    if(!isset($_SESSION['user_username'])){
        header('location:login.php');
    }

    include('include/header.php'); 
?>

    <!-- Navigation start -->
    <header class="header">

        <div id="menu" class="fas fa-bars"></div>
        
        <nav class="navbar">
            <a href="user_page.php"><i class="fa-solid fa-arrow-left"></i> Nazad na profil</a>
        </nav>

        <a href="user_page.php" class="logo"><img src="slike/logo2.png" alt=""><p>ŠND</p></a>

        <img src="slike/default-avatar.jpg" class="user-pic" onclick="toggleMenu()">
        <div class="profile-menu" id="profileMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="slike/default-avatar.jpg">
                    <h3> <?php echo $_SESSION['user_username']; ?></h3>
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

    <section class="quiz">
    <!-- <img src="https://www.educationworld.com/sites/default/files/steam-learning-graphic.gif" alt=""> -->
        <div class="quiz-box custom-box">
            <div class="current question-number">Pitanje <?php echo $number; ?> od <?php echo $total_question; ?></div>
            <p class="question question-text"><?php echo $question['question']; ?></p>
            <form action="process.php" method="POST">
                <div class="option-container">
                <ul class="answers">
                    <?php while($row=mysqli_fetch_assoc($answers)){?> 
                    <li><input type="radio" name="answer" value="<?php echo $row['answer_id']; ?>"> <?php echo $row['answer']; ?></li>
                    <?php }?>
                </ul>
                </div>
                
                <input type="hidden" name="number" value="<?php echo $number; ?>">
                <div class="next-question-btn">
                    <input class="btnS" type="submit" name="submit" value="Dalje">
                </div>
                
            </form>
        </div>
        
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
