<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ゲラ格納</title>
<head>
<body>
    <?php
    include 'config.php';  
    $st_number = $_GET['number'];
	$st_issue = $_GET['issue'];
	$st_status = $_GET['status'];
    $st_place = $_GET['place'];
        
	if ($st_place == 2 || $st_place == 0) {
		$st_place = 1;
        $receive = 1;
        $send = 2;
	}else{
		$st_place = 2;
        $receive = 2;
        $send = 1;
	}

	print('<p>'.$place[$receive]."御中<br>\n");
	print("お世話になっております。\n");
	print($st_issue.'の'.$status[++$st_status]."原稿を入れましたので、ご確認ください。作業よろしくお願いします。</p>\n");
	print('<div align="right">'.$place[$send].'</div>');
    
    exec("/usr/bin/php ./mail_send_article.php $receive $place[$receive] $place[$send] $st_issue $status[$st_status] > /dev/null &");

    print('<p><a href="issue_manage.php">記事管理ページ</a>に戻る</p>');
	try {
        $dbh = new PDO($dsn, $user, $password);
        $sql = "update article set status=:st_status,place=:st_place where number=:st_number";
	    $stmt = $dbh->prepare($sql);
	    $stmt->bindParam(':st_number', $st_number);
	    $stmt->bindParam(':st_status', $st_status);
	    $stmt->bindParam(':st_place', $st_place);
	    $stmt->execute();
       }catch (PDOException $e){
           print('Error:'.$e->getMessage());
           die();
       }

       $dbh = null;
    ?>
</body>
</html>