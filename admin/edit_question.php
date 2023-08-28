<?php 

    include('../include/connection.php');
    session_start();

    include('../include/headera.php'); 
?>

    <!-- Navigation start -->
    <header class="header">

        <a href="../admin.php" class="logo"><img src="../slike/logo2.png" alt=""><p>Škola za naprednu djecu</p></a>

        <img src="../slike/default-avatar.jpg" class="user-pic" onclick="toggleMenu()">
        <div class="profile-menu" id="profileMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="../slike/default-avatar.jpg">
                    <h3> <?php echo $_SESSION['admin_username']; ?></h3>
                </div>
                <hr>
                <a href="../logout.php" id="logout" class="sub-menu-link">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>Odjavi se</p>
                </a>
            </div>
        </div>
    </header>
    <!-- Navigation end -->

    <div class="sidebar">
    <ul>
        <li>
            <a href="../admin.php">
                <i class="fas fa-th-large"></i>
                <div>Kontrolna ploča</div>
            </a>
        </li>
        <li>
            <a href="../students.php">
                <i class="fas fa-user-graduate"></i>
                <div>Učenici</div>
            </a>
        </li>
        <li>
            <a href="../news.php">
                <i class="fa-solid fa-newspaper"></i>
                <div>Novosti</div>
            </a>
        </li>
        <li class="active">
            <a href="../quiz_view.php">
                <i class="fa-solid fa-question"></i>
                <div>Anketa</div>
            </a>
        </li>
        <li>
            <a href="../profil.php">
            <i class="fa-solid fa-user"></i>
                <div>Profil</div>
            </a>
        </li>
    </ul>
    </div>


    <div class="add-flex">
            <?php
            if(isset($_GET['question_id'])){
            $question_id = $_GET['question_id'];
                $query = "SELECT * FROM questions WHERE question_id='$question_id'";
                $result = mysqli_query($conn, $query);
            
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
        <form action="../code.php" method="POST">
            
        <h1><a href="../quiz_view.php"><i class="fa-solid fa-arrow-left"></i> Nazad na popis pitanja</a>Uredi pitanje</h1>
            

            <span>Broj pitanja: </span>
            <input type="number" name="question_id" value="<?php echo $row['question_id']; ?>" class="box" style="width:15%; margin-left:-85%;"> 
            <span>Tekst: </span>
            <input type="text" name="question" value="<?php echo $row['question']; ?>" class="box" required>
            <table class="table" id="table_field">
                <thead>
                    <tr>
                        <th>Odgovori</th>
                        <th>Kategorija</th>
                        <th>Obriši</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php if(isset($_GET['question_id'])){
                            $question_id = $_GET['question_id'];
                                $query = "SELECT answers.answer, answers.category_id, answers.answer_id FROM answers 
                                LEFT JOIN category ON answers.category_id = category.category_id
                                WHERE answers.question_id='$question_id'";
                                $result1 = mysqli_query($conn, $query);
                            
                                if(mysqli_num_rows($result1) > 0){
                                    while($row1 = mysqli_fetch_assoc($result1)){
                            ?>    
                        <tr>
                            <td data-title="Odgovori"><input type="text" name="answer[]" value="<?php echo $row1['answer']; ?>" class="box" required></td>
                            <td data-title="Kategorija">
                            <select name="category[]" class="box" id="">
                                <option disabled> Odaberi kategoriju: </option>
                                <?php
                                    $sql2 = "SELECT * FROM category";

                                    $result2 = mysqli_query($conn, $sql2);

                                    if(mysqli_num_rows($result2) > 0){
                                        while($row2 = mysqli_fetch_assoc($result2)){
                                            if($row1['category_id'] == $row2['category_id']){
                                                $selected = "selected";
                                            }else{
                                                $selected = "";
                                            }
                                            echo "<option {$selected} value='{$row2['category_id']}'>{$row2['category_name']}</option>";
                                        }
                                    }
                                ?>
                            </select>
                            </td>
                            <td data-title="Obriši">
                                <a class="btnD" href="delete_answer.php?answer_id=<?php echo $row1['answer_id']; ?>"><i class="fa fa-trash"></i> Obriši</a>
                            </td>
                            
                        </tr>
                        <?php
                                    }
                            }else{
                                echo "<h5>nema pronađenih zapisa</h5>";
                            }
                        }
                        ?>
                        
                        
                </tbody>
                
            </table>
            <table>
                <tbody>
                    <tr>
                        <td data-title="Uredi">
                        <p>Novi odgovor.</p>
                            <input class="add" type="button" name="add" id="add" value="Dodaj">
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" name="edit_question" class="btn">Spremi</button>

        </form>
        <?php
        }
            }else{
                echo "<h5>nema pronađenih zapisa</h5>";
            }
        }
        ?>
    </div>

    <!-- custom js links -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../script.js"></script>
    <script>
        $(document).on('click', 'ul li', function(){
         $(this).addClass('active').siblings().removeClass('active');
        });

        $(document).ready(function(){
            var html = '<tr>' +
                       '<td data-title="Odgovori"><input type="text" name="answer[]" class="box" required></td>' + 
                       '<td data-title="Kategorija">' +
                       '<select name="category[]" class="box" id="">' + 
                       '<option disabled> Odaberi kategoriju: </option>' +
                       '<?php $sql1 = "SELECT * FROM category";?>' +
                       '<?php $result1 = mysqli_query($conn, $sql1);?>' +
                       '<?php if(mysqli_num_rows($result1) > 0){ ?>' +
                       '<?php while($row1 = mysqli_fetch_assoc($result1)){ ?>' +
                       '<?php echo '<option value="'?>' +
                       '<?php echo $row1['category_id']; ?>' +
                       '<?php echo '">' ?>' +
                       '<?php echo $row1['category_name']; ?>' +
                       '<?php '</option>'; ?>' +
                       '<?php }}?>'+
                       '</select>' +
                       '</td><td data-title="Uredi"><input class="btnD" type="button" name="remove" id="remove" value="Ukloni"></td></tr>';
            var x = 1;

            $("#add").click(function(){
                    $("#table_field").append(html);
                    x++;
                
            });

            $("#table_field").on('click', '#remove', function(){
                $(this).closest('tr').remove();
                x--;
            });
        });
        
    </script>
        
    
</body>
</html>
