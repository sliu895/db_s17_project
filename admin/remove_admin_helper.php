<?php
session_start();
require_once('../db_conn.php');

$db =DbUtil::create();
$stmt = $db->prepare("UPDATE Constituent SET is_admin='0' WHERE username=?");

if(!$stmt){
	echo $db->error;
}

$stmt->bind_param("s", $username);

foreach($_POST['remove_user'] as $username){
	if(!$stmt->execute()){
    	echo $stmt->error;
	}
}

header("Location: staff_users.php");
?>