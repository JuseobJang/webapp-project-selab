<?php session_start(); ?>
<?php 
    require_once("../dbconfig.php");
    $id = $_SESSION['id'];

    $conn = mysqli_connect("localhost", "root", "root", "database");
    
    $sql1 = 'SELECT * from board_free WHERE userid = ' . "'$id'";   
    $result1 = mysqli_query($conn,$sql1);
    while($row1 = mysqli_fetch_assoc($result1)){
        echo $row1['b_no'];
        echo $row1['b_title'];
        echo $row1['b_content'];
        echo $row1['b_date'];
        echo $row1['b_hit'];?>
    
        <a href="./view.php?bno=<?php echo $row1['b_no']?>"> h</a>
        

        <br><?php
    }
?>

