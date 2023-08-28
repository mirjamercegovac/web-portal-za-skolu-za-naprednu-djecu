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
            <li>
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
    

    
    
    <div class="edit-flex">
        <?php 
            if(isset($_GET['id'])){
                $userid = $_GET['id'];
                $query = "SELECT * FROM users WHERE id='$userid' ";
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result) > 0){
                    $user = mysqli_fetch_array($result);
                    ?>
                    <form action="../code.php" method="POST">
                        <h1><a href="../students.php"><i class="fa-solid fa-arrow-left"></i> Nazad na popis učenika</a>Uredi učenika</h1> 
                    <br>
                        <input type="text" name="userid" value="<?= $user['id']; ?>" class="box">

                        <span>Korisničko ime: </span>
                        <input type="text" name="username" value="<?= $user['username']; ?>" class="box">

                        <span>Ime: </span>
                        <input type="text" name="firstname" value="<?= $user['firstname']; ?>" class="box">

                        <span>Prezime: </span>
                        <input type="text" name="lastname" value="<?= $user['lastname']; ?>" class="box">

                        <span>Email: </span>
                        <input type="email" name="email" value="<?= $user['email']; ?>" class="box">

                        <span>Adresa: </span>
                        <input type="text" name="address" value="<?= $user['address']; ?>" class="box">

                        <span>Telefon: </span>
                        <input type="text" name="phone" value="<?= $user['phone']; ?>" class="box">
                        
                        <span>Kategorija: </span>
                        <?php
                            $sql="SELECT * FROM result WHERE firstname = '$user[firstname]'";
                            $result1=mysqli_query($conn, $sql); 
                            if(mysqli_num_rows($result1) > 0){
                                while($row = mysqli_fetch_assoc($result1)){
                                    echo "<input type='text' name='category' value='{$row['category']}' class='box'>";
                       
                        }}?>
                        <span>User/admin: </span>
                        <input type="text" name="user_type" value="<?= $user['user_type']; ?>" class="box">

                        <button type="submit" name="update_student" class="btn">Spremi</button>

                    </form>
                    <?php
                }else{
                    echo "<h4>Ne postoji takav id</h4>";
                }
            }
        ?>
        
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



