<?php
	require_once("../dbconfig.php");

	//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}

	if(isset($bNo)) {
		$sql = 'select b_title, b_content, b_id from board_free where b_no = ' . $bNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
	}
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
	<link rel="stylesheet" href="./css/write.css" />
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
		<div id="boardWrite">
			<form id="writeform" action="./write_update.php" method="post">
				<?php
				if(isset($bNo)) {
					echo '<input type="hidden" name="bno" value="' . $bNo . '">';
				}
				?>
				<table id="boardWrite">
					<caption class="readHide"></caption>
					<tbody>
						<tr>
							<th scope="row"><label for="bID">ID</label></th>
							<td class="id">
								<?php
								if(isset($bNo)) {
									echo $row['b_id'];
								} else { ?>
									<input type="text" name="bID" id="bID">
								<?php } ?>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">Password</label></th>
							<td class="password"><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">Title</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">Content</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php echo isset($bNo)?'Modify':'Write'?>
					</button>
					<a href="./index.php" class="btnList btn">List</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>
