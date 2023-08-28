<?php
    
    include('include/connection.php');
    session_start();

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);
        
        $select = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            
            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['first_name'] = $row['firstname'];
            $_SESSION['last_name'] = $row['lastname'];

            if($row['user_type'] == 'admin'){
                $_SESSION['admin_username'] = $row['username'];
                header('location:admin.php');

            }else if($row['user_type'] == 'user'){
                $_SESSION['user_username'] = $row['username'];
                header('location:user_page.php');
            }
        }else{
            $error[] = 'Netočan email ili lozinka!';
        }
    };

?>

<?php
include('include/header.php');   
?>
    <div class="form-container">

        <form action="" method="post">
            <h3>Prijava</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <i class="fa-solid fa-envelope"></i><input type="email" name="email" required placeholder="Unesi e-mail">
            <i class="fa-solid fa-lock"></i><input type="password" name="password" placeholder="Unesi lozinku" required>
            <input type="submit" name="submit" value="Prijava" class="form-btn">
            <p>Nemaš račun? <a href="register.php">Registriraj se</a></p>
            <i class="fa-solid fa-arrow-left"></i>
            <a href="index.php">Nazad na početnu stranicu</a>
        </form>

    </div>


    <!-- custom js links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>