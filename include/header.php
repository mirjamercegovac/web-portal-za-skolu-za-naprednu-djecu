<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web portal za školu za naprednu djecu</title>
    <!-- favicon -->
    <link rel="icon" href="slike/icon.png">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <!-- swiper css link -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css"/>
    
    <!-- custom css links -->

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/dashboard.css">
    <link rel="stylesheet" href="CSS/news.css">
    <link rel="stylesheet" href="CSS/gallery.css">
    <link rel="stylesheet" href="CSS/register-login.css">
    <link rel="stylesheet" href="CSS/category.css">
    <link rel="stylesheet" href="CSS/quiz.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['category_name', 'users'],
            <?php 
            $sql="SELECT * FROM category";
            $result=mysqli_query($conn, $sql);
            while($row=mysqli_fetch_assoc($result)){
                echo "['".$row['category_name']."',".$row['users']."],";
            }
            
            ?>
        ]);

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
    }
</script>

</head>
<body>