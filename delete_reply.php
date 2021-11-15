<!-- 댓글 삭제 -->
<?php include "connect.php";

$idx = $_GET['idx'];
$sql = dbQuery("delete from reply where idx='$idx';");
$board_idx = $_GET['bIdx'];
// 댓글 삭제 후 원래 댓글이 있던 게시물로 돌아가기
$sql2 = dbQuery("select * from board where idx='" . $board_idx . "'");
$board = $sql2->fetch_array();
?>
<script type="text/javascript">
    alert("댓글이 삭제되었습니다.");
    location.href = "./read.php?idx=<?php echo $board['idx']; ?>";
</script>