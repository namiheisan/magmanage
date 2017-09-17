<?php
        include '../config.php';  
        $add_number = $_GET['number'];
	    $add_issue = $_GET['issue'];
        try {
            $dbh = new PDO($dsn, $user, $password);
	        $sql = "insert into article values(0,:add_number,:add_issue,0,0,0,0)";
	        $stmt = $dbh->prepare($sql);
	        $stmt->bindParam(':add_number', $add_number);
	        $stmt->bindParam(':add_issue', $add_issue);
	        $stmt->execute();
        }catch (PDOException $e){
                        print('Error:'.$e->getMessage());
                        die();
        }

$dbh = null;

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
http_response_code( 301 ) ;
header( "Location: issue_ctrl.php" ) ;
exit ;
    
?>
