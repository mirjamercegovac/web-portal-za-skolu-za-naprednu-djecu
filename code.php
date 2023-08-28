<?php 
    session_start();
    require_once "include/connection.php";

    if(isset($_POST['save_student'])){

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $user_type = $_POST['user_type'];

        $select = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            
            $error[] = 'Učenik već postoji!';

        }else{

            if($password != $cpassword){
                $error[] = 'Lozinka se ne podudara!';
            }else{
                $insert = "INSERT INTO users(username, firstname, lastname, email, address, phone, password, user_type) 
                VALUES('$username', '$firstname', '$lastname', '$email', '$address', '$phone', '$password', '$user_type')";
                mysqli_query($conn, $insert);
                header('location: students.php');

            }

        }

    };

    if (isset($_POST['update_student'])){

        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $category = $_POST['category'];
        $user_type = $_POST['user_type'];

        $query = "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname', email='$email',
                address='$address', phone='$phone', category='$category', user_type='$user_type' WHERE id='$userid'";
        $result = mysqli_query($conn, $query);
        if($result){
            $error[] = 'User uspješno uređen.';
            header("Location: students.php");
        }else{
            $error[] = 'User nije uspješno uređen.';
            header("Location: students.php");
        }
    }


    if(isset($_POST['delete_student']))
    {
        $userid = $_POST['delete_student'];
    
        $query = "DELETE FROM users WHERE id='$userid' ";
        $result = mysqli_query($conn, $query);
    
        if($result)
        {
            $error[] = "User uspješno obrisan";
            header("Location: students.php");
            exit(0);
        }
        else
        {
            $error[] = "User nije obrisan";
            header("Location: students.php");
            exit(0);
        }
    }


    if (isset($_POST['add_news'])){

        if(isset($_FILES['upload_image'])){

            $error = array();

            $file_name = $_FILES['upload_image']['name'];
            $file_size = $_FILES['upload_image']['size'];
            $file_tmp = $_FILES['upload_image']['tmp_name'];
            $file_type = $_FILES['upload_image']['type'];
            $file_ext = end(explode('.',$file_name));

            $extensions = array("jpeg", "jpg", "png");

            if(in_array($file_ext, $extensions) === false){
                $error[] = "Ova ekstenzija datoteke nije prihvaćena, molimo odaberite JPG ili PNG.";
            }
            if($file_size > 2097152){
                $error[] = "Veličina datoteke mora biti 2mb ili manje";
            }
            if(empty($error) == true){
                move_uploaded_file($file_tmp, "upload/".$file_name);
            }else{
                print_r($error);
                die();
            }
        }

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $sub_title = mysqli_real_escape_string($conn, $_POST['sub_title']);
        $description = mysqli_real_escape_string($conn, $_POST['newsdesc']);
        $source = mysqli_real_escape_string($conn, $_POST['source']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $date = date("d M, Y");
        $author = $_SESSION['userid'];

        $sql = "INSERT INTO news (title, sub_title, description, source, category, news_date, author, news_img)
                VALUE ('$title', '$sub_title', '$description', '$source', '$category', '$date', '$author', '$file_name');";
        $sql .= "UPDATE category SET news = news + 1 WHERE category_id = '$category'";
       

        if(mysqli_multi_query($conn, $sql)){
            header("Location: news.php");
        }
        
    }

    if (isset($_POST['update_news'])){
        if(empty($_FILES['new_image']['name'])){
            $file_name = $_POST['old_image'];
        }else{
            $error = array();

            $file_name = $_FILES['new_image']['name'];
            $file_size = $_FILES['new_image']['size'];
            $file_tmp = $_FILES['new_image']['tmp_name'];
            $file_type = $_FILES['new_image']['type'];
            $file_ext = end(explode('.',$file_name));

            $extensions = array("jpeg", "jpg", "png");

            if(in_array($file_ext, $extensions) === false){
                $error[] = "Ova ekstenzija datoteke nije prihvaćena, molimo odaberite JPG ili PNG.";
            }
            if($file_size > 2097152){
                $error[] = "Veličina datoteke mora biti 2mb ili manje";
            }
            if(empty($error) == true){
                move_uploaded_file($file_tmp, "upload/".$file_name);
            }else{
                print_r($error);
                die();
            }
        }

        $news_id = $_POST['news_id'];
        $title = $_POST['title'];
        $sub_title = $_POST['sub_title'];
        $description = $_POST['newsdesc'];
        $source = $_POST['source'];
        $category = $_POST['category'];

        $sql = "UPDATE news SET title='$title', sub_title='$sub_title', description='$description', source='$source', category='$category', news_img='{$file_name}' 
            WHERE news_id='$news_id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            $error[] = "Uspješno uređena obavijest.";
            header("Location: news.php");
        }else{
            $error[] = "...";
            header("Location: news.php");
        }
    }

    if (isset($_POST['add_question'])){

        $question_id = $_POST['question_id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $category = $_POST['category'];

        $query = "INSERT INTO questions (question_id, question) VALUE ('$question_id', '$question');";
        $result = mysqli_query($conn, $query);

        foreach($answer as $key => $value){
            if($value != ""){
                    $save = "INSERT INTO answers (question_id, answer, category_id) VALUES ('$question_id', '$value', '$category[$key]');";
                    $row = mysqli_query($conn, $save);
                    if($row){
                    $error[] = "Uspješno dodano pitanje.";
                    header("Location: quiz_view.php");
                    }else{
                    $error[] = "...";
                    header("Location: quiz_view.php");
                    }
                
            }
        }
  
    }

    if (isset($_POST['edit_question'])){

        $question_id = $_POST['question_id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $category = $_POST['category'];

        $query = "UPDATE questions SET question='$question' WHERE question_id='$question_id'";
        $result = mysqli_query($conn, $query);
        
        $delete="DELETE FROM answers WHERE question_id='$question_id'";
        $result = mysqli_query($conn, $delete);

        foreach($answer as $key => $value){
            if($value != ""){

                    $new = "INSERT INTO answers (question_id, answer, category_id) VALUES ('$question_id', '$value', '$category[$key]')";
                    mysqli_query($conn, $new);

                    $save = "UPDATE INTO answers (question_id, answer, category_id) VALUES ('$question_id', '$value', '$category[$key]')";
                    $row = mysqli_query($conn, $save);
                    
                    if($row){
                        $error[] = "Uspješno dodano pitanje.";
                        header("Location: quiz_view.php");
                    }else{
                        $error[] = "...";
                        header("Location: quiz_view.php");
                    }
                
            }
        }
    }


?>