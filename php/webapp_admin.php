<!DOCTYPE html>
<?php session_start(); ?>

<html>

<head>
    <title>Web App - Admin page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/webapp_admin.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/layout.css">
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

    <h2>MEMBER'S LIST</h2>

    <div id="member_list">
        <?php
        $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
        $query = "select * from member where course='Web Application Development';";
        $result = $connect->query($query);


        echo '<table class="text-center"><tr>' .
            '<th>Last_name</th><th>First_name</th><th>Student_id</th><th>Class</th><th></th>' .
            '</tr>';
        while ($row = mysqli_fetch_array($result)) {
            $primary = $row['student_id'];
            echo '<tr><td>' . $row['last_name'] . '</td>' .
                '<td>' . $row['first_name'] . '</td>' .
                '<td>' . $row['student_id'] . '</td>' .
                '<td>' . $row['class_num'] . '</td>' .
                "<td> <form action='member_info.php' method='POST'>
                    <button type='submit' name= 'primary' value='$primary'>info</button>
                </form> </td>" .
                '</tr>';
        }
        echo '</table>';

        ?>
    </div>
</body>

</html>