<?php 	

require_once 'core.php';

$sql = "SELECT brand_id, brand_code, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $activeBrands = ""; 

 while($row = $result->fetch_array()) {
 	$brandId = $row[0];
 	// active 
 	if($row[3] == 1) {
 		// activate member
 		$activeBrands = "<label class='label label-success'>ใช้งาน</label>";
 	} else {
 		// deactivate member
 		$activeBrands = "<label class='label label-danger'>ไม่ใช้งาน</label>";
 	}

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" id="actionGroup" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  แก้ไข/ลบ <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" id="editGroup" data-toggle="modal" data-target="#editBrandModel" onclick="editBrands('.$brandId.')"> <i class="glyphicon glyphicon-edit"></i> แก้ไข</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removeMemberModal" onclick="removeBrands('.$brandId.')"> <i class="glyphicon glyphicon-trash"></i> ลบ</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
		 $row[1],
		 $row[2],		
 		$activeBrands,
 		$button
 		); 	
 } // /while 

} // if num_rows

$connect->close();

echo json_encode($output);