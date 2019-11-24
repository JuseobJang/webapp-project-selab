<?php
	require_once("../dbconfig.php");
	$bNo = $_GET['bno'];

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

	$sql = 'select b_title, b_content, b_date, b_hit, b_id from board_free where b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
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
    <a href="../../html/Home.php"><img src="../../images/selab.png" align="center" width="72" height="26"></a>
    <ul>
      <li><a href="../../html/Contact.html">Contact</a></li>
      <li><a href="./index.php">Q & A</a></li>
      <li><a href="../../html/Courses.html">Courses</a>
        <ul>
          <li><a href="../../html/Course_home.html">Home</a></li>
          <li><a href="../../html/Course_slides.html">Slides</a></li>
        </ul>
      </li>
      <li><a href="../../html/Publications.html">Publications</a>
        <ul>
          <li><a href="../../html/Pub_incon.html">International Conference</a></li>
          <li><a href="../../html/Pub_injour.html">International Journal</a></li>
          <li><a href="../../html/Pub_domcon.html">Domestic Conference</a></li>
          <li><a href="../../html/Pub_domjour.html">Domestic Journal</a></li>
        </ul>
      </li>
      <li><a href="../../html/Research.html">Research</a></li>
      <li><a href="../../html/Members.html">Members</a></li>
      <li><a href="../../html/Notice.html">Notice</a></li> 
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
			<div id="boardContent"><?php echo $row['b_content']?></div>
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
