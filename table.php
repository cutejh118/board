<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="./table.css" />
</head>
<body>
    <div id="board">
        <h1>자유게시판</h1>
        <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
        <table class="list_table">
            <tr id="list_header"><!--첫번째 줄 시작-->
                <th width="70">번호</th><!--첫번째 칸-->
                <th width="500">제목</th>
                <th width="100">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
            <!--board_db라는 데이터베이스에서 board 테이블에 들어있는 모든 값을 가져와서 실제로 띄워주기-->
            <?php
            $result = dbQuery("select * from board order by idx");
            while($board = $result->fetch_array()){
                $sql2 =dbQuery("select * from reply where post_num='".$board['idx']."'");
                $reply_num = mysqli_num_rows($sql2);
            ?>
                <tr id="list_header">
                    <td width="70"><?php echo $board['idx']?></td>
                    <td width="500"><a href="./read.php?idx=<?php echo $board['idx'] ?>"><?php echo $board['title']?></a><span>[<?php echo $reply_num; ?>]</span></td>
                    <td width="100"><?php echo $board['name']?></td>
                    <td width="100"><?php echo $board['date']?></td>
                    <td width="100"><?php echo $board['hit']?></td>
                </tr>
            <?php } ?>
            </table> 
            <div id="write_btn">
            <a href="./write.php"><button>글쓰기</button></a>
            </div>   
    </div>
    
</body>
</html>