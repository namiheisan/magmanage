<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>記事登録</title>
<head>
<body>
<h3>今号の記事を登録してください</h3>
<form action="add_issue_db.php" method="get">
    <p><label>記事名：
    <select name="number">
    <?php
        include 'config.php';  
        try {
           $dbh = new PDO($dsn, $user, $password);
           $sql = 'select * from article order by number';
           foreach ($dbh->query($sql) as $row) {
               print('<option value="'.$row['number'].'">'.$row['issue'].'</option>');
           }
       }catch (PDOException $e){
           print('Error:'.$e->getMessage());
           die();
       }

       $dbh = null;
    
    print('</select>');
    print('<p><label>担当者：');
    print('<select name="charge">');
    print('<option value="1">'.$charge[1].'</option>');
    print('<option value="2">'.$charge[2].'</option>');
    ?>
    </select>    
    </label></p>
    <p><label>ページ数：
    <input type="text" name="page">
    </label></p>
	<input type="submit" value="追加">
</form>
</body>
</html>
