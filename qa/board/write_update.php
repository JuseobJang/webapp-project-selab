<?php
	require_once("../dbconfig.php");

	//$_POST['bno']이 있을 때만 $bno 선언
	if(isset($_POST['bno'])) {
		$bNo = $_POST['bno'];
	}

	//bno이 없다면(글 쓰기라면) 변수 선언
	if(empty($bNo)) {
		$bID = $_POST['bID'];
		$date = date('Y-m-d H:i:s');
	}

	//항상 변수 선언
	$bPassword = $_POST['bPassword'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];

//글 수정
if(isset($bNo)) {
	//수정 할 글의 비밀번호가 입력된 비밀번호와 맞는지 체크
	$sql = 'select count(b_password) as cnt from board_free where b_password=password("' . $bPassword . '") and b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();

	//비밀번호가 맞으면 업데이트 쿼리
	if($row['cnt']) {
		$sql = 'update board_free set b_title="' . $bTitle . '", b_content="' . $bContent . '" where b_no = ' . $bNo;
		$msgState = 'Modifi';
	//틀리면 메시지 출력하고 이전화면으로
	} else {
		$msg = 'Password Incorrect';
	?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
	<?php
		exit;
	}

//글 등록
} else {
	$sql = 'insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id, b_password) values(null, "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '", password("' . $bPassword . '"))';
	$msgState = 'Post';
}

//메시지가 없다면 (오류가 없다면)
if(empty($msg)) {
	$result = $db->query($sql);

	//쿼리가 정상 실행 됐다면,
	if($result) {
		$msg = 'Successfully ' . $msgState .'ed';
		if(empty($bNo)) {
			$bNo = $db->insert_id;
		}
		$replaceURL = './view.php?bno=' . $bNo;
	} else {
		$msg = 'Your' . $msgState . 'Rejected';
?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
		exit;
	}
}

?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>
