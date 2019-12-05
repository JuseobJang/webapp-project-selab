<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Software Engineering Lab - Q & A</title>
    <link rel="stylesheet" href="./css/normalize.css"/>
    <link rel="stylesheet" href="./css/board.css"/>
    <link rel="stylesheet" href="../../css/layout.css"/>
    <link rel="stylesheet" href="../../css/menu.css"/>
    <link rel="stylesheet" href="./css/myquestion.css"/>
    <script src="./js/jquery-2.1.3.min.js"></script>

</head>
<body>
    <p>My Question</p>

</body>

<?php
    require_once("../dbconfig.php");
    $id = $_SESSION['id'];

    $conn = mysqli_connect("localhost", "webapp", "webapp", "3306");

    $sql1 = 'SELECT * from board_free WHERE userid = ' . "'$id'";
    $result1 = mysqli_query($conn,$sql1);
    while($row1 = mysqli_fetch_assoc($result1)){
        ?>
<div id="boardView">
    <table>
        <thead>
            <tr>
                <th scope="col" class="no">No.</th>
                <th scope="col" class="title">Title</th>
                <th scope="col" class="author">Writer</th>
                <th scope="col" class="date">Date</th>
                <th scope="col" class="hit">View</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="no"><?php echo $row1['b_no']?></td>
                <td class="title">
                    <a href="./view.php?bno=<?php echo $row1['b_no']?>"><?php echo $row1['b_title']?></a>
                </td>
                <td class="author"><?php echo $row1['b_id']?></td>
                <td class="date"><?php echo $row1['b_date']?></td>
                <td class="hit"><?php echo $row1['b_hit']?></td>
            </tr>
            <tr>
                <td colspan="5"><?php echo $row1['b_content']?></td>
            </tr>
        </tbody>
    </table>


    </tbody>
    </table>
</div>

<br><?php
    }
?>
</html>
