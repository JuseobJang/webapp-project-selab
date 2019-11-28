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
    ?>

    <div id="infos">
        <div class="info">
          <p>Name : <?php echo $row["first_name"].$row['last_name'] ?></p>
        </div>
        <div class="info">
          <p>phone : <?php echo $row["phone"] ?></p>
        </div>
        <div class="info">
          <p>Attendance :</p>
        </div>
        <div class="info">
          <p>Student_id : <?php echo $row["student_id"] ?></p>
        </div>
        <div class="info">
          <p>Course : <?php echo $row["course"] ?></p>
        </div> 
        <div class="info">
          <p>Class : <?php echo $row["class_num"] ?></p>
        </div>
        <div class="info">
          <p>Course : <?php echo $row["mid"] ?></p>
        </div> 
        <div class="info">
          <p>Course : <?php echo $row["final"] ?></p>
        </div> 
        <div class="info">
          <p>Course : <?php echo $row["team"] ?></p>
        </div> 
      <?php
        echo "<form action='input_grade.php' method='POST'>
            <button type='submit' name= 'input_grade' value='$primary'>input grade</button>
        </form>"
        ?>
    </div>

      
        
    </body>
</html>