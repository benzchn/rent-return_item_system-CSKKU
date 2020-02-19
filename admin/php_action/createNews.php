<?php

require_once 'core.php';

// $valid['success'] = array('success' => false, 'messages' => array());

if(isset($_POST['submit'])){
	$newsMessage = $_POST['newsMessage'];
	$newsDate = $_POST['newsDate'];


	$sql = "INSERT INTO news_ad (news_detail, news_date, news_status) VALUES ('$newsMessage', '$newsDate', 1)";

	if($connect->query($sql)){
        echo "<script>if(confirm('ลงประกาศข่าวสารแล้ว !!')){document.location.href='../news_ad.php'};</script>";
	} else {
	 	echo "<script>if(confirm('ลงประกาศข่าวสารไม่สำเร็จ กรุณากรอกใหม่ !!')){document.location.href='../news_ad.php'};</script>";
	}
	 
 
} // /if $_POST
?>