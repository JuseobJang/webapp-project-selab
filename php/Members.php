<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">

<head>
  <link rel="stylesheet" href="../css/Members_layout.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">
  <meta charset="utf-8">
  <title>Software Engineering Lab - Members</title>
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
  </nav>

  <header>
    <h1>MEMBERS</h1>
  </header>

  <article>
    <section>
      <h2>Professor</h2>

      <div class="human">
        <img src="../images/scott.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Scott Uk-Jin Lee</strong></em></p>
          <ul>
            <li>scottlee@hanyang.ac.kr</li>
            <li><a href="https://selab.hanyang.ac.kr/members/TBA">TBA</a></li>
            <li>an asst. prof. in the CSE Dept. @ HYU (ERICA)<br>leading this Laboratory!</li>
          </ul>
        </div>

        <div class="interest">
          <p>Career</p>
          <ul>
            <li>11 - : Assistant Professor in CSE Dept. @ Hanyang University, Korea<br>09 - 11 : Postdoc @ CEA LIST, France<br>05 - 06 : SE Programmer in SE Dept. @ University of Auckland, NZ<br>04 - 04 : Visiting Researcher @ National University of
              Singapore<br>04 - 08 : Ph.D in Computer Science @ University of Auckland, NZ<br>00 - 03 : BE in Software Engineering @ University of Auckland, NZ</li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <h2>Ph.D.</h2>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Isma Farah</strong></em></p>
          <ul>
            <li>isma2012@hanyang.ac.kr</li>
            <li><a href="http://www.linkedin.com/in/ismafarah">http://www.linkedin.com/in/ismafarah</a></li>
            <li>PhD scholar From Pakistan on HEC Scholarship</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>Web Applications<br>Semantic Web<br>Database Management<br>Formal Methods</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Abdul Rahim</strong></em></p>
          <ul>
            <li>rahim750413@hanyang.ac.kr</li>
            <li><a href="https://www.facebook.com/abdul.ariffin">https://www.facebook.com/abdul.ariffin</a></li>
            <li>Master's leading to Phd scholar from Kuala Lumpur,Malaysia</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>-Hadoop(MapReduce)<br>- Multithreading</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Asad Abbas</strong></em></p>
          <ul>
            <li>asadabbas@hanyang.ac.kr</li>
            <li></li>
            <li>HEC Pakistan Scholar MS leading to PhD From Pakistan</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>-Product Line Software Engineering<br>-</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Gichan Lee</strong></em></p>
          <ul>
            <li>fantasyopy@gmail.com</li>
            <li><a href="https://www.linkedin.com/in/GCSELAB">https://www.linkedin.com/in/GCSELAB</a></li>
            <li>2016-2 ~ <br>M.E. to Ph.D.</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering in practice<br>Access Control in IoT environment(project)</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Mohsin Javaid</strong></em></p>
          <ul>
            <li>mohsinjavaid@hanyang.ac.kr</li>
            <li><a href="https://www.linkedin.com/in/mohsin-javaid-10329aa0">https://goo.gl/3QXH6k</a></li>
            <li>Ph.D. Scholar from Pakistan on HEC Scholarship.</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>Model Driven Architecture<br>Internet of Things<br>Android Application<br>Requirement Engineering</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Muhammad Umair Khan</strong></em></p>
          <ul>
            <li>mumairkhan@hanyang.ac.kr</li>
            <li><a href="https://www.linkedin.com/in/mumairkhan009">https://goo.gl/GdYteF</a></li>
            <li>Ph.D. Scholar from Pakistan on HEC scholarship</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>Concurrent Programming<br>Internet of Thing</li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <h2>M.E.</h2>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Gayeon Kim</strong></em></p>
          <ul>
            <li>gayeonkim91@gmail.com</li>
            <li></li>
            <li>Hi</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>Web Application<br>Bigdata analysis</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Seonwoong Kim</strong></em></p>
          <ul>
            <li>oung123@hanmail.net</li>
            <li><a href="https://selab.hanyang.ac.kr/members/none">none</a></li>
            <li>Wussup</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>Model Checking<br>Swift2</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Wu Zhiqiang</strong></em></p>
          <ul>
            <li>hhhwwwuuu@hanyang.ac.kr</li>
            <li></li>
            <li>-</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software engineering<br>- Concurrency Detection<br>- Malware Detection</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Gwanggyu Choi</strong></em></p>
          <ul>
            <li>gcahmoei@hanyang.ac.kr</li>
            <li><a href="https://selab.hanyang.ac.kr/members/">.</a></li>
            <li>.</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software engineering<br>- requirement engineering<br>-</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Hyunglak Kim</strong></em></p>
          <ul>
            <li>jikuaij@gmail.com</li>
            <li></li>
            <li>Hi</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>- Crowdsourcing Software Develop<br>- Android Application<br>- Model Checking</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Youn Guen Ahn</strong></em></p>
          <ul>
            <li>frebern@naver.com</li>
            <li><a href="http://frebern.xyz/">http://frebern.xyz</a></li>
            <li>TBA</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Java, Android</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Kyojune Hwang</strong></em></p>
          <ul>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li></li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Hakjin Lee</strong></em></p>
          <ul>
            <li>gsdjini91@gmail.com</li>
            <li></li>
            <li></li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Smell Detection, Refactoring, Game QA</li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <h2>Intern</h2>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Dahae Sung</strong></em></p>
          <ul>
            <li>sdh4513136@hanmail.net</li>
            <li></li>
            <li>:)</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li></li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Yongtaek Oh</strong></em></p>
          <ul>
            <li>ka123ak1@gmail.com</li>
            <li></li>
            <li></li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>IoT</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Namju Park</strong></em></p>
          <ul>
            <li>qkrska66@hanyang.ac.kr</li>
            <li></li>
            <li></li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li></li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <h2>Alumni</h2>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Jaejin Kim</strong></em></p>
          <ul>
            <li>jaejinkim@hanyang.ac.kr</li>
            <li><a herf="https://www.facebook.com/musalhk">https://www.facebook.com/musalhk</a></li>
            <li>2012 - 1st M.E. in SELAB.<br />2014 - Software Engineer in Cloud Lab. B2B / <br />Samsung Electronics Mobile Communications Business</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>- Access Control in Ubiquitous<br>- Software Engineering<br>- IoT Technology (Internet of Things)<br>- Health & Medical Technology<br>- Cloud Computing</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Jiang Hua</strong></em></p>
          <ul>
            <li>jh19880208@163.com</li>
            <li></li>
            <li>0.0</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Requirement Engineering</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Jaeho Choi</strong></em></p>
          <ul>
            <li>jaeho34@hanyang.ac.kr</li>
            <li><a herf="https://www.facebook.com/Rogue9071">http://www.facebook.com/rogue9071</a></li>
            <li>Hi, guys!! I am a crazy boy in this area :-)</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li>Software Engineering<br>A field of Access Control(XACML tools)<br>Web Application & Security<br>Cloud Computing Evironment<br>Social Network Service</li>
          </ul>
        </div>
      </div>

      <div class="human">
        <img src="../images/none.jpg" align="left" vspace="5" hspace="10" width="140" height="175">

        <div class="info">
          <p><em><strong>Geunhwan Park</strong></em></p>
          <ul>
            <li>0101d8cf@gmail.com</li>
            <li><a herf="https://selab.hanyang.ac.kr/~pgh">http://selab.hanyang.ac.kr/~pgh</a></li>
            <li>Hi</li>
          </ul>
        </div>

        <div class="interest">
          <p>Research Interests</p>
          <ul>
            <li></li>
          </ul>
        </div>
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
