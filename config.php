<?php
    
    $dsn = 'pgsql:dbname=magdb host=localhost port=5432';
    $user = 'username';
    $password = 'password';

    $status = array('出稿前', '出稿', '第1校', '第1校戻し', '第2校', '第2校戻し', '第3校', '第3校戻し', '第4校', '第4校戻し', '第5校', '第5校戻し', '第6校', '第6校戻し', '第7校', '第7校戻し', '第8校', '第8校戻し', '第9校', '第9校戻し', '第10校', '第10校戻し');
	$charge = array('－', '青木', '山田');
	$place = array('－', 'A制作', 'B出版');
    $sum = 0;
    
    $editor_address = 'editor_address';
    $production_address = 'production_address';
    $magazine = 'magazine_name';
    
    $gmail_address = 'gmail_address';
    $gmail_password = 'gmail_password';

?>
