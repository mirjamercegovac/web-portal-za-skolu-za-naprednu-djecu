<?php 

    include('include/connection.php');
    session_start();
    $userid = $_SESSION['userid'];
    
    if(!isset($_SESSION['user_username'])){
        header('location:login.php');
    }else{
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

    <section>
    
    <form action="code.php" method="POST">
        <div class="box-result custom-box">
            <h2>Rezultat</h2>
            <table>
                <tr>
                    <td>Znanost</td>
                    <td><?php echo $_SESSION['science']; ?></td>
                </tr>
                <tr>
                    <td>Tehnologija</td>
                    <td><?php echo $_SESSION['technology']; ?></td>
                </tr>
                <tr>
                    <td>Inženjering</td>
                    <td><?php echo $_SESSION['engineering']; ?></td>
                </tr>
                <tr>
                    <td>Umjetnost</td>
                    <td><?php echo $_SESSION['art']; ?></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td><?php echo $_SESSION['math']; ?></td>
                </tr>
            </table>

            <p>
                <?php 
                    if($_SESSION['science']>$_SESSION['technology'] && $_SESSION['science']>$_SESSION['engineering'] && $_SESSION['science']>$_SESSION['art'] && $_SESSION['science']>$_SESSION['math']){
                        $query = "SELECT * FROM category WHERE category_name='Znanost' ";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0){
                            $category = mysqli_fetch_array($result);
                            echo $category['category_name']. ": " .$_SESSION['science']; 

                            $insert = "INSERT INTO result(firstname, lastname, category) VALUES('$_SESSION[first_name]', '$_SESSION[last_name]', '$category[category_name]');"; 
                            $insert .= "UPDATE category SET users = users + 1 WHERE category_name = 'Znanost'";
                            mysqli_multi_query($conn, $insert);

                        }
                        
                    }
                ?>
            </p>
            <p>
                <?php 
                
                    if($_SESSION['technology']>$_SESSION['science'] && $_SESSION['technology']>$_SESSION['engineering'] && $_SESSION['technology']>$_SESSION['art'] && $_SESSION['technology']>$_SESSION['math']){
                    
                        $query = "SELECT * FROM category WHERE category_name='Tehnologija' ";
                        $result = mysqli_query($conn, $query);
                        
                        if(mysqli_num_rows($result) > 0){
                            $category = mysqli_fetch_array($result);
                            echo $category['category_name']. ": " .$_SESSION['technology']; 
                            
                            $insert = "INSERT INTO result(firstname, lastname, category) VALUES('$_SESSION[first_name]', '$_SESSION[last_name]', '$category[category_name]');"; 
                            $insert .= "UPDATE category SET users = users + 1 WHERE category_name = 'Tehnologija'";
                            mysqli_multi_query($conn, $insert);

                        }
                    }
                    
                ?>
            </p>
            <p>
                <?php 
                    if($_SESSION['engineering']>$_SESSION['science'] && $_SESSION['engineering']>$_SESSION['technology'] && $_SESSION['engineering']>$_SESSION['art'] && $_SESSION['engineering']>$_SESSION['math']){
                        $query = "SELECT * FROM category WHERE category_name='Inženjering' ";
                        $result = mysqli_query($conn, $query);
                        
                        if(mysqli_num_rows($result) > 0){
                            $category = mysqli_fetch_array($result);
                            echo $category['category_name']. ": " .$_SESSION['engineering']; 

                            $insert = "INSERT INTO result(firstname, lastname, category) VALUES('$_SESSION[first_name]', '$_SESSION[last_name]', '$category[category_name]');"; 
                            $insert .= "UPDATE category SET users = users + 1 WHERE category_name = 'Inženjering'";
                            mysqli_multi_query($conn, $insert);
                        }
                    }
                ?>
            </p>
            <p>
                <?php 
                    if($_SESSION['art']>$_SESSION['science'] && $_SESSION['art']>$_SESSION['technology'] && $_SESSION['art']>$_SESSION['engineering'] && $_SESSION['art']>$_SESSION['math']){
                        $query = "SELECT * FROM category WHERE category_name='Umjetnost' ";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0){
                            $category = mysqli_fetch_array($result);
                            echo $category['category_name']. ": " .$_SESSION['art']; 

                            $insert = "INSERT INTO result(firstname, lastname, category) VALUES('$_SESSION[first_name]', '$_SESSION[last_name]', '$category[category_name]');"; 
                            $insert .= "UPDATE category SET users = users + 1 WHERE category_name = 'Umjetnost'";
                            mysqli_multi_query($conn, $insert);
                        }
                    } 
                ?>
            </p>
            <p>
                <?php 
                    if($_SESSION['math']>$_SESSION['science'] && $_SESSION['math']>$_SESSION['technology'] && $_SESSION['math']>$_SESSION['engineering'] && $_SESSION['math']>$_SESSION['art']){
                        $query = "SELECT * FROM category WHERE category_name='Matematika' ";
                        $result = mysqli_query($conn, $query);

                        if(mysqli_num_rows($result) > 0){
                            $category = mysqli_fetch_array($result);
                            echo $category['category_name']. ": " .$_SESSION['math']; 

                            $insert = "INSERT INTO result(firstname, lastname, category) VALUES('$_SESSION[first_name]', '$_SESSION[last_name]', '$category[category_name]');"; 
                            $insert .= "UPDATE category SET users = users + 1 WHERE category_name = 'Matematika'";
                            mysqli_multi_query($conn, $insert);
                        }
                    } 
                ?>
            </p>

            <?php unset($_SESSION['science']); ?>
            <?php unset($_SESSION['technology']); ?>
            <?php unset($_SESSION['engineering']); ?>
            <?php unset($_SESSION['art']); ?>
            <?php unset($_SESSION['math']); ?>
        </div>
        
    </form>
        
        
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
<?php }?>