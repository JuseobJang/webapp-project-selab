<!DOCTYPE html>
<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Software Engineering Lab - Courses</title>
    </head>
    <body>

    <?php
    $primary = $_POST['primary'];
    ?>
    <?php
     $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
     $query = "select * from member where student_id = '$primary';";
     $result = $connect->query($query);
     $row = mysqli_fetch_array($result);
     $first_name = row.[]
    ?>

    <div id="infos">
        <div class="info">
          <p>Name : <?php echo $first_name.row["last_name"] ?></p>
        </div>
        <div class="info">
          <p>phone : <?php echo row["phone"] ?></p>
        </div>
        <div class="info">
          <p>Attendance :</p> <?php echo $primary ?>
        </div>
        <div class="info">
          <p>Student_id : <?php echo row["student_id"] ?></p>
        </div>
        <div class="info">
          <p>Course : <?php echo row["course"] ?></p>
        </div> 
        <div class="info">
          <p>Class : <?php echo row["class_time"] ?></p>
    </div>

      
        
    </body>
</html>