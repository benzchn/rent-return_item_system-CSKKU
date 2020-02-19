<?php require_once 'include/header.php'; ?>

<section role="main" class="content-body">
				<!-- <section role="main" class="content-body"> -->
					<header class="page-header">
						<h2>รายการอุปกรณ์</h2>
					
					</header>
					<!-- end: page -->
				<!-- </section> -->


				<section class="panel">


				<table id="myTable" class="table table-hover">
					<thead>
					    <tr>
						<th id="th_css">รูปภาพ</th>
						<th id="th_css">หมายเลขอุปกรณ์</th>
						<th id="th_css">รายละเอียด</th>
						<th id="th_css">จำนวน</th>
						<th id="th_css">สถานะ</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include_once('php_action/db_connect.php');
							$sql = "SELECT * FROM product";
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){



								if($row['status'] == 1){
									echo 
								"<tr>
									<td id='td_css'><img class='img-round' src='".$row['product_image']."' style='height:30px; width:50px;'  /></td>
									<td id='td_css'>".$row['brand_id']."".$row['categories_id']."".$row['rate']."</td>
									<td id='td_css'>".$row['product_name']."</td>
									<td id='td_css'>".$row['quantity']."</td>
									<td id='td_css'><label class='label label-success'>ยืมได้</label></td>
								</tr>";	
								}
								// elseif($row['status'] == 2){
								// 	echo 
								// "<tr>
								// 	<td id='td_css'><img class='img-round' src='".$row['product_image']."' style='height:30px; width:50px;'  /></td>
								// 	<td id='td_css'>".$row['brand_id']."".$row['categories_id']."".$row['rate']."</td>
								// 	<td id='td_css'>".$row['product_name']."</td>
								// 	<td id='td_css'>".$row['quantity']."</td>
								// 	<td id='td_css'><label class='label label-danger'>ถูกยืมไป</label></td>
								// </tr>";	
								// }
									// <td>
									// 	<a href='#edit_".$row['order_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> แก้ไข</a>
									// 	<a href='#delete_".$row['order_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> ลบ</a>
									// </td>
							}
							
						?>
					</tbody>
						</table>


				</section>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
							</div>
						</div>
					</div>
				</div>
			</aside>
		</section>
<script src="custom/js/product.js"></script>
<?php require_once 'include/footer.php'; ?>