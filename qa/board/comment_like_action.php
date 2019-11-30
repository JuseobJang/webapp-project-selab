<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");

$value = $_POST['c_likes'];
$value1 = $_POST['c_unlikes'];
$co_no = $_SESSION['co_no'];
$b_no = $_SESSION['b_no'];

echo $value , $value1 ,$co_no, $b_no;


$query = "select * from comment_free where co_no='$co_no' and b_no ='$b_no'";
$result = $connect->query($query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
}



$c_likes = $row['c_likes'];
$c_unlikes = $row['c_unlikes'];

 echo $c_likes;

if($value == 1){
    $c_likes = $c_likes +1;
    $query1 = "update comment_free set c_likes = $c_likes where co_no='$co_no'";
    $result1 = $connect->query($query1);
}
else{
    $c_unlikes = $c_unlikes +1;
    $query1 = "update comment_free set c_unlikes = '$c_unlikes' where co_no='$co_no'";
    $result1 = $connect->query($query1);
}

header("location: view.php?bno='$b_no'"); // 여긴 어케바꿀지???

?>


