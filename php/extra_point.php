<!DOCTYPE html>
<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/input_grade.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/layout.css">
        <title>Software Engineering Lab - Admin</title>
    </head>
    <body>

    <nav>
    <a href="Home.php"><img src="../images/selab.png" align="center" width="72" height="26"></a>
    <ul>
      <li><a href="Contact.php">Contact</a></li>
      <li>
        <?php if (isset($_SESSION['id'])){ ?> 
          <a href="../qa/board/index.php">Q & A</a>
        <?php }
         else{ ?> 
          <a onClick = "alert('로그인 해주세요.')" >Q & A</a> 
          <?php }?>
      </li>
      <li><a href="Courses.php">Courses</a>
      </li>
      <li><a href="Publications.php">Publications</a>
        <ul>
          <li><a href="Pub_incon.php">International Conference</a></li>
          <li><a href="Pub_injour.php">International Journal</a></li>
          <li><a href="Pub_domcon.php">Domestic Conference</a></li>
          <li><a href="Pub_domjour.php">Domestic Journal</a></li>
        </ul>
      </li>
      <li><a href="Research.php">Research</a></li>
      <li><a href="Members.php">Members</a></li>
      <li><a href="Notice.php">Notice</a></li>
    </ul>
  </nav>

  <header>
    <h1>ADMIN PAGE</h1>
  </header>

  <h2>MEMBER'S GRADE</h2>
    <div class="grade">
    <h3>Student_id :
    <?php
     $primary = $_POST['extra_point'];
     $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
     $query = "select * from member where student_id = '$primary';";
     $result = $connect->query($query);
     $row = mysqli_fetch_array($result);
     echo $primary;
    ?>
    </h3>

    <div>
    <?php    
    echo "<form action='../login/extra_action.php' method = 'POST'>
        <p>Extra Point</p><input type='number' name='extra' min='0' max='10'>
        <button type='submit' name ='primary' value = $primary style='height:30px; width:70px;'>Add</button></form>"?></div></div>
    
    </body>
</html>