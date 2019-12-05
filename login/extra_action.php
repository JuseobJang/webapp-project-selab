<?php
    $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
    
    $primary = $_POST['primary'];

    $query = "select * from member where id='$primary'";
    $result = $connect->query($query);
    $row = mysqli_fetch_assoc($result);

    if ($row['extra'] < 10) {
        $extra = $_POST['extra'];
    
        $query1 = "update member SET extra = extra + $extra where student_id='$primary'";
        $result1 = $connect->query($query1);
    
        mysqli_close($connect);
    }

 ?>


<meta http-equiv="refresh" content="0;url=../php/webapp_admin.php" />
