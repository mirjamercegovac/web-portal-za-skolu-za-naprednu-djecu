<?php

    include('../include/connection.php');

    $answer_id = $_GET['answer_id'];

    $sql = "DELETE FROM answers WHERE answer_id='$answer_id'";


    if(mysqli_query($conn, $sql))
    {
        header("Location: ../quiz_view.php");
    }

?>