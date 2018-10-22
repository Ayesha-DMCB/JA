    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title"> Qualification</h1>
        </div>
        <div class="main-content">
		<ul class="nav nav-tabs"> 
		  <li  class="active"><a href="#qualification" data-toggle="tab">Qualification</a></li>
		  <li><a href="#manage_qua" data-toggle="tab">Manage Qualification </a></li>
		</ul>

		<div class="row">
		  <div class="col-md-12">
			<br>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="qualification">
				    <form id="add_qualification" class="form2" method="post" style="margin:0px;">
						<div class="col-md-7">
							<div class="field">
								<div class="labelN">Entry Date <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="EntryDate" class="dateALLPic" value="<?php echo $post_date; ?>" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Staff ID <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="StaffIDNO" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Qualification </div>
								<div class="control">
									<input type="text" name="Qualification" >
								</div>
							</div>
							<div class="field">
								<div class="labelN">Exam Title <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<select name="ExamTitle" required>
									   <option value="">Select</option>
										<?php 
										  $edu_q = $cls_eduType->slct_eduType();
										  while($view_edu= $edu_q->fetch_assoc()){
										?>
										<option value="<?php echo $view_edu['eduType']; ?>" ><?php echo $view_edu['eduType']; ?></option>
										<?php }?>
									</select>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Major Group <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="MajorGroup" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Institute Name <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="InstName" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Result <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="Result" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Passing Year <i class="fa fa-star" aria-hidden="true" style="font-size:8px;color:red;"></i> </div>
								<div class="control">
									<input type="text" name="YearOfPass" required>
								</div>
							</div>
							<div class="field">
								<div class="labelN">Duration </div>
								<div class="control">
									<input type="text" name="Duration">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Achivement </div>
								<div class="control">
									<input type="text" name="Achivement">
								</div>
							</div>
							<div class="field">
								<div class="labelN">Comments </div>
								<div class="control">
									<textarea name="Comments"></textarea>
								</div>
							</div>
							<input type="hidden" name="identyKey" value="addQuali"> 
						
							<div class="field">
							   <div class="labelN"></div>
							   <div class="control">
								 <input type="submit" name="submit_form" value="Save">
							   </div>
							</div>
					    </div>
					</form>	
				</div>
				<div class="tab-pane fade" id="manage_qua">
				    <table class="table1" border="1">
						<tr style="height:30px;color:black;">
							<th>Sl. No.</th>
							<th>Joined Date</th>
							<th>Staff ID</th>
							<th>Exam Title </th>
							<th>Major Group</th>
							<th>Institute</th>
							<th>Result</th>
							<th>Passing Year</th>
							<th>Duration</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						
						<?php
							$j = 1;
							$row_q = $cls_empInfo->quality_list();
							while($view_row= $row_q->fetch_assoc()){
						?>
						
						<tr>
							<td><?php echo $j; ?></td>
							<td><?php echo $view_row['EntryDate']; ?> </td>
							<td><?php echo $view_row['StaffIDNO']; ?> </td>
							<td><?php echo $view_row['ExamTitle']; ?> </td>
							<td><?php echo $view_row['MajorGroup']; ?> </td>
							<td><?php echo $view_row['InstName']; ?> </td>
							<td><?php echo $view_row['Result']; ?> </td>
							<td><?php echo $view_row['YearOfPass']; ?> </td>
							<td><?php echo $view_row['Duration']; ?> </td>
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
		  </div>
		</div>

    <?php include('include/footer.php'); ?>