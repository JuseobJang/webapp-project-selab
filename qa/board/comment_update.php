<?php
	require_once('../dbconfig.php');

	$w = '';
	$coNo = 'null';

	//2번째 꼬리댓글 수정 및 삭제
	if(isset($_POST['w'])) {
		$w = $_POST['w'];
		$coNo = $_POST['co_no'];
	}

	//공통 변수
	$bNo = $_POST['bno'];
	$coPassword = $_POST['coPassword'];

	if($w !== 'd') {//$w 변수가 d일 경우 $coContent와 $coId가 필요없다
		$coContent = $_POST['coContent'];
		if($w !== 'u') {//$w 변수가 u일 경우 $coId가 필요없다
			$coId = $_POST['coId'];
		}
	}

	if(empty($w) || $w === 'w') { //$w 변수가 비어있거나 w인 경우
		$msg = 'post';
		$sql = 'insert into comment_free values(null, ' .$bNo . ', ' . $coNo . ', "' . $coContent . '", "' . $coId . '", password("' . $coPassword . '"))';


		if(empty($w)) { //$w 변수가 비어있는경우
			$result = $db->query($sql);

			$coNo = $db->insert_id;
			$sql = 'update comment_free set co_order = co_no where co_no = ' . $coNo;
		}

	} else if($w === 'u') { // 작성
		$msg = 'Modify';

		$sql = 'select count(*) as cnt from comment_free where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();

		if(empty($row['cnt'])) { //맞는 결과가 없을 경우 종료
?>
			<script>
				alert('Password Incorrect');
				history.back();
			</script>
<?php
			exit;
		}

		$sql = 'update comment_free set co_content = "' . $coContent . '" where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;

	} else if($w === 'd') { //삭제
		$msg = 'Delete';
		$sql = 'select count(*) as cnt from comment_free where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;

		$result = $db->query($sql);
		$row = $result->fetch_assoc();

		if(empty($row['cnt'])) { //맞는 결과가 없을 경우 종료
?>
			<script>
				alert('Password Incorrect');
				history.back();
			</script>
<?php
			exit;
		}
		$sql = 'delete from comment_free where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;

	} else {
?>
		<script>
			alert('Please Use Regular Path');
			history.back();
		</script>
<?php
		exit;
	}

	$result = $db->query($sql);
	if($result) {
?>
		<script>
			alert('comment successfully <?php echo $msg?>d');
			location.replace("./view.php?bno=<?php echo $bNo?>");
		</script>
<?php
	} else {
?>
		<script>
			alert('comment <?php echo $msg?>ed failed');
			history.back();
		</script>
<?php
		exit;
	}

?>
