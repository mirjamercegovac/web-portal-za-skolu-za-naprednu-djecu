<?php
    include('include/connection.php');
    session_start();  
    
    include('include/header.php'); 
?>

    <?php
        $news_id=$_GET['id'];

        $query = "SELECT * FROM news
        LEFT JOIN category ON news.category = category.category_id
        LEFT JOIN users ON news.author = users.id
        WHERE news.news_id = '$news_id'";
        $result = mysqli_query($conn, $query);
    
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?> 

    <!-- Navigation start -->
    <header class="header">

        <div id="menu" class="fas fa-bars"></div>
        <a href="index.php" class="logo"><img src="slike/logo2.png" alt=""><p>ŠND</p></a>
       
        <nav class="navbar">
            <p><?php echo $row['category_name']; ?></p>
        </nav>

        <a href="login.php" id="login" class="fas fa-user-circle"></a>
    </header>
    <!-- Navigation end -->
    <!-- news.news_id, news.title, news.sub_title, news.description, news.news_date
        category.category_name, users.username, news.category, news.news_img FROM news -->
    

    <section class="news-header">
        <div class="header-content news-container">
            <a href="index.php" class="back-home"><i class="fa-solid fa-arrow-left"></i> Nazad na početnu stranicu</a>
            
            <h1 class="header-title"><?php echo $row['title']; ?></h1>

            <img src="upload/<?php echo $row['news_img']; ?>" alt="" class="header-img">
        </div>
    </section>

    <section class="news-content news-container">
        <h2 class="sub-heading"><?php echo $row['sub_title']; ?></h2>
        <span class="news-date"><?php echo $row['news_date']; ?>, <?php echo $row['username']; ?></span>
        <p class="news-text"><?php echo $row['description']; ?></p>
        <p class="news-source"><?php echo $row['source']; ?></p>
    </section>
    <?php
        }
            }else{
                echo "<h5>nema pronađenih zapisa</h5>";
            }
        ?>

<button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>

    <?php
        include("include/footer.html");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js"></script>
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="backTop.js"></script>
</body>
</html>