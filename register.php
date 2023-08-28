<?php
    
    include('include/connection.php');

    if(isset($_POST['submit'])){

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
            
            $error[] = 'Korisnik već postoji!';

        }else{

            if($password != $cpassword){
                $error[] = 'Lozinka se ne podudara!';
            }else{
                $insert = "INSERT INTO users(username, firstname, lastname, email, address, phone, password, user_type) 
                VALUES('$username', '$firstname', '$lastname', '$email', '$address', '$phone', '$password', '$user_type')";
                mysqli_query($conn, $insert);
                header('location:login.php');

            }

        }

    };

?>

<?php 
include('include/header.php'); 
?>
    
    <div class="form-container">

        <form action="" method="post" style="width:700px;">
            <h3>Registracija</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <div class="column">
                <input type="text" name="firstname" placeholder="Unesi ime" required>
                <input type="text" name="lastname" placeholder="Unesi prezime" required>
            </div>
            <div class="column">
                <input type="text" name="username" required placeholder="Unesi korisničko ime">
                <input type="email" name="email" placeholder="Unesi e-mail" required>
            </div>
            <div class="column">
                <input type="text" name="address" placeholder="Unesi adresu">
                <input type="text" name="phone" placeholder="Unesi telefon">
            </div>
            <div class="column">
                <input type="password" name="password" placeholder="Unesi lozinku" required>
                <input type="password" name="cpassword" placeholder="Potvrdi lozinku" required>
            </div>
           
            <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="submit" name="submit" value="Registracija" class="form-btn">
            <p>Već imaš račun? <a href="login.php">Prijavi se</a></p>
            <i class="fa-solid fa-arrow-left"></i>
            <a href="index.php">Nazad na početnu stranicu</a>
        </form>

    </div>

</body>
</html>




<!-- password =>
        user: user
        admin: admin -->