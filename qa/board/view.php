<?php session_start(); ?>
<?php
	require_once("../dbconfig.php");
	$bNo = $_GET['bno'];
	$db = mysqli_connect("localhost", "root", "root", "database", "8889") or die("fail");
	if(!empty($bNo) && empty($_COOKIE['board_free_' . $bNo])) {
		$sql = 'update board_free set b_hit = b_hit + 1 where b_no = ' . $bNo;
		$result = $db->query($sql);
		if(empty($result)) {
			?>
			<script>
				alert('오류가 발생했습니다.');
				history.back();
			</script>
			<?php
		} else {
			setcookie('board_free_' . $bNo, TRUE, time() + (60 * 60 * 24), '/');
		}
	}
	$sql = 'select * from board_free where b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
	$_SESSION['b_no'] = $row['b_no']
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Q & A</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
	<link rel="stylesheet" href="../../css/layout.css" />
	<link rel="stylesheet" href="../../css/menu.css" />
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
	
	<article class="boardArticle">
		<h1>Q & A</h1>
		<div id="boardView">

			<h3 id="boardTitle"><?php echo $row['b_title']?></h3>
			<div id="boardInfo">
				<span id="boardID">Writer : <?php echo $row['b_id']?></span>
				<span id="boardDate">Date : <?php echo $row['b_date']?></span>
				<span id="boardHit">View : <?php echo $row['b_hit']?></span>
			</div>
			<div id="boardContent"><?php echo nl2br($row['b_content'])?></div>
			<form action="like_action.php" method="POST">
				<button type='submit' name='like' value='1'>LIKE</button>
				<button type ='submit' name='like' value='0'>UNLIKE</button>
			</form>
			<span id="boardID">like : <?php echo $row['likes']?></span>
			<span id="boardID">unlike : <?php echo $row['unlikes']?></span>
			

			<div class="btnSet">
				<a href="./write.php?bno=<?php echo $bNo?>">Modify</a>
				<a href="./delete.php?bno=<?php echo $bNo?>">Delete</a>
				<a href="./">List</a>
			</div>
		<div id="boardComment">
			<?php require_once('./comment.php')?>
		</div>
		</div>
	</article>
</body>
</html>
