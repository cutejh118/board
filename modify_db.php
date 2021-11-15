<?php include "./connect.php";

$idx = $_GET['idx'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];

$sql = dbQuery("update board set name='" . $username . "',pw='" . $userpw . "',title='" . $title . "',content='" . $content . "' where idx='" . $idx . "'"); 

?>


<script type="text/javascript">
    alert("수정되었습니다.");
    location.href = './read.php?idx=<?php echo $idx; ?>';


</script>






