<?php
    mb_language("japanese");
    mb_internal_encoding("UTF-8");
    require 'PHPMailer/PHPMailerAutoload.php';
    include 'config.php';

    $mail_issue = $argv[1];
    
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->Encoding = "7bit";
    $mailer->CharSet = '"iso-2022-jp"';

    $mailer->Host = 'smtp.gmail.com';
    $mailer->Port = 587;
    $mailer->SMTPAuth = TRUE;
    $mailer->SMTPSecure = "tls";
    $mailer->Username = $gmail_address;
    $mailer->Password = $gmail_password;
    $mailer->From     = $editor_address;
    $mailer->FromName = mb_encode_mimeheader(mb_convert_encoding($mail_sender,"JIS","UTF-8"));
    $mailer->Subject  = mb_encode_mimeheader(mb_convert_encoding('【'.$magazine.'】'.$mail_issue.'校了',"JIS","UTF-8"));
    $mailer->Body     = mb_convert_encoding($place[1]." 御中\n".$mail_issue."は校了でお願いいたします。　".$place[2],"JIS","UTF-8");
    $mailer->AddAddress($production_address); 

    if($mailer->Send()){
        print("メールを送信しました");
    }
    else{
        print("エラー ".$mailer->ErrorInfo);
    }
?>