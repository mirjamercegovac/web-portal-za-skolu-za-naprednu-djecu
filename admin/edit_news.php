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
                <a href="../profil.php">
                <i class="fa-solid fa-user"></i>
                    <div>Profil</div>
                </a>
            </li>
        </ul>
    </div>    

    <div class="edit-flex">       
    <?php
    
            $news_id = $_GET['id'];
            
            $query = "SELECT * FROM news
            LEFT JOIN category ON news.category = category.category_id
            LEFT JOIN users ON news.author = users.id
            WHERE news.news_id = '$news_id'";
            $result = mysqli_query($conn, $query);
        
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?> 
        <form action="../code.php" method="POST" enctype="multipart/form-data">
        <h1><a href="../news.php"><i class="fa-solid fa-arrow-left"></i> Nazad na popis novosti</a>Uredi novost</h1>

            <input type="hidden" name="news_id" class="box" value="<?php echo $row['news_id']; ?>" placeholder="">
            <span>Naslov: </span>
            <input type="text" name="title" class="box" value="<?php echo $row['title']; ?>">

            <span>Podnaslov: </span>
            <input type="text" name="sub_title" class="box" value="<?php echo $row['sub_title']; ?>">
        
            <span>Tekst: </span>
            <textarea name="newsdesc" id="" cols="30" rows="5" class="box">
                <?php echo $row['description']; ?>"
            </textarea>

            <span>Izvor: </span>
            <input type="text" name="source" class="box" value="<?php echo $row['source']; ?>">
        
            <span>Kategorija: </span>
            <select name="category" class="box" id="">
                <option disabled> Odaberi kategoriju: </option>
                <?php
                    $sql = "SELECT * FROM category";

                    $result1 = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result1) > 0){
                        while($row1 = mysqli_fetch_assoc($result1)){
                            if($row['category_id'] == $row1['category_id']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                            echo "<option {$selected} value='{$row1['category_id']}'>{$row1['category_name']}</option>";
                        }
                    }
                ?>
            </select>
        
            <span>Promijeni fotografiju: </span>
            <input type="file" class="box" name="new_image"><br><br>
            <img src="../upload/<?php echo $row['news_img']; ?>" height="150px">
            <input type="hidden" class="box" name="old_image" value="<?php echo $row['news_img']; ?>"><br>
            <button type="submit" name="update_news" class="btn">Spremi</button>

        </form>
        <?php
        }
            }else{
                echo "<h5>nema pronađenih zapisa</h5>";
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
