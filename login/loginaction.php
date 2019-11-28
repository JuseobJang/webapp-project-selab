<?php

session_start();

$connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");

//입력 받은 id와 password
$id = $_POST['id'];
$pw = $_POST['pw'];

//아이디가 있는지 검사
$query = "select * from member where id='$id'";
$result = $connect->query($query);


//아이디가 있다면 비밀번호 검사 
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    //비밀번호가 맞다면 세션 생성
    if ($row['pw'] == $pw) {
        $_SESSION['id'] = $id;
        if (isset($_SESSION['id'])) {
            $_SESSION['student_id'] = $row['student_id'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['permit'] = $row['permit'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['course'] = $row['course']; 
            $_SESSION['class_num'] = $row['class_num'];
            ?>
            <script>
                alert("로그인 되었습니다.");
                location.replace("../php/Home.php");
            </script>
        <?php
                } else {
                    echo "session fail";
                }
            } else {
                ?> <script>
            alert("아이디 혹은 비밀번호가 잘못되었습니다.");
            history.back();
        </script>
    <?php
        }
    } else {
        ?> <script>
        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
        history.back();
    </script>
<?php
}


?>