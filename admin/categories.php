<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">หน้าแรก</a></li>		  
		  <li class="active">ประเภทอุปกรณ์และเครื่องมือ</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> จัดการประเภทอุปกรณ์และเครื่องมือ</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" id="addCategoriesModalBtn" data-target="#addCategoriesModal"> <i class="glyphicon glyphicon-plus-sign"></i> เพื่มประเภทอุปกรณ์และเครื่องมือ </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageCategoriesTable">
					<thead>
						<tr>
							<th>รหัสประเภท</th>				
							<th>ชื่อประเภท</th>
							<th>สถานะ</th>
							<th style="width:15%;">ตัวเลือก</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->


<!-- add categories -->
<div class="modal fade" id="addCategoriesModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    	<form class="form-horizontal" id="submitCategoriesForm" action="php_action/createCategories.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> เพิ่ม ประเภทอุปกรณ์และเครื่องมือ</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-categories-messages"></div>

	        <div class="form-group">
	        	<label for="categoriesName" class="col-sm-4 control-label">รหัสประเภท </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="categoriesCode" placeholder="รหัสประเภท" name="categoriesCode" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
			<div class="form-group">
	        	<label for="categoriesName" class="col-sm-4 control-label">ชื่อประเภท </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="categoriesName" placeholder="ชื่อประเภท" name="categoriesName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="categoriesStatus" class="col-sm-4 control-label">สถานะ </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-7">
				      <select class="form-control" id="categoriesStatus" name="categoriesStatus">
				      	<option value="">~~เลือก~~</option>
				      	<option value="1">ใช้งาน</option>
				      	<option value="2">ไม่ใช้งาน</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	         	        
	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" id="clostAddCate" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> ปิด</button>
	        
	        <button type="submit" class="btn btn-primary" id="createCategoriesBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> บันทึก</button>
	      </div> <!-- /modal-footer -->	      
     	</form> <!-- /.form -->	     
    </div> <!-- /modal-content -->    
  </div> <!-- /modal-dailog -->
</div> 
<!-- /add categories -->


<!-- edit categories brand -->
<div class="modal fade" id="editCategoriesModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editCategoriesForm" action="php_action/editCategories.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i>แก้ไขประเภทอุปกรณ์และเครื่องมือ</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-categories-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-categories-result">

			  <div class="form-group">
		        	<label for="editCategoriesCode" class="col-sm-4 control-label">รหัสประเภท</label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editCategoriesCode" placeholder="รหัสประเภท" name="editCategoriesCode" autocomplete="off">
					    </div>
		        </div> 
						
		      	<div class="form-group">
		        	<label for="editCategoriesName" class="col-sm-4 control-label">ชื่อประเภท</label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <input type="text" class="form-control" id="editCategoriesName" placeholder="ชื่อประเภท" name="editCategoriesName" autocomplete="off">
					    </div>
		        </div>

		        <div class="form-group">
		        	<label for="editCategoriesStatus" class="col-sm-4 control-label">สถานะ </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-7">
					      <select class="form-control" id="editCategoriesStatus" name="editCategoriesStatus">
					      	<option value="">~~เลือก~~</option>
					      	<option value="1">ใช้งาน</option>
					      	<option value="2">ไม่ใช้งาน</option>
					      </select>
					    </div>
		        </div> 
				
		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editCategoriesFooter">
	        <button type="button" id="clostEditModal" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> ปิด</button>
	        
	        <button type="submit" class="btn btn-success" id="editCategoriesBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> บันทึก</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- /categories brand -->

<!-- categories brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeCategoriesModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> ลบ ประเภทอุปกรณ์และเครื่องมือ</h4>
      </div>
      <div class="modal-body">
        <p>คุณแน่ใจว่าจะลบ ?</p>
      </div>
      <div class="modal-footer removeCategoriesFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> ปิด</button>
        <button type="button" class="btn btn-primary" id="removeCategoriesBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> ยืนยัน</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /categories brand -->


<script src="custom/js/categories.js"></script>

<?php require_once 'includes/footer.php'; ?>