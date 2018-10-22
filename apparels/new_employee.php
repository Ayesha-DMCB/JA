    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">New Employee</h1>
            <ul class="breadcrumb">
				<li><a href="">Manage Employee</a> </li>
            </ul>
        </div>
        <div class="main-content">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#employee" data-toggle="tab">Employee</a></li>
		  <li><a href="#emp_list" data-toggle="tab">Manage Employee </a></li>
		</ul>

		<div class="row">
		  <div class="col-md-12">
			<br>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="employee">
			        <form id="addEmployee" enctype="multipart/form-data" class="form2" method="post" style="margin:0px;">
                        <div class="col-md-6">
							<div class="field">
								<div class="labelN">Joining Date  <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<input type="text" name="JoinDate" value="<?php echo $post_date; ?>" class="dateALLPic" tabindex="1" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Factory Name <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<select name="FactoryCode" id="FactoryCode" tabindex="2" required>
									    <option value="">Select--</option>
										<?php 
										  $fact_q = $cls_factReg->slct_FactReg();
										  while($view_fact= $fact_q->fetch_assoc()){
										?>
										<option value="<?php echo $view_fact['FactoryCode']; ?>" ><?php echo $view_fact['FactoryName']; ?></option>
									    <?php }?>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Staff ID <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="hidden" name="fgd" id="sd" value="<?php echo $cls_empInfo->staff_id(); ?>">
									<input type="text" name="StaffIDNO" onfocus="staffId()" readonly tabindex="3">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Staff Name <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="StaffName" tabindex="4" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Gender  <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<select name="Sex" tabindex="5" required>
										<option value="">Select--</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Father Name <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="FName" tabindex="6" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Mother Name </div>
								<div class="control">
									<input type="text" name="MName" tabindex="7">
								</div>
							</div>
							<div class="field">
								<div class="labelN">NID <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<input type="text" name="NID" tabindex="8" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Mobile No. <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<input type="text" name="Tel" tabindex="9" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Emergency Contact <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<input type="text" name="EmergContact" tabindex="10" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">E-mail <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="eMail" tabindex="11" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Marital Status <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<select name="MaritalStatus" tabindex="12" required>
										<option value="">Select--</option>
										<option value="Married">Married</option>
										<option value="Single">Single</option>
										<option value="Others">Others</option>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Spouse Name </div>
								<div class="control">
									<input type="text" name="SpouseName" tabindex="13">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Blood Group <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<select name="BloodGroup" tabindex="14" required>
									  <option value="A+ (ve)">A+ (ve)</option>
									  <option value="A- (ve)">A- (ve)</option>
									  <option value="B+ (ve)">B+ (ve)</option>
									  <option value="B- (ve)">B- (ve)</option>
									  <option value="O+ (ve)">O+ (ve)</option>
									  <option value="O- (ve)">O- (ve)</option>
									  <option value="AB+ (ve)">AB+ (ve)</option>
									  <option value="AB- (ve)">AB- (ve)</option>
									</select>
								</div>
							</div>
						   <div class="field">
								<div class="labelN">Present Address <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="PreAddress" value="Same as Parmanent Address" tabindex="15" required> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Permanent Address <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<textarea name="PerAddress" tabindex="16" required></textarea>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">    
							<div class="field">
								<div class="labelN">District <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
								    <select name="District" onchange="slctDist(this.value)" tabindex="17" required>
										<option value="">Select</option>
										<?php 
										  $dist_q = $cls_disUpazila->divisions_list();
										  while($view_dist= $dist_q->fetch_assoc()){
										?>
										<option value="<?php echo $view_dist['id']; ?>" ><?php echo $view_dist['name']; ?></option>
										<?php }?>
								    </select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Upazila <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<select name="PS" id="per_thana" tabindex="18" required>
									  <option value="">Select</option>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Post Code </div>
								<div class="control">
									<input type="text" name="PostCode" tabindex="19">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Country </div>
								<div class="control">
									<input type="text" name="Country" value="Bangladesh" tabindex="20">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Religion </div>
								<div class="control">
									<input type="text" name="Religion" tabindex="21">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Date-Of-Birth <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="DateOfBirth" class="dateALLPic" tabindex="22" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Weight </div>
								<div class="control">
									<input type="text" name="Weight" tabindex="23">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Height </div>
								<div class="control">
									<input type="text" name="Height" tabindex="24">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Employee Status <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<select name="EmpStatus" tabindex="26" required>
									   <option value="Active">Active</option>
									   <option value="In-Active">In-Active</option>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Designation <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<input type="text" name="Designation" tabindex="27" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Holding Position </div>
								<div class="control">
									<input type="text" name="HoldingPosition" tabindex="28">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Resign Date </div>
								<div class="control">
									<input type="text" name="ResignDate" class="dateALLPic" tabindex="29">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Job Status <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i></div>
								<div class="control">
									<select name="JobStatus" tabindex="30" required>
									   <option value="">Select--</option>
									   <option value="Probation">Probation</option>
									   <option value="Probation">Temporary</option>
									   <option value="Part-time">Part-time</option>
									   <option value="Permanent">Permanent</option>
									   <option value="contractual">Contractual</option>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Length Of Service </div>
								<div class="control">
									<input type="text" name="LenOfService" tabindex="31">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Reference </div>
								<div class="control">
									<textarea name="Reference" tabindex="32"></textarea>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Photo Upload </div>
								<div class="control">
									<input type="file" name="fileImg" accept="image/*">
								</div>
							</div>
							<input type="hidden" name="identyKey" value="newEmployee"> 
						
							<div class="field">
							   <div class="labelN"></div>
							   <div class="control">
								 <input type="submit" name="submit_form" value="Save" tabindex="33">
							   </div>
							</div>
						</div>
						
				   </form>
				</div>
				<div class="tab-pane fade" id="emp_list">
				    <table class="table1" border="1">
						<tr style="height:30px;color:black;">
							<th>Sl. No.</th>
							<th>Joined Date</th>
							<th>Staff ID</th>
							<th>Staff Name </th>
							<th>Factory Name</th>
							<th>Mobile</th>
							<th>E-mail</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						
						<?php
							$j = 1;
							$row_q = $cls_empInfo->staff_list();
							while($view_row= $row_q->fetch_assoc()){
						?>
						
						<tr>
							<td><?php echo $j; ?></td>
							<td><?php echo $view_row['JoinDate']; ?></td>
							<td><?php echo $view_row['StaffIDNO']; ?></td>
							<td><?php echo $view_row['StaffName']; ?></td>
							<td><?php echo $view_row['FactoryCode']; ?></td>
							<td><?php echo $view_row['Tel']; ?></td>
							<td><?php echo $view_row['eMail']; ?></td>
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
                function staffId(){
					//var FactoryCode = $("input[name=FactoryCode]").val();
					var FactoryCode = $( "#FactoryCode option:selected" ).val();
					var fgd = $("input[name=fgd]").val();
					var res = FactoryCode+"-"+fgd;

					$("input[name=StaffIDNO]").val(res);	
				}
			</script>
		  </div>
		</div>

    <?php include('include/footer.php'); ?>