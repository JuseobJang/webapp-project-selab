<!DOCTYPE html>
<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Software Engineering Lab - Courses</title>
    </head>
    <body>

    <?php
     $primary = $_POST['input_grade'];
     $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
     $query = "select * from member where student_id = '$primary';";
     $result = $connect->query($query);
     $row = mysqli_fetch_array($result);
     echo $primary;
    ?>
    
    <div>
    <?php    
    echo "<form action='../login/grade_action.php' method = 'POST'>
        <input type='number' name='mid' min='0' max='30'>    
        <input type='number' name='final' min='0' max='30'>    
        <input type='number' name='team' min='0' max='30'>    
        <button type='submit' name ='primary' value = $primary>Modify</button>
    </form>"

    ?>


    </div>   
    
    </body>
</html>