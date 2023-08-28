<?php 

    include('include/connection.php');
    session_start();

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
        <li>
            <a href="admin.php">
                <i class="fas fa-th-large"></i>
                <div>Kontrolna ploča</div>
            </a>
        </li>
        <li class="active">
            <a href="#">
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

    <section class="students"> 
        <div class="box-container">
            <h2 class="h2-users">Detalji učenika
                <a class="add plus" href="admin/student_add.php"><i class="fa fa-plus"></i> Dodaj učenika</a>
            </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Korisničko ime</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Email</th>
                        <th>Adresa</th>
                        <th>Telefon</th>
                        <th>Kategorija</th>
                        <th>Uredi/Obriši</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $limit = 4;
                        if(isset($_GET['page'])){
                            $page=$_GET['page'];
                        }else{
                            $page=1;
                        }
                        $offset=($page - 1) * $limit;

                        $query = "SELECT * FROM users WHERE user_type='user' ORDER BY id DESC LIMIT {$offset}, {$limit}";
                        $result = mysqli_query($conn, $query);
                    
                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $user){
                                ?>
                                <tr>
                               
                                    <td data-title="ID"><?= $user['id']; ?></td>
                                    <td data-title="Korisničko ime"><?= $user['username']; ?></td>
                                    <td data-title="Ime"><?= $user['firstname']; ?></td>
                                    <td data-title="Prezime"><?= $user['lastname']; ?></td>
                                    <td data-title="Email"><?= $user['email']; ?></td>
                                    <td data-title="Adresa"><?= $user['address']; ?></td>
                                    <td data-title="Telefon"><?= $user['phone']; ?></td>
                                    <td data-title="Kategorija">
                                    <?php
                                        $sql="SELECT * FROM result WHERE firstname = '$user[firstname]' ORDER BY id DESC LIMIT 1";
                                        $result1=mysqli_query($conn, $sql); 
                                        if(mysqli_num_rows($result1) > 0){
                                            while($row = mysqli_fetch_assoc($result1)){
                                    ?>
                                    <?= $row['category']; ?>
                                    <?php }}?>
                                    </td>
                                    
                                    <td data-title="Uredi/Obriši">
                                        <a class="edit" href="admin/student_edit.php?id=<?= $user['id']; ?>" ><i class="fas fa-edit"></i> Uredi</a>
                                        <form action="code.php" method="POST">
                                            <button type="submit" name="delete_student" class="btnD" value="<?= $user['id']; ?>"style="margin-top:10px;"><i class="fa fa-trash"></i> Obriši</button>
                                        </form>
                                    </td>
                                    
                                </tr>
                                <?php
                            }
                        }else{
                            echo "<h5>nema pronađenih zapisa</h5>";
                        }
                    ?> 
                    
                </tbody>
            </table>
            <?php
                $sql1="SELECT * FROM users";
                $result1=mysqli_query($conn, $sql1); 

                if(mysqli_num_rows($result1) > 0){
                    $total_records = mysqli_num_rows($result1);
                    
                    $total_page = ceil($total_records / $limit);

                    echo '<ul class="pagination">';
                    if($page > 1){
                        echo '<li><a href="students.php?page='.($page - 1).'"><</a></li>';
                    }
                    
                    for($i =1; $i <= $total_page; $i++){

                        if($i == $page){
                            $active = "active";
                        }else{
                            $active = "";
                        }
                        echo '<li class="'.$active.'"><a href="students.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    if($total_page > $page){
                        echo '<li><a href="students.php?page='.($page + 1).'">></a></li>';
                    }
                    
                    echo '</ul>';
                }
            ?>
            
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
