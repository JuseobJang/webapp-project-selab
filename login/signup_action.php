<?php

$connect = mysqli_connect("localhost", "webapp", "webapp", "webapp", "3306") or die("fail");


$id = $_POST[id];
$pw = $_POST[pw];
$pw_cf = $_POST[pw_cf];
$student_id = $_POST[student_id];
$phone = $_POST[phone];
$first_name =$_POST[first_name];
$last_name =$_POST[last_name];
$date = date('Y-m-d H:i:s');
$course = $_POST[course];
$class_num = $_POST[class_num];

$query = "select * from member where id='$id'";
$result = $connect->query($query);
if (mysqli_num_rows($result) == 1) {
  ?> <script>
    alert('이미 존재하는 유저명 입니다.')
    history.back();
  </script>
<?php
  exit;
};
if ($pw != $pw_cf) {
  ?> <script>
    alert('비밀번호가 일치 하지 않습니다.')
    history.back();
  </script>
<?php
  exit;
};

if (strlen($student_id) != 10) { ?>
  <script>
    alert('학번은 10자리 입니다.')
    history.back();
  </script>

<?php
  exit;
}

$query1 = "insert into member (id,first_name,last_name, pw, student_id, phone, date, course, class_num, permit) values ('$id','$first_name','$last_name', '$pw','$student_id','$phone', '$date', '$course','$class_num', 0)";

$result1 = $connect->query($query1);

if ($result1) {
  ?> <script>
    alert('가입 되었습니다.');
    window.close();
  </script>

<?php
} else {
  ?> <script>
    alert("양식을 다 작성해주세요.");
    history.back();
  </script>
<?php
}

mysqli_close($connect);
?>

