<?php
    include('include/connection.php');
    session_start();

    

    if(!isset($_SESSION['science']) && !isset($_SESSION['technology']) && !isset($_SESSION['engineering']) && !isset($_SESSION['art']) && !isset($_SESSION['math'])){
        $_SESSION['science'] = 0;
        $_SESSION['technology'] = 0;
        $_SESSION['engineering'] = 0;
        $_SESSION['art'] = 0;
        $_SESSION['math'] = 0;

            
    }

    if($_POST){
        $query= "SELECT * FROM questions";
        $total_question = mysqli_num_rows(mysqli_query($conn, $query));

        $number = $_POST['number'];

        $selected_answer = $_POST['answer'];

        $next = $number + 1;

        $queryS = "SELECT * FROM answers WHERE question_id = $number AND category_id = 1";
        $result = mysqli_query($conn, $queryS);
        $rowS = mysqli_fetch_assoc($result);

        $queryT = "SELECT * FROM answers WHERE question_id = $number AND category_id = 2";
        $result = mysqli_query($conn, $queryT);
        $rowT = mysqli_fetch_assoc($result);

        $queryE = "SELECT * FROM answers WHERE question_id = $number AND category_id = 3";
        $result = mysqli_query($conn, $queryE);
        $rowE = mysqli_fetch_assoc($result);

        $queryA = "SELECT * FROM answers WHERE question_id = $number AND category_id = 4";
        $result = mysqli_query($conn, $queryA);
        $rowA = mysqli_fetch_assoc($result);

        $queryM = "SELECT * FROM answers WHERE question_id = $number AND category_id = 5";
        $result = mysqli_query($conn, $queryM);
        $rowM = mysqli_fetch_assoc($result);

        $science = $rowS['answer_id'];
        $technology = $rowT['answer_id'];
        $engineering = $rowE['answer_id'];
        $art = $rowA['answer_id'];
        $math = $rowM['answer_id'];

        if($selected_answer == $science){
            $_SESSION['science']++;
        }else if($selected_answer == $technology){
            $_SESSION['technology']++;
        }else if($selected_answer == $engineering){
            $_SESSION['engineering']++;
        }else if($selected_answer == $art){
            $_SESSION['art']++;
        }else if($selected_answer == $math){
            $_SESSION['math']++;
        }

        

        if($number == $total_question){
            header("Location: result.php");
        }else{
            header("Location: quiz.php?n=".$next);
        }



        

    }



?>