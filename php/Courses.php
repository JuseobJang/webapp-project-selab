<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/courses_layout.css">
  <title>Software Engineering Lab - Courses</title>
</head>

<body>
   <nav>
    <a href="Home.php"><img src="../images/selab.png" align="center" width="72" height="26"></a>
    <ul class="menu">
      <li><a href="Contact.php">Contact</a></li>
      <li>
        <?php if (isset($_SESSION['id'])){ ?> 
          <a href="../qa/board/index.php">Q & A</a>
        <?php }
         else{ ?> 
          <a onClick = "alert('로그인 해주세요.')" >Q & A</a> 
          <?php }?>
      <li><a href="Courses.php">Courses</a></li>
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
    <h1>COURSES</h1>
  </header>

  <article>
    <section>
      <table class="top_table">
        <tr>
          <th></th>
          <th>Undergraduate Courses</th>
          <th>2019-2</th>
          <th>2019-1</th>
          <th>2018-1</th>
          <th>2017-2</th>
          <th>2017-1</th>
          <th>2016-2</th>
          <th>2016-1</th>
          <th>2015-2</th>
          <th>2015-1</th>
          <th>2014-2</th>
          <th>2014-1</th>
        </tr>
        <tr>
          <td class="size1">CSE107</td>
          <td class="size2">Logical Fundamentals of Programming</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
        </tr>
        <tr class="white">
          <td class="size1">CSE117</td>
          <td>Programming Fundamentals</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>CSE322</td>
          <td>Web Programming</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="white">
          <td id="ourcourse" <?php $course = $_SESSION['course'];
           if($course == "Web Application Development" || $_SESSION['permit']==2) { ?> 
          onClick="location.href='Course_home.php'" <?php } 
          else{ ?> onClick= "alert('수강중인 강의가 아닙니다.')"
          <?php } ?>>CSE326</td>

          <td id="ourcourse" 
          <?php $course = $_SESSION['course'];
            if($course == "Web Application Development" || $_SESSION['permit']==2) { ?> 
              onClick="location.href='Course_home.php'" <?php 
            } 
           else{ ?> 
            onClick= "alert('수강중인 강의가 아닙니다.')" 
            <?php } ?> 
          >
            Web Application Development
          </td> 
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>CSE406</td>
          <td>Software Engineering</td>
          <td></td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td></td>
        </tr>

      </table>
    </section>
    <br>
    <section>
      <table class="bottom_table">
        <tr>
          <th></th>
          <th>Postgraduate Courses Courses</th>
          <th>2019-2</th>
          <th>2019-1</th>
          <th>2018-1</th>
          <th>2017-2</th>
          <th>2017-1</th>
          <th>2016-2</th>
          <th>2016-1</th>
          <th>2015-2</th>
          <th>2015-1</th>
          <th>2014-2</th>
          <th>2014-1</th>
        </tr>
        <tr>
          <td class="size1">CIN870</td>
          <td class="size2">Formal Methods</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>
          </td>
        </tr>
        <tr class="white">
          <td >CSE603</td>
          <td>Management of Semistructured Data</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <div class="circle"></div>
        </tr>
        <tr>
          <td>CSE609</td>
          <td>Model Checking</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr class="white">
          <td>CSE639</td>
          <td>Special Topics in Software Engineering</td>
          <td>

          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td>
          </td>
          <td></td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
          </td>
          <td></td>
          <td>
          </td>
          <td></td>
        </tr>
        <tr>
          <td id="ourcourse" >CSE6050 </td>
          <td id="ourcourse" >Advanced Software Engineering</td>
          <td>
            <div class="circle"></div>
          </td>
          <td></td>
          <td>
          </td>
          <td></td>
          <td>
          </td>
          <td></td>
          <td>
          </td>
          <td></td>
          <td>
          </td>
          <td></td>
          <td></td>
        </tr>

      </table>
    </section>
  </article>
  <div>
      <a href="#" class="scrollup">
        <img src="../images/uparrow.png" width="32px" height="32px">
      </a>
  </div>

  <footer>
    <p>COPYRIGHT 2014 SELAB, ALL RIGHTS RESERVED. COMPUTER SCIENECE AND ENGINEERING, HANYANG UNIV. LOCATION: ENGINEERING BUILDING #3, ROOM 421. T +82-31-400-4754</p>
  </footer>



</body>

</html>
