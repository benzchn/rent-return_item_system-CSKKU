<?php
require_once 'core.php';

		$sql = "SELECT * FROM news_ad";
		//use for MySQLi-OOP
		$query = $connect->query($sql);
		while($row = $query->fetch_assoc()){

			if($row['news_status']== 1){
           echo     " <ul>
	                <h4><li>".$row['news_date']." / ".$row['news_detail']."&nbsp;&nbsp;&nbsp;<img src='http://oxygen.readyplanet.com/images/column_1303576852/icon0002.gif' /></li></h4>
                    </ul>";
		}
	}

?>