<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");

$value = $_POST['like'];
$b_no = $_SESSION['b_no'];





$query = "select * from board_free where b_no='$b_no'";
$result = $connect->query($query);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
}

$likes = $row['likes'] ;
$unlikes = $row['unlikes'];


// if(!empty($bNo) && empty($_COOKIE['board_free_like' . $likes]) ){ //글번호가있고, likes라는 쿠키가없으면
//     if($value == 1){
//         $likes = $likes +1;
//         $query1 = "update board_free set likes = $likes where b_no='$b_no'";
//         $result1 = $connect->query($query1);
//     }
//     else{
//         exit;
//     } 
// }
// else if(!empty($bNo) && empty($_COOKIE['board_free_unlike' . $unlikes]) ){
//     if($value == 0){
//         $unlikes = $unlikes +1;
//         $query1 = "update board_free set unlikes = '$unlikes' where b_no='$b_no'";
//         $result1 = $connect->query($query1);
//     }
//     else{
//         setcookie('board_free_unlike' . $unlikes, TRUE, time() + (60 * 60 * 24), '/');
//     }
// }

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

