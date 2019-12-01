<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
$at = $_POST['code'];
$value = $_POST['value'];
echo "$value";
if($_SESSION['permit'] == 2 && $value == 1){
    
    if($at != NULL){?>
    <script>alert("출석 코드가 입력 되었습니다.");</script>
<?php
    $query = "insert into code values('$at')";
    $result = $connect->query($query);
    }
    else{
        ?>
    <script>alert("출석코드를 입력해주세요.");</script>
        <?php
    }
}
else if($_SESSION['permit'] == 2 && $value == 0) {
    $query = "delete from code";
    $result = $connect->query($query);
    ?>
    <script>alert("출석이 종료되었습니다.");</script>
    <?php }
else {
    $query = "select * from code where at = '$at'";
    $result = $connect->query($query);
    $date = date('Y-m-d');
    $student_id = $_SESSION['student_id'];
    $query1 = "select * from attendance where date = '$date' and student_id = '$student_id'";
    $result1 = $connect->query($query1);

    if(mysqli_num_rows($result)==0 || mysqli_num_rows($result1) > 0 ){
    
    ?> <script>alert("출석시간이 종료 되었거나 코드가 잘 못 되었습니다.")</script>
    <?php
    }
    else {
        $student_id = $_SESSION['student_id'];
        $query2 = "insert into attendance values ('$student_id','$date')";
        $result2 = $connect->query($query2);
        ?>
        <script>alert("출석이 완료되었습니다.")</script>
    <?php
    }
}
   
?>
<meta http-equiv="refresh" content="0;url=../php/Home.php" />
