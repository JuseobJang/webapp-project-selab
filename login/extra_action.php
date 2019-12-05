<?php
    $connect = mysqli_connect("localhost", "webapp", "webapp", "webapp", "3306") or die("fail");
    
    $primary = $_POST['primary'];

    $query = "select * from member where student_id='$primary'";
    $result = $connect->query($query);
    $row = mysqli_fetch_assoc($result);
    $extra = $_POST['extra'];

    if ($row['extra'] + $extra > 10) {
    
        $query1 = "update member SET extra = 10 where student_id='$primary'";
        $result1 = $connect->query($query1);
    
        mysqli_close($connect);
    }
    else {
        $query2 = "update member SET extra = extra + $extra where student_id='$primary'";
        $result2 = $connect->query($query2);
    
        mysqli_close($connect);
    }

 ?>


<meta http-equiv="refresh" content="0;url=../php/webapp_admin.php" />
