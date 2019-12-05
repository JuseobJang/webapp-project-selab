<?php
	require_once("../dbconfig.php");

	//$_POST['bno']이 있을 때만 $bno 선언
	if(isset($_POST['bno'])) {
		$bNo = $_POST['bno'];
	}

	$bPassword = $_POST['bPassword'];

//글 삭제
if(isset($bNo)) {
	//삭제 할 글의 비밀번호가 입력된 비밀번호와 맞는지 확인
	$sql = 'select count(b_password) as cnt from board_free where b_password=password("' . $bPassword . '") and b_no = ' . $bNo;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();

	//비밀번호가 맞다면 삭제 쿼리 실행함
	if($row['cnt']) {
		
		$sql = 'delete from board_free where b_no = ' .$bNo;
		$sql1 = 'delete from comment_free where b_no = ' .$bNo;

	//틀리다면 메시지 출력하고 이전화면
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
}
	$num = $bNo;
	$result = $db->query($sql);
	$result1 = $db->query($sql1);
	$dltnum = 'update board_free set b_no = b_no - 1 where '.$num.' < b_no';
	$db->query($dltnum);


//쿼리가 정상 실행 되면
if($result||$result1) {
	$msg = '글이 삭제 되었습니다.';
	$replaceURL = './';
} else {
	$msg = '글이 삭제되지 않았습니다.';
?>
	<script>
		alert("<?php echo $msg?>");
		history.back();
	</script>
<?php
	exit;
}


?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>