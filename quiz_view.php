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
        <li class="active">
            <a href="#">
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
    
    

    <section class="added-questions"> 
        
        <div class="box-container">
            <h2 class="h2-users">Popis pitanja
                <a class="add plus" href="admin/add_question.php"><i class="fa fa-plus"></i> Dodaj pitanje</a>
            </h2>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
        <?php
            $query = "SELECT * FROM questions";
            $result = mysqli_query($conn, $query);
        
            if(mysqli_num_rows($result) > 0){
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pitanje</th>
                        <th>Uredi</th>
                        <th>Obriši</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){?>
                        
                        <tr>
                        
                            <td data-title="ID" class="id"><?php echo $row['question_id']; ?></td>
                            <td data-title="Pitanje" class="quest"><?php echo $row['question']; ?></td>
                            
                            <td data-title="Uredi">
                                <a class="edit" href="admin/edit_question.php?question_id=<?php echo $row['question_id']; ?>"><i class="fas fa-edit"></i> Uredi</a>
                            </td>
                           
                            <td data-title="Obriši">
                                <a class="btnD" href="admin/delete_question.php?question_id=<?php echo $row['question_id']; ?>&questionid=<?php echo $row['question_id']; ?>"><i class="fa fa-trash"></i> Obriši</a>
                            </td>
                            
                        </tr>
                       
                    <?php  }?>
                </tbody>
            </table>
        <?php
            }else{
                echo "<h5>nema pronađenih zapisa</h5>";
            }
        ?> 
        </div>
    </section>
    <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
        ?>

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
