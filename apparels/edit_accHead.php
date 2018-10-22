<?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Edit Accounts Head</h1>
			<ul class="breadcrumb">
				<li><a href="manage_accHead"> <i class="fa fa-list" aria-hidden="true"></i> Account Head List </a> </li>
            </ul>
        </div>
        <div class="main-content">
	    <?php
		  $user_id=$_GET['vid'];
		  $room_q1 = $cls_accHead->update_head($user_id); 
		  $view_r  = $room_q1->fetch_assoc();
		?>
		<div class="row">
		    <div class="col-md-6">
			    <form id="edit_accHead" class="form2" method="post" style="margin:0px;">
					<!--
					<div class="field">
						<div class="labelN">Sl. No.</div>
						<div class="control">
							<input type="text" name="sl_no" value="<?php echo $view_r['sl_no']; ?>"> 
						</div>
					</div>
					-->
					<input type="hidden" name="uid" value="<?php echo $view_r['id']; ?>" >
					<div class="field">
						<div class="labelN">Account Head Code</div>
						<div class="control">
							<input type="text" name="acc_headCode" value="<?php echo $view_r['acc_headCode']; ?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Account Head Name</div>
						<div class="control">
							<input type="text" name="acc_headName" value="<?php echo $view_r['acc_headName']; ?>"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="edit_acc_head"> 
					
					<div class="field">
					   <div class="labelN"></div>
					   <div class="control">
						 <input type="submit" name="submit_accHead" value="Update">
					   </div>
					</div>
			   </form>	
		    </div>
		</div>
    <?php include('include/footer.php'); ?>