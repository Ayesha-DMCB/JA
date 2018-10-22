    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Accounts Head</h1>
			<ul class="breadcrumb">
				<li><a href="manage_accHead"> <i class="fa fa-list" aria-hidden="true"></i> Account Head List </a> </li>
            </ul>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-lg-6">
				<form id="insert_accHead" class="form2" method="post" style="margin:0px;">
					<div class="field">
						<div class="labelN">Account Head Code</div>
						<div class="control">
							<input type="text" name="acc_headCode" required="required"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Account Head Name</div>
						<div class="control">
							<input type="text" name="acc_headName" required="required"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="add_acc_head"> 
					
					<div class="field">
					   <div class="labelN"></div>
					   <div class="control">
						 <input type="submit" name="submit_accHead" value="Save">
					   </div>
					</div>
			   </form>
		    </div>
		</div>
    <?php include('include/footer.php'); ?>