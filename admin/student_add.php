<?php 

    include('../include/connection.php');
    session_start();

    include('../include/headera.php'); 
?>

    
    <!-- Navigation start -->
    <header class="header">

        <a href="../admin.php" class="logo"><img src="../slike/logo2.png" alt=""><p>Škola za naprednu djecu</p></a>

        
        <img src="../slike/default-avatar.jpg" class="user-pic" onclick="toggleMenu()">
        <div class="profile-menu" id="profileMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="../slike/default-avatar.jpg">
                    <h3> <?php echo $_SESSION['admin_username']; ?></h3>
                </div>
                <hr>
                <a href="../logout.php" id="logout" class="sub-menu-link">
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
                <a href="../admin.php">
                    <i class="fas fa-th-large"></i>
                    <div>Kontrolna ploča</div>
                </a>
            </li>
            <li class="active">
                <a href="../students.php">
                    <i class="fas fa-user-graduate"></i>
                    <div>Učenici</div>
                </a>
            </li>
            <li>
                <a href="../news.php">
                    <i class="fa-solid fa-newspaper"></i>
                    <div>Novosti</div>
                </a>
            </li>
            <li>
                <a href="../quiz_view.php">
                    <i class="fa-solid fa-question"></i>
                    <div>Anketa</div>
                </a>
            </li>
            
            <li>
                <a href="../profil.php">
                    <i class="fa-solid fa-user"></i>
                    <div>Profil</div>
                </a>
            </li>
        </ul>
    </div>    

    <div class="add-flex">
        <form action="../code.php" method="POST">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <h1><a href="../students.php"><i class="fa-solid fa-arrow-left"></i> Nazad na popis učenika</a>Dodaj učenika</h1> 
            <span>Ime: </span>
            <input type="text" name="firstname" class="box" required>

            <span>Prezime: </span>
            <input type="text" name="lastname" class="box" required>

            <span>Korisničko ime: </span>
            <input type="text" name="username" class="box" required>
        
            <span>Email: </span>
            <input type="text" name="email" class="box" required>

            <span>Adresa: </span>
            <input type="text" name="address" class="box">

            <span>Telefon: </span>
            <input type="text" name="phone" class="box">
        
            <span>User/admin:</span>
            <select name="user_type" class="box">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>

            <span>Lozinka: </span>
            <input type="password" name="password" class="box" required>

            <span>Potvrdi lozinku: </span>
            <input type="password" name="cpassword" class="box" required>
        
            <button type="submit" name="save_student" class="btn">Spremi</button>

        </form>
    </div>
   
    
    <!-- custom js links -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../script.js"></script>
    <script>
        $(document).on('click', 'ul li', function(){
         $(this).addClass('active').siblings().removeClass('active');
        });
    </script>
</body>
</html>



