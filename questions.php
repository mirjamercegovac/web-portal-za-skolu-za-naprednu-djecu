<?php 
    

    $number = $_GET['n'];

    $query= "SELECT * FROM questions WHERE question_id = $number";

    $result=mysqli_query($conn, $query);
    $question=mysqli_fetch_assoc($result);

    $query= "SELECT * FROM answers WHERE question_id = $number";
    $answers=mysqli_query($conn, $query);

    $query= "SELECT * FROM questions";
    $total_question = mysqli_num_rows(mysqli_query($conn, $query));
?>