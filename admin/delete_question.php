<?php

    include('../include/connection.php');

    $question_id = $_GET['question_id'];

    $sql = "DELETE FROM questions WHERE question_id='$question_id';";
    $sql .= "DELETE FROM answers WHERE question_id='$question_id'";


    if(mysqli_multi_query($conn, $sql))
    {
        header("Location: ../quiz_view.php");
    }

?>