<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");

$value = $_POST['like'];
$b_no = $_SESSION['b_no'];

echo $value , $b_no;


$query = "select * from board_free where b_no='$b_no'";
$result = $connect->query($query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
}



$likes = $row['likes'] ;
$unlikes = $row['unlikes'];

 

if($value == 1){
    $likes = $likes +1;
    $query1 = "update board_free set likes = $likes where b_no='$b_no'";
    $result1 = $connect->query($query1);
    

}
else{
    $unlikes = $unlikes +1;
    $query1 = "update board_free set unlikes = '$unlikes' where b_no='$b_no'";
    $result1 = $connect->query($query1);
}


header("location: view.php?bno='$b_no'");


?>


