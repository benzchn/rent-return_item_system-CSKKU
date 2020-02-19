<?php

require_once 'core.php';

		$sql = "SELECT * FROM news_ad";
		//use for MySQLi-OOP
		$query = $connect->query($sql);
		while($row = $query->fetch_assoc()){

			if($row['news_status']== 1){
           echo     " <ul>
	                <li>".$row['news_date']." / ".$row['news_detail']."&nbsp;&nbsp;<a href='php_action/removeNews.php?deleteNews=".$row['news_id']."' alt='ลบ'><i class='glyphicon glyphicon-remove' alt='ลบ'></i></a></li>
					</ul>";
        }
}
?>