<?php
        include '../config.php';  
        $del_number = $_GET['number'];
        print('「'.$del_number."」番の記事削除が完了しました<br>\n");
	    print('<a href="issue_ctrl.php">記事管理ページ</a>に戻る');
        try {
            $dbh = new PDO($dsn, $user, $password);
	        $sql = "delete from article where number = :del_number";
	        $stmt = $dbh->prepare($sql);
	        $stmt->bindParam(':del_number', $del_number);
	        $stmt->execute();
        }catch (PDOException $e){
                        print('Error:'.$e->getMessage());
                        die();
        }

$dbh = null;

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
http_response_code(301);
header("Location: issue_ctrl.php");
exit ;

?>
