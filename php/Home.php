<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/Home_layout.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/member.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    function popOpen() {
      var pop_url = "../php/signup.php";
      var pop_option = "width=400px, height= 640px, reizable=no, status=no, scrollbars=no";
      window.open(pop_url, "", pop_option);
    };

    function popOpen2() {
      var pop_url = "../qa/board/myquestion.php";
      var pop_option = "width=750px, height= 750px, reizable=no, status=no, scrollbars=no";
      window.open(pop_url, "", pop_option);
    };

    function random(){
      var code = generateRandom(1000, 9999)
      $("#at").val(code);
    }

    var generateRandom = function (min, max) {
      var ranNum = Math.floor(Math.random()*(max-min+1)) + min;
      return ranNum;
}
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
    <img src="../images/f.png" width="80" height="80" class="left">
      <?php
        $id = $_SESSION['id'];
        $phone = $_SESSION['phone'];
        $student_id = $_SESSION['student_id'];
        $permit = $_SESSION['permit'];
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $course = $_SESSION['course'];
        $class = $_SESSION['class_num'];
        $class_time;
        if ($class == "1") {
          $class_time = "THU 9:00~10:30 & FRI 13:00~14:30";
        }
        else {
          $class_time = "THE 10:30~12:30 & FRI 14:30~16:00";
        }
        $mid = $_SESSION['mid'];
        $final = $_SESSION['final'];
        $team = $_SESSION['team'];
        echo "<p>HELLO! <strong>$id</strong> <a href=\"../login/logout.php\">로그아웃</a></p> ";
        if ($permit == 2) {
          ?>
          <form action="../login/code.php" method="POST"> <input type="text" id="at" name = "code" readonly> <input type='button' onclick='random()' value='RANDOM'/>
          <button type="submit" name="value" value = 1>CONFIRM</button>
          <button type="submit" name="value" value = 0>STOP</button>
        </form>
        <div id="admin"><a href="admin.php">Admin Course</a></div>
      <?php }
        else { ?>
          <form action="../login/code.php" method="POST"> <input type="number" name = "code" min=1000 max=9999> <button type="submit" >Attendance</button></form>

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
          <?php
            $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
            $query = "select * from attendance where student_id='$student_id'";
            $result = $connect->query($query);
            $att_num = round(mysqli_num_rows($result) /12, 2) *100;
          ?>
          <p>Attendance : <?php echo "$att_num" ?>% </p>
        </div>
        <div class="info">
          <p>Student_id : <?php echo "$student_id" ?> </p>
        </div>
        <div class="info">
          <p>Course : <?php echo "$course" ?></p>
        </div>
        <div class="info">
          <p>Class : <?php echo "$class_time" ?></p>
        </div>
        <div class="info">
          <p>Mid Term : <?php echo "$mid" ?> points</p>
        </div>
        <div class="info">
          <p>Final Term : <?php echo "$final" ?> points</p>
        </div>
        <div class="info">
          <p>Team Project : <?php echo "$team" ?> points</p>
        </div>
        <div class="info">
          <p>Extra Point : <?php echo "$extra" ?> points</p>
        </div>
        <div class="info">
          <p>My Question :<a href="javascript:popOpen2();"> 바로가기</a>  </p>
        </div>
      </div>
    </div>
  <?php
  } ?>




</body>

</html>
