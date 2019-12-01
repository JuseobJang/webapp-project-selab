<!DOCTYPE html>
<?php session_start(); ?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/input_grade.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="../css/layout.css">
        <title>Software Engineering Lab - Courses</title>
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