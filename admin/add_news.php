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
        <li>
            <a href="../admin.php">
                <i class="fas fa-th-large"></i>
                <div>Kontrolna ploča</div>
            </a>
        </li>
        <li>
            <a href="../students.php">
                <i class="fas fa-user-graduate"></i>
                <div>Učenici</div>
            </a>
        </li>
        <li class="active">
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
            <a href="profil.php">
            <i class="fa-solid fa-user"></i>
                <div>Profil</div>
            </a>
        </li>
    </ul>
    </div>
    
    <div class="add-flex">
        <form action="../code.php" method="POST" enctype="multipart/form-data">
        <h1><a href="../news.php"><i class="fa-solid fa-arrow-left"></i> Nazad na popis novosti</a>Dodaj novosti</h1>

            <span>Naslov: </span>
            <input type="text" name="title" class="box" required>

            <span>Podnaslov: </span>
            <input type="text" name="sub_title" class="box" required>
        
            <span>Tekst: </span>
            <textarea name="newsdesc" id="" cols="30" rows="5" class="box"></textarea>

            <span>Izvor: </span>
            <input type="text" name="source" class="box" required>
        
            <span>Kategorija: </span>
            <select name="category" class="box" id="">
                <option disabled> Odaberi kategoriju: </option>
                <?php
                    $sql = "SELECT * FROM category";

                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                        }
                    }
                ?>
            </select>
        
            <span>Dodaj fotografiju: </span>
            <input type="file" class="box" name="upload_image" required>
            
            <button type="submit" name="add_news" class="btn">Spremi</button>

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
