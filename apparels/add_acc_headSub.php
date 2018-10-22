    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Accounts Sub-Head</h1>
			<ul class="breadcrumb">
				<li><a href="manage_acc_subHead"> <i class="fa fa-list" aria-hidden="true"></i> Sub-Account List </a> </li>
            </ul>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-6 col-lg-6">
				<form id="insert_accHeadSub" class="form2" method="post" style="margin:0px;">
					<div class="field">
						<div class="labelN">Account Head </div>
						<div class="control">
							<select name="acc_head" id="acc_head" onchange="headcode(this.value)" required="required" >
							   <option value="">Select Acc Head</option>
							   <?php 
								$room_q = $cls_accHead->slct_accHead();
								while($view_r= $room_q->fetch_assoc()){
							   ?>
							   <option value="<?php echo $view_r['acc_headCode']; ?>" ><?php echo $view_r['acc_headName']; ?></option>
							   <?php }?>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="labelN">Sub Account Code</div>
						<div class="control">
							<input type="text" name="acc_subHead_code" id="acc_subHead_code" required="required"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Sub Account Name</div>
						<div class="control">
							<input type="text" name="acc_subHead_name" required="required"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="add_acc_headSub"> 
					
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