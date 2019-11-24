<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/Home_layout.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/member.css">

  <script type="text/javascript">
    function popOpen() {
      var pop_url = "../html/signup.html";
      var pop_option = "width=400px, height= 640px, reizable=no, status=no, scrollbars=no";
      window.open(pop_url, "", pop_option);
    };
  </script>

  <link href="https://fonts.googleapis.com/css?family=Abel|Farro|Lato|Roboto&display=swap" rel="stylesheet">

  <meta charset="utf-8">
  <title>Software Engineering Lab - Home</title>
</head>

<body>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  ?>

  <nav>
    <a href="Home.php"><img src="../images/selab.png" align="center" width="72" height="26"></a>
    <ul>
      <li><a href="Contact.html">Contact</a></li>
      <li><a href="../qa/board/index.php">Q & A</a></li>
      <li><a href="Courses.php">Courses</a>
      </li>
      <li><a href="Publications.html">Publications</a>
        <ul>
          <li><a href="Pub_incon.html">International Conference</a></li>
          <li><a href="Pub_injour.html">International Journal</a></li>
          <li><a href="Pub_domcon.html">Domestic Conference</a></li>
          <li><a href="Pub_domjour.html">Domestic Journal</a></li>
        </ul>
      </li>
      <li><a href="Research.html">Research</a></li>
      <li><a href="Members.html">Members</a></li>
      <li><a href="Notice.html">Notice</a></li>
    </ul>
  </nav>




  <article>
    <section>
      <h2>LAB[SE];</h2>
      <h3><em>Software Engineer Lab</h3></em>
      <p><em>welcome to
          <br><br>
          Software Engineering
          <br><br>
          Laboratory
          <br><br><br>
          within the CSE Dept
          <br><br>
          @HYU(ERICA)
          <br><br><br>
          led by asst,prof Scott Lee
          <br><br><br>
          where Grant Software Engineering are made
      </p></em>
    </section>
  </article>
  <?php if (!isset($_SESSION['id'])) { ?>
    <div id='login'>
      <h2>SIGNUP</h2>
      <form action="../login/loginaction.php" method="POST">
        <input name="id" type='text' placeholder='Username'>
        <input name="pw" type='password' placeholder='Password'>
        <div class='divider'></div>
        <div class=button><button type="submit">LOG IN</button></div>
        <p>Don't have an account? <a href="javascript:popOpen();"><span class='reg'>Register.</span></a> </p>
      </form>
    </div>
  <?php } else { ?>
    <div id='member'>
      <?php
        $id = $_SESSION['id'];
        $phone = $_SESSION['phone'];
        $student_id = $_SESSION['student_id'];
        $permit = $_SESSION['permit'];
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $course = $_SESSION['course'];
        echo "<p>HELLO! <strong>$id</strong> <a href=\"../login/logout.php\">로그아웃</a></p> ";
        if ($permit == 2) {
          ?>
        <div id="admin"><a href="admin.php">Admin Course</a></div>
      <?php } ?>
      <div class='divider'></div>

      <div id="infos">
        <div class="info">
          <p>Name : <?php echo "$first_name"."$last_name" ?></p>
        </div>
        <div class="info">
          <p>phone : <?php echo "$phone" ?></p>
        </div>
        <div class="info">
          <p>Attendance :</p>
        </div>
        <div class="info">
          <p>Student_id : <?php echo "$student_id" ?></p>
        </div>
        <div class="info">
          <p>Course : <?php echo "$course" ?></p>
        </div> 
      </div>
    </div>
  <?php
  } ?>


</body>

</html>