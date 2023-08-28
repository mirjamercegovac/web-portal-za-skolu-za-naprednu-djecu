<?php

    include('../include/connection.php');

    $news_id = $_GET['id'];
    $cat_id = $_GET['catid'];


    $sql = "DELETE FROM news WHERE news_id='$news_id';";
    $sql .= "UPDATE category SET news = news-1 WHERE category_id = '$cat_id'";


    if(mysqli_multi_query($conn, $sql))
    {
        header("Location: ../news.php");
    }

?>