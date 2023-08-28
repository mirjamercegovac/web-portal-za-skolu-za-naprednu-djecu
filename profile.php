<?php 
if (isset($_POST['update_profile'])){
    $update_username = $_POST['update_username'];
    $update_firstname = $_POST['update_firstname'];
    $update_lastname = $_POST['update_lastname'];
    $update_email = $_POST['update_email'];

    $query= "UPDATE users SET username ='$update_username', firstname = '$update_firstname', 
            lastname = '$update_lastname', email = '$update_email' WHERE id = '$userid'";
    $result = mysqli_query($conn, $query);

    $old_password = $_POST["old_password"];
    $update_password = md5($_POST['update_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);

    if(!empty($update_password) || !empty($new_password) || !empty($confirm_password)){
        if($update_password != $old_password){
            $error[] = 'Stara lozinka se ne poklapa!';
        }elseif($new_password != $confirm_password){
            $error[] = 'Nova lozinka se ne poklapa!';
        }else{
            $update_pass= "UPDATE users SET password ='$confirm_password' WHERE id = '$userid'";
            $result_pass = mysqli_query($conn, $update_pass);
            $errorc[] = "Uspješno promjenenjena lozinka!";
        }
    }
}
?>


<div class="update-profile">
    <?php
        $query = "SELECT * FROM users WHERE id = '$userid'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_assoc($result);
        }
        
    ?>
<form action="" method="post" enctype="multipart/form-data">
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '
                    <div class="message">
                        <span class="error-msg">'.$error.'</span>
                        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                    </div>
                    ';
                }
            }
        ?>
        <div class="flex">
        
            <div class="inputBox">
                <span>Korisničko ime: </span>
                <input type="text" name="update_username" class="box" value="<?php echo $fetch['username'] ?>">
                <span>Ime: </span>
                <input type="text" name="update_firstname" class="box" value="<?php echo $fetch['firstname'] ?>">
                <span>Prezime: </span>
                <input type="text" name="update_lastname" class="box" value="<?php echo $fetch['lastname'] ?>">
                <span>Email: </span>
                <input type="email" name="update_email" class="box" value="<?php echo $fetch['email'] ?>">
                <span>Adresa: </span>
                <input type="text" name="update_address" class="box" value="<?php echo $fetch['address'] ?>">
                <span>Telefon: </span>
                <input type="text" name="update_phone" class="box" value="<?php echo $fetch['phone'] ?>">
            </div>
            <div class="inputBox">
                <input type="hidden" name="old_password" class="box" value="<?php echo $fetch['password'] ?>">
                <span>Stara lozinka: </span>
                <input type="password" name="update_password" class="box" placeholder="Unesi staru lozinku">
                <span>Nova lozinka: </span>
                <input type="password" name="new_password" class="box" placeholder="Unesi novu lozinku">
                <span>Potvrdi lozinka: </span>
                <input type="password" name="confirm_password" class="box" placeholder="Potvrdi lozinku">
            </div>
        </div>
        <input type="submit" name="update_profile" value="Ažuriraj profil" class="btn" style="background: green;">
    </form> 
</div>