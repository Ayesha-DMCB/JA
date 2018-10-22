    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Edit Accounts Sub-Head</h1>
			<ul class="breadcrumb">
				<li><a href="manage_acc_subHead"> <i class="fa fa-list" aria-hidden="true"></i> Account Sub-Head List </a> </li>
            </ul>
        </div>
        <div class="main-content">
		<?php
		  $user_id=$_GET['vid'];
		  $row_q1 = $cls_accHeadSub->update_headSub($user_id); 
		  $view_r  = $row_q1->fetch_assoc();
		?>
		<div class="row">
		    <div class="col-md-6 col-lg-6">
				<form id="edit_accHeadSub" class="form2" method="post" style="margin:0px;">
					<input type="hidden" name="uid" value="<?php echo $view_r['id']; ?>" >
					<div class="field">
						<div class="labelN">Account Head </div>
						<div class="control">
							<select name="acc_head" id="acc_head" onchange="headcode(this.value)" required="required" >
							   <option value="<?php echo $view_r['acc_head']; ?>" ><?php echo $view_r['acc_head']; ?></option>
							   <option value="">Select Acc Head--</option>
							   <?php 
								$row_q = $cls_accHead->slct_accHead();
								while($view_h= $row_q->fetch_assoc()){
							   ?>
							   <option value="<?php echo $view_h['acc_headCode']; ?>" ><?php echo $view_h['acc_headName']; ?></option>
							   <?php }?>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="labelN">Sub Account Code </div>
						<div class="control">
							<input type="text" name="acc_subHead_code" id="acc_subHead_code" value="<?php echo $view_r['acc_subHead_code']; ?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Sub Account Name</div>
						<div class="control">
							<input type="text" name="acc_subHead_name" value="<?php echo $view_r['acc_subHead_name']; ?>"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="edit_acc_headSub"> 
					
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