<?php session_start(); ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Software Engineering Lab - Q & A</title>
        <link rel="stylesheet" href="./css/normalize.css" />
        <link rel="stylesheet" href="./css/board.css" />
        <link rel="stylesheet" href="../../css/layout.css" />
        <link rel="stylesheet" href="../../css/menu.css" />
        <link rel="stylesheet" href="./css/myquestion.css" />
        <script src="./js/jquery-2.1.3.min.js"></script>	

    </head>
    <body>
        <nav>
            <a href="../../php/Home.php"><img src="../../images/selab.png" align="center" width="72" height="26"></a>
            <ul>
            <li><a href="../../php/Contact.php">Contact</a></li>
            <li>
                <?php if (isset($_SESSION['id'])){ ?> 
                <a href="./index.php">Q & A</a>
                <?php }
                else{ ?> 
                <a onClick = "alert('로그인 해주세요.')" >Q & A</a> 
                <?php }?>
            </li>
            <li><a href="../../php/Courses.php">Courses</a>
                <ul>
                <li><a href="../../php/Course_home.php">Home</a></li>
                <li><a href="../../php/Course_slides.php">Slides</a></li>
                </ul>
            </li>
            <li><a href="../../php/Publications.php">Publications</a>
                <ul>
                <li><a href="../../php/Pub_incon.php">International Conference</a></li>
                <li><a href="../../php/Pub_injour.php">International Journal</a></li>
                <li><a href="../../php/Pub_domcon.php">Domestic Conference</a></li>
                <li><a href="../../php/Pub_domjour.php">Domestic Journal</a></li>
                </ul>
            </li>
            <li><a href="../../php/Research.php">Research</a></li>
            <li><a href="../../php/Members.php">Members</a></li>
            <li><a href="../../php/Notice.php">Notice</a></li> 
            </ul>
        </nav>
    </body>
<?php 
    require_once("../dbconfig.php");
    $id = $_SESSION['id'];

    $conn = mysqli_connect("localhost", "root", "root", "database");
    
    $sql1 = 'SELECT * from board_free WHERE userid = ' . "'$id'";   
    $result1 = mysqli_query($conn,$sql1);
    while($row1 = mysqli_fetch_assoc($result1)){
        ?>
        <div id="boardView">
        <table>
				<caption ></caption>
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
						
                            <div id="boardContent"><?php echo $row1['b_content']?></div>
                        </tr>
				
						<?php 
						?>
				</tbody>
			</table>
            </div>
        
        <br><?php
    }
?>
</html>


