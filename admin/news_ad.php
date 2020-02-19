<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">หน้าแรก</a></li>		  
		  <li class="active">ประกาศข่าวสาร</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> ประกาศข่าวสาร</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">



<form action="php_action/createNews.php" method="POST" role="form">
    <legend></legend>

    <div class="form-group">
        <label for="">ข้อความ</label>
        <textarea type="text" class="form-control" id="newsMessage" name="newsMessage" placeholder="ใส่ข้อความที่จะประกาศ" required></textarea>
    </div>
    <div class="form-group">
        <label for="">เลือกวันที่ประกาศ</label>
        <input type="date" class="form-control" id="newsDate" name="newsDate" required></textarea>
    </div>
    <!-- <div class="form-group">
	        	<label for="newsState" class="col-sm-3 control-label">สถานะ </label>
				    <div >
				      <select class="form-control" id="newsState" name="newsState">
				      	<option value="">~~เลือก~~</option>
				      	<option value="1">ใช้งาน</option>
				      	<option value="2">ไม่ใช้งาน</option>
				      </select>
				    </div>
            </div>   -->
            
           
    <button type="submit" name="submit" id="submit" class="btn btn-primary">ประกาศ</button>
</form>

</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="row">
	<div class="col-md-12">

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> ข่าวสารที่กำลังประกาศ</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

			<div class="remove-messages"></div>
			
           <?php require_once 'php_action/fetchNews.php'; ?>


            </div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<?php require_once 'includes/footer.php'; ?>