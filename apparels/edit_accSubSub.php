    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Edit Accounts sub-sub Head</h1>
			<ul class="breadcrumb">
				<li><a href="man_acc_subSub"> <i class="fa fa-list" aria-hidden="true"></i> Account Head List </a> </li>
            </ul>
        </div>
        <div class="main-content">
			<?php
			  $user_id=$_GET['vid'];
			  $row_q1 = $cls_accHeadSSub->update_headSSub($user_id); 
			  $view_r  = $row_q1->fetch_assoc();
			?>
		<div class="row">
		    <div class="col-md-6 col-lg-6">
				<form id="edit_accHeadSubS" class="form2" method="post" style="margin:0px;">
					
					<input type="hidden" name="uid" value="<?php echo $view_r['id']; ?>" >
					<div class="field">
						<div class="labelN">Sub Sub Head</div>
						<div class="control">
						   <select name="acc_subHead" id="acc_subHead" onchange="headcodeS(this.value)" required="required" >
							   <option value="<?php echo $view_r['acc_subHead']; ?>" ><?php echo $view_r['acc_subHead']; ?></option>
							   <option value="">Select Sub Head</option>
							   <?php 
								$room_q = $cls_accHeadSub->slct_accHeadSub();
								while($view_rr= $room_q->fetch_assoc()){
							   ?>
							   <option value="<?php echo $view_rr['acc_subHead_code']; ?>" ><?php echo $view_rr['acc_subHead_name']; ?></option>
							   <?php }?>
						   </select>
						</div>
					</div>
					<div class="field">
						<div class="labelN">Sub Sub Acc Code  </div>
						<div class="control">
							<input type="text" name="acc_subSub_Code" id="acc_subSub_Code" value="<?php echo $view_r['acc_subSub_Code']; ?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Sub Sub Acc Name</div>
						<div class="control">
							<input type="text" name="acc_subSub_name" value="<?php echo $view_r['acc_subSub_name']; ?>"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="edit_accHeadSSub"> 
					
					<div class="field">
					   <div class="labelN"></div>
					   <div class="control">
						 <input type="submit" name="submit_form" value="Update">
					   </div>
					</div>
			   </form>
		    </div>
		</div>
    <?php include('include/footer.php'); ?>