<?php
    $connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
    
    $primary = $_POST['primary'];
    $mid = $_POST['mid'];
    $final = $_POST['final'];
    $team = $_POST['team'];

    $query = "update member SET mid= '$mid',final= '$final',team='$team' where student_id='$primary'";
    $result = $connect->query($query);

    echo $mid,$final,$team,$primary;

    mysqli_close($connect);

 ?>


<meta http-equiv="refresh" content="0;url=../php/webapp_admin.php" />
