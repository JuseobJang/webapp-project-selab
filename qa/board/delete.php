<?php
	require_once("../dbconfig.php");

	//$_GET['bno']이 있어야 글삭제 가능
	if(isset($_GET['bno'])) {
		$bNo = $_GET['bno'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Software Engineering Lab - Q & A</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3> Delete </h3>
		<?php
			if(isset($bNo)) {
				$sql = 'select count(b_no) as cnt from board_free where b_no = ' . $bNo;
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
				if(empty($row['cnt'])) {
		?>
		<script>
			alert('Post does not exist');
			history.back();
		</script>
		<?php
			exit;
				}

				$sql = 'select b_title from board_free where b_no = ' . $bNo;
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
		?>
		<div id="boardDelete">
			<form action="./delete_update.php" method="post">
				<input type="hidden" name="bno" value="<?php echo $bNo?>">
				<table>
					<caption class="readHide">Post Delete</caption>
					<thead>
						<tr>
							<th scope="col" colspan="2">Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Title</th>
							<td><?php echo $row['b_title']?></td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">Password</label></th>
							<td><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
					</tbody>
				</table>

				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">Delete</button>
					<a href="./index.php" class="btnList btn">List</a>
				</div>
			</form>
		</div>
	<?php
		//$bno이 없다면 삭제 실패
		} else {
	?>
		<script>
			alert('Exceptional Path. Please Use Regular Path');
			history.back();
		</script>
	<?php
			exit;
		}
	?>
	</article>
</body>
</html>
