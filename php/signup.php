<!DOCTYPE>

<html>
<head> 
  <meta charset='utf-8'>
  <link rel="stylesheet" href="../css/signup.css">

</head>

<body>

  <div id="sign_up" align="center">
    <h2>SIGN UP</h2>
    <form method='POST' action='../login/signup_action.php'>
      <input type="text" name="first_name" placeholder="First name">
      <br>
      <input type="text" name="last_name" placeholder="Last name">
      <br>
      <input type="text" name="id" placeholder="Username">
      <br>
      <input type="password" name="pw" placeholder="Password">
      <br>
      <input type="password" name="pw_cf" placeholder="Password Confirm">
      <br>
      <input type="text" name="student_id" placeholder="Student Id">
      <br>
      <input type="text" name="phone" placeholder="Phone Number">
      <br>
      <div class="course"><p>COURSE</p>
      <input class="radio" type="radio" name="course" value = "Web Application Development">Web Application Development
      <br>
      <input class="radio" type="radio" name="course" value = "Advanced Software Engineering">Advanced Software Engineering
      </div>
      <div class="time"><p>CLASS TIME</p>
      <input class="radio" type="radio" name="class_num" value = "1"> THU 9:00~10:30 & FRI 13:00~14:30
      <br>
      <input class="radio" type="radio" name="class_num" value = "2"> THU 10:30~12:00 & FRI 14:30~16:00
      </div>
      


      <div class='divider'></div>
      <div class="button"><button type="submit" name="button">Register</button></div>
    </form>
  </div>
</body>

</html>
