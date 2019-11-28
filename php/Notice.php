<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/Notice_layout.css">
  <meta charset="utf-8">
  <title>Software Engineering Lab - Notice</title>
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
    <h1> NOTICE </h1>
  </header>
  <article>
      <img src="../images/notice.png" width="360" height="255 " class="right">
    <section> 
      <table class="table" border="1">

        <caption></caption>

        <tr>
          <th>Title</th>
          <th>Name</th>
          <th>Date</th>
        </tr>
        <tr>
          <td>연구원 모집</td>
          <td>Scott Uk-Jin Lee</td>
          <td>29 Aug 2014</td>
        </tr>
        <tr>
          <td>2014 PL-SE First Joint Workshop</td>
          <td>Scott Uk-Jin Lee</td>
          <td>29 Apr 2014</td>
        </tr>
        <tr>
          <td>Welcome to SELab Homepage!</td>
          <td>Scott Uk-Jin Lee</td>
          <td>06 Mar 2014</td>
        </tr>


        <tr>
          <td colspan="6"><button>Write</button></td>
        </tr>


        <tr>
          <td colspan="6">
            <center>
              <div class="page">
                <a href="#">
                  <<</a> <a href="#">1
                </a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">>></a>
              </div>
            </center>
          </td>
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
