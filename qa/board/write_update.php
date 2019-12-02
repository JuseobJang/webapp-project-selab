<?php
	require_once("../dbconfig.php");

	//$_POST['bno']이 있을 때만 $bno 선언
	if(isset($_POST['bno'])) {
		$bNo = $_POST['bno'];
	}
	
	//bno이 없다면(글 쓰기라면) 변수 선언
	if(empty($bNo)) {
		$bID = $_POST['bID'];
		$date = date('Y-m-d H:i:s',strtotime("+9 hours"));
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

	$query1 = 'select b_no from board_free';
	$result1 = $db -> query($query1);

	if($result1 > 0){
		$prev = 'select max(b_no) from board_free';
		$a = $db -> query($prev);  
		
		$row = mysqli_fetch_row($a);
		$b = $row[0] + 1;
	}
	else{
		$b = 1;
	}
	$usid = $_POST['UserId'];

	$sql = 'insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id, b_password, userid) values("'.$b.'", "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '", password("' . $bPassword . '"), "'.$usid.'")';

	$msgState = '등록';
	if(empty($bID)){
		?>
		<script>
			alert("아이디를 입력해주세요");
			history.back();
		</script>

		<?php
		exit;
	}

	if(empty($bPassword)){
		?>
		<script>
			alert("비밀번호을 입력해주세요");
			history.back();
		</script>
		<?php
		exit;
	}

	if(empty($bTitle)){
		?>
		<script>
			alert("제목을 입력해주세요");
			history.back();
		</script>
		<?php
		exit;
	}

}

//메시지가 없다면 (오류가 없다면)
if(empty($msg)) {
	$result = $db->query($sql);

	//쿼리가 정상 실행 됐다면,
	if($result) {
		$msg = '글이 ' . $msgState .' 되었습니다.';
		if(empty($bNo)) {
			$bNo = $db->insert_id;
		}
		$replaceURL = './view.php?bno=' . $bNo;
	} else {
		$msg = '글 ' . $msgState . '이 취소되었습니다.';
?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
		exit;
	}
}

$a = $_POST['UserId'];
?>

<form action="./myquestion.php" method="post">
	<button type = "submit">
		<input type="hidden" name="UserId" value="<?php echo $a?>" ;?/>
	</button>
</form>



<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>