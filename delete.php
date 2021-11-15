<?php include "connect.php";

$idx = $_GET['idx'];
$sql = dbQuery("delete from board where idx='$idx';");
?>


<script type="text/javascript">
    alert("삭제되었습니다.");
    location.href = './table.php';
</script>

