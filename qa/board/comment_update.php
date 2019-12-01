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
		$msg = '작성';
		
		// $sql = "insert into comment_free (b_no,co_no,co_content,co_id,co_password) values ('$bNo','$coNo','$coContent','$coId','$coPassword')";
		$sql = 'insert into comment_free values(null, ' .$bNo . ', ' . $coNo . ', "' . $coContent . '", "' . $coId . '", password("'. $coPassword .'"),null,null)';

		if(empty($coId)){
			?>
			<script>
				alert("아이디를 입력해주세요")
				history.back();
			</script>
		<?php	
			exit;
		}
		if(empty($coPassword)){
			?>
			<script>
				alert("비밀번호를 입력해주세요")
				history.back();
			</script>
		<?php	
			exit;
		}
		if(empty($coContent)){
			?>
			<script>
				alert("내용을 입력해주세요")
				history.back();
			</script>
		<?php	
			exit;
		}
		
		if(empty($w)) { //$w 변수가 비어있는경우
			$result = $db->query($sql);

			$coNo = $db->insert_id;
			$sql = 'update comment_free set co_order = co_no where co_no = ' . $coNo;
		}

	} else if($w === 'u') { // 작성
		$msg = '수정';

		$sql = 'select count(*) as cnt from comment_free where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;
		$result = $db->query($sql);
		$row = $result->fetch_assoc();

		if(empty($row['cnt'])) { //맞는 결과가 없을 경우 종료
?>
			<script>
				alert('비밀번호가 다릅니다.');
				history.back();
			</script>
<?php
			exit;
		}

		$sql = 'update comment_free set co_content = "' . $coContent . '" where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;

	} else if($w === 'd') { //삭제
		$msg = '삭제';
		$sql = 'select count(*) as cnt from comment_free where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;

		$result = $db->query($sql);
		$row = $result->fetch_assoc();

		if(empty($row['cnt'])) { //맞는 결과가 없을 경우 종료
?>
			<script>
				alert('비밀번호가 다릅니다.');
				history.back();
			</script>
<?php
			exit;
		}
		$sql = 'delete from comment_free where co_password=password("' . $coPassword . '") and co_no = ' . $coNo;

	} else {
?>
		<script>
			alert('정상적인 경로를 이용해주세요.');
			history.back();
		</script>
<?php
		exit;
	}

	$result = $db->query($sql);
	if($result) {
?>
		<script>
			alert('댓글 <?php echo $msg?> 되었습니다.');
			location.replace("./view.php?bno=<?php echo $bNo?>");
		</script>
<?php
	} else {
?>
		<script>
			alert('댓글 <?php echo $msg?>에 실패했습니다.');
			history.back();
		</script>
<?php
		exit;
	}

?>