    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Experience</h1>
        </div>
        <div class="main-content">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#experience" data-toggle="tab">Experience</a></li>
		  <li><a href="#manage_exp" data-toggle="tab">Manage Experience </a></li>
		</ul>

		<div class="row">
		  <div class="col-md-12">
			<br>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="experience">
				    <form id="add_experience" class="form2" method="post" style="margin:0px;">
						<div class="col-md-7">
							<div class="field">
								<div class="labelN">Entry Date <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="EntryDate" value="<?php echo $post_date; ?>" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Staff ID <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="StaffIDNO" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Company Name <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="CompanyName" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Company Business </div>
								<div class="control">
									<input type="text" name="CompanyBusiness">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Company Location </div>
								<div class="control">
									<input type="text" name="CompanyLocation">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Department <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="Department" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Position Held <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="PositionHeld" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Area of Experience <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="AreaofExp" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Responsibility </div>
								<div class="control">
									<input type="text" name="Res">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Job Duration <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<input type="text" name="DateFrom" class="dateALLPic" style="width: 48%" placeholder="From-Date" required>
									<input type="text" name="DateTo" class="dateALLPic" style="width: 48%" placeholder="To-Date" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Comments </div>
								<div class="control">
									<textarea name="Comments"></textarea>
								</div>
							</div>
							<input type="hidden" name="identyKey" value="addExper"> 
						
							<div class="field">
							   <div class="labelN"></div>
							   <div class="control">
								 <input type="submit" name="submit_form" value="Save">
							   </div>
							</div>
					    </div>
					</form>
				</div>
				<div class="tab-pane fade" id="manage_exp">
				    <table class="table1" border="1">
						<tr style="height:30px;color:black;">
							<th>Sl. No.</th>
							<th>Joined Date</th>
							<th>Staff ID</th>
							<th>Company Name</th>
							<th>Department</th>
							<th>Position Held</th>
							<th>Area of Exp.</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						
						<?php
							$j = 1;
							$row_q = $cls_empInfo->experi_list();
							while($view_row= $row_q->fetch_assoc()){
						?>
						
						<tr>
							<td><?php echo $j; ?></td>
							<td><?php echo $view_row['EntryDate']; ?></td>
							<td><?php echo $view_row['StaffIDNO']; ?></td>
							<td><?php echo $view_row['CompanyName']; ?></td>
							<td><?php echo $view_row['Department']; ?></td>
							<td><?php echo $view_row['PositionHeld']; ?></td>
							<td><?php echo $view_row['AreaofExp']; ?></td>
							<td align="center"><a href="editThana?vid=<?php echo $view_row['id'];?>" style="text-decoration:none;"> <span style="color:#00238C;"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</span> </a></td>
							<td onclick="del_dist_row('<?php echo "$view_row[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span> </td>
						</tr>
						<?php 
							$j++;
						}
						?>
					</table>  
				</div>
			</div>
			<script> 
				function slctDist(str) {
				  var showUser_http = new XMLHttpRequest();
				  showUser_http.onload = function(){
				  var thana = this.responseText;
				   document.getElementById("per_thana").innerHTML = thana; 
				  }
				  showUser_http.open("POST", "post_url/show_thana.php", false);
				  showUser_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  showUser_http.send('str='+str);
				}
			</script>
		  </div>
		</div>

    <?php include('include/footer.php'); ?>