    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Accounts sub-sub Head</h1>
			<ul class="breadcrumb">
				<li><a href="man_acc_subSub"> <i class="fa fa-list" aria-hidden="true"></i> Account sub-sub Head List </a> </li>
            </ul>
        </div>
        <div class="main-content">
			<div class="row">
				<div class="col-md-6 col-lg-6">
					<form id="insert_accHeadSubS" class="form2" method="post" style="margin:0px;">
						<div class="field">
							<div class="labelN">Sub Head</div>
							<div class="control">
							    <select name="acc_subHead" id="acc_subHead" required="required" onchange="headcodeS(this.value)">
								   <option value="">Select Sub Head</option>
								   <?php 
								    $room_q = $cls_accHeadSub->slct_accHeadSub();
									while($view_r= $room_q->fetch_assoc()){
								   ?>
								   <option value="<?php echo $view_r['acc_subHead_code']; ?>" ><?php echo $view_r['acc_subHead_name']; ?></option>
								   <?php }?>
								</select>
							</div>
						</div>
						<div class="field">
							<div class="labelN">Sub-Sub Acc Code </div>
							<div class="control">
							    <input type="text" name="acc_subSub_Code" id="acc_subSub_Code" required="required"> 
							</div>
						</div>
						<div class="field">
							<div class="labelN">Sub-Sub Acc Name</div>
							<div class="control">
							    <input type="text" name="acc_subSub_name" required="required"> 
							</div>
						</div>
						<input type="hidden" name="identyKey" value="add_accHeadSSub"> 
						
					    <div class="field">
						   <div class="labelN"></div>
						   <div class="control">
						     <input type="submit" name="submit_form" value="Save">
						   </div>
					    </div>
				   </form>
				</div>
			</div>
    <?php include('include/footer.php'); ?>