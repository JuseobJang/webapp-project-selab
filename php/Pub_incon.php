<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/pub_layout.css">


  <meta charset="utf-8">
  <title>Software Engineering Lab - Publications</title>
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
    <h1>PUBLICATION</h1>
  </header>


  <article>
    <table>
      <tr>
        <th>International Conference
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Zhiqiang1.pdf ">Zhiqiang Wu, Xin Chen and Scott Uk-Jin Lee, "Identifying Latent Android Malware from Application's Description using LSTM," In Proc. International Conference on
            Information, System and Convergence Applications, 2019, pp.40-42.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Mohsin0.pdf"> Mohsin Javaid Siddiqui, Xintao Li, Isma Farah Siddiqui, Asad Abbas and Scott Uk-Jin Lee, "Comparative Analysis of GUI Development for Android Application by utilizing MDA
            Approach," In Proc. International workshop on convergence information technology 2017, 2017, pp.151-154.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Zhiqiang0.pdf">Zhiqiang Wu, Asad Abbas and Scott Uk-Jin Lee, "Multiple Concurrency Anomalies Classification for Mobile Applications using Support Vector Machine," In Proc.
            International Conference on Computing Convergence and Applications (ICCCA), 2018, pp.103-106.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Asad4.pdf">Asad Abbas, Zhiqiang Wu, Mohsin Javid Siddiqui, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Contextual Variability Management of Multi-Software Product Line," In Proc.
            International Conference on Computing Convergence and Applications 2017, 2017, pp.71-74.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_I.F.0.pdf">Isma Farah Siddiqui, Nawab Muhammad Faseeh Qureshi, Muhammad Akram Shaikh, Bhawani Shankar Chowdhry, Asad Abbas and Scott Uk-Jin Lee, "Knowledge-based stuck-at fault
            analysis for wireless IoT smart meters in smart grid," In Proc. 2nd Global Conference on Wireless and optical Communications, 2017</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Asad3.pdf">Asad Abbas, Hyung-Lak Kim, Isma Farah Siddiqui, Ali Kashif Bashir and Scott Uk-Jin Lee, "Contextual Variability Management of IoT Applications Using Agent-Base Modeling with
            Software Product Line," In Proc. International Conference on Computing Convergence and Applications 2017, 2017, pp.13-16.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Asad2.pdf">Asad Abbas, Isma Farah Siddiqui and Scott Uk-Jin Lee, "XML-based Feature Modeling of IoT Applications," In Proc. International Conference on Computing Convergence and
            Applications (ICCCA), 2016, pp.163-166.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Asad1.pdf">Asad Abbas, Zhiqiang Wu, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Challenges of Multi-Objective Optimization in Feature Model of Software Product Line," In Proc. 3rd
            International Conference on Information, System and Convergence Applications 2016, 2016, pp.15-17.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Abdul1.pdf">Abdul Rahim Mohamed Ariffin and Scott Uk-Jin Lee, "Generic Modeling for Pthreads with Cilk," In Proc. 3rd International Conference on Information, System and
            Convergence Applications 2016, 2016, pp.30-32.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Isma3.pdf">Isma Farah Siddiqui, Asad Abbas and Scott Uk-Jin Lee, "HBAC: An access control over Semantics-enabled Smart Grids to enable energy-efficiency and lifetime optimization," In Proc.
            2nd International Conference on Information and Convergence Technology for Smart Society 2016, 2016, pp.9-11.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Asad0.pdf">Asad Abbas, Zhiqiang Wu, Isma Farah Siddiqui and Scott Uk-Jin Lee, "Optimized feature selection with crosscutting concerns in software product line feature model," In
            Proc. 2nd International Conference on Information and Convergence Technology for Smart Society 2016, 2016, pp.1-3.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Isma2.pdf">Isma Farah Siddiqui and Scott Uk-Jin Lee, "Privacy-Aware Smart Learning: Providing XACML as a Service in Semantic Web based Smart Environment," In Proc. 7th International
            Conference on Internet Symp., 2015, pp.97-101.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Abdul0.pdf">Abdul Rahim Mohamed Ariffin, Isma Farah Siddiqui, Gayeon Kim and Scott Uk-Jin Lee, "A Survey on Correctness Properties for Multithreaded Applications," In Proc. 2nd
            International Conference on Information and Convergence Technology for Smart Society 2015, 2015, pp.1-3.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Gayeon0.pdf">Gayeon Kim, Abdul Rahim Mohomed Ariffin and Scott Uk-Jin Lee, "An Effective Approach for Parallel Processing with Multiple Microcontrollers," In Proc. 2nd International
            Conference on Information, System and Convergence Applications 2015, 2015, pp.142-145.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Isma1.pdf">Isma Farah Siddiqui and Scott Uk-Jin Lee, "A Novel Approach for Integrating Semantic Web Techniques into Smart Education Enviroment," In Proc. 1st International
            Conference on Information and Convergence Technology for Smart Society 2015, 2015, pp.127-131.</a></td>
      </tr>
      <tr>
        <td><a href="../pdf/international_conference/[IP]_Jaeho0.pdf">Jaeho Choi and Scott Uk-Jin Lee, "Vulnerability of Web-Storage in HTML5 for Web and Mobile Application," In Proc. 3rd Advances in Computing and Information Technology 2014, 2014,
            pp.112-115.</a></td>
      </tr>
      <tr>
        <td class="even"><a href="../pdf/international_conference/[IP]_Isma0.pdf">Isma Farah Siddiqui, Nawab Muhammad Faseeh, Scott Uk-Jin Lee and Mukhtiar Ali Unar, "An Advanced Hyper-Efficient Design to Detect Random Peer-to-Peer Botnets," In
            Proc. 3rd International Multi-Topic Conference 2013, 2013, pp.251-258.</a></td>
      </tr>

    </table>
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
