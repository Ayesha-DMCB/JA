    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Department </h1>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-5 col-lg-5">
			    <form id="addDept" class="form2" method="post" style="margin:0px;">
					<div class="field">
						<div class="labelN">Branch </div>
						<div class="control">
							<select name="branch" required="required">
							    <option value="">Select --</option>
								<?php 
								  $br_q = $cls_branchName->slct_branch();
								  while($view_br= $br_q->fetch_assoc()){
								?>
								<option value="<?php echo $view_br['branchName']; ?>" ><?php echo $view_br['branchName']; ?></option>
								<?php }?>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="labelN">Department </div>
						<div class="control">
							<input type="text" name="dept_name" required="required"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="add_dept"> 
					
					<div class="field">
					   <div class="labelN"></div>
					   <div class="control">
						 <input type="submit" name="submit_btn" value="Save">
					   </div>
					</div>
			    </form>
		    </div>
			<div class="col-lg-1"></div>
			<div class="col-md-6 col-lg-6">
				<table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Sl. No.</th>
						<th>Branch</th>
						<th>Department</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					
					<?php
						$j = 1;
						$row_q = $cls_deptName->slct_dept();
						while($view_act= $row_q->fetch_assoc()){
					?>
					
					<tr>
						<td align="center"><?php echo $j; ?></td>
						<td style="text-align:left"><?php echo $view_act['branch']; ?></td>
						<td style="text-align:left"><?php echo $view_act['dept_name']; ?></td>
						<td align="center"> <span style="color:#00238C;" onclick="edit_popup('<?php echo "$view_act[id]";?>' , '<?php echo "$view_act[branch]";?>', '<?php echo "$view_act[dept_name]";?>')"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:18px"></i></span> </td>
						<td align="center" onclick="delete_dept('<?php echo "$view_act[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:18px"></i> </span> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
				<div id="popOpen">
				   <div id="closeDiv"> <a href="#" class="close agree"> ( CLOSE )</a> </div>
				   <br> <br>
				    <form id="editDept" class="form2" method="post" style="margin:0px;">
						<div class="field">
							<div class="labelN">Branch</div>
							<div class="control">
								<input type="hidden" name="uid" id="uid"> 
								<select name="branch" id="branch">
									<option value="">Select --</option>
									<?php 
									  $br_q = $cls_branchName->slct_branch();
									  while($view_br= $br_q->fetch_assoc()){
									?>
									<option value="<?php echo $view_br['branchName']; ?>"><?php echo $view_br['branchName']; ?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div class="field">
							<div class="labelN">Department</div>
							<div class="control">
								<input type="text" name="dept_name" id="dept_name"> 
							</div>
						</div>
						<input type="hidden" name="identyKey" value="edit_dept"> 
						
						<div class="field">
						   <div class="labelN"></div>
						   <div class="control">
							 <input type="submit" name="submit_btn" value="Save">
						   </div>
						</div>
			        </form>
				</div>
		    </div>
			<script>
				$('.close').click(function (e) {
				   e.preventDefault();
				   $('#popOpen').hide();
				});			
			    function edit_popup(id, br, dept){
				    $("#popOpen").show();
					$("#branch option:selected").text(br);
				    $("#dept_name").val(dept);
				    $("#uid").val(id);
				}
			</script>
		</div>
    <?php include('include/footer.php'); ?>