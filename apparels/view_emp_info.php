    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title"> Staff Information</h1>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-12">
			<?php
			  $user_id=$_GET['vid'];
			  $que_q = $cls_empInfo->staff_details($user_id); 
			  $view_s = $que_q->fetch_assoc();
			?>
			<script> 
			function PrintDoc(){
				var toPrint = document.getElementById('boxInfo');
				var popupWin = window.open('', '', 'toolbar=yes,scrollbars=yes,resizable=yes,width=800,height=800,location=no,left=200px');
				popupWin.document.open();
				popupWin.document.write('<html><head><title>Staff Information</title> <link rel="stylesheet" type="text/css" href="stylesheets/style-site.css" /></head>');
				popupWin.document.write('<body onload="window.print()"><link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css"><div id="boxInfo" >');
				popupWin.document.write(toPrint.innerHTML);
				popupWin.document.write('</div></body></html>');
				popupWin.document.close();
			}
			</script>
			<button onclick="PrintDoc()" class="btn-srch" style="width:10%;background:#B30000;margin-bottom:5px;float:right;margin-top:0px;"><i class="fa fa-print" aria-hidden="true"></i> Print </button>
			    <style type="text/css">
				.tableL{
				width:100%;	
				}
				.tableL tr td{
				border: 0px solid #ccc;	
				}
				.form2 .labelN{width: 40%;}
				.form2 .control{width: 60%;}
				</style>
				
			    <div class="box_line" id="boxInfo">
			        <span style="font-size:16px;text-transform:uppercase;color:#8C0000;"> Staff Information </span> <hr/>   
			        <form class="form2">
					<table class="tableL" border="0">
					<tr><td style="text-align:left;width:42%" valign="top">
						<div class="col-md-12 col-lg-12">
							<div class="field">
								<div class="labelN">Joining Date  </div>
								<div class="control">
									: <?php echo $view_s['JoinDate']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Factory Name </div>
								<div class="control">
									: <?php echo $view_s['FactoryCode']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Staff ID  </div>
								<div class="control">
									: <?php echo $view_s['StaffIDNO']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Staff Name </div>
								<div class="control">
									: <?php echo $view_s['StaffName']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Gender  </div>
								<div class="control">
									: <?php echo $view_s['Sex']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Father Name </div>
								<div class="control">
									: <?php echo $view_s['FName']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Mother Name </div>
								<div class="control">
									: <?php echo $view_s['MName']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">NID </div>
								<div class="control">
									: <?php echo $view_s['NID']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Mobile No </div>
								<div class="control">
									: <?php echo $view_s['Tel']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Emergency Contact </div>
								<div class="control">
									: <?php echo $view_s['EmergContact']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">E-mail </div>
								<div class="control">
									: <?php echo $view_s['eMail']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Marital Status </div>
								<div class="control">
									: <?php echo $view_s['MaritalStatus']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Spouse Name </div>
								<div class="control">
									: <?php echo $view_s['SpouseName']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Blood Group </div>
								<div class="control">
									: <?php echo $view_s['BloodGroup']; ?> 
								</div>
							</div>
						   <div class="field">
								<div class="labelN">Present Address </div>
								<div class="control">
									: <?php echo $view_s['PreAddress']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Permanent Address </div>
								<div class="control">
									: <?php echo $view_s['PerAddress']; ?> 
								</div>
							</div>
						</div>
					</td>
					<td style="text-align:left;width:42%;" valign="top">
						<div class="col-md-12 col-lg-12">    
							<div class="field">
								<div class="labelN">District </div>
								<div class="control">
									: <?php echo $view_s['dis']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Upazila </div>
								<div class="control">
									: <?php echo $view_s['PS']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Post Code </div>
								<div class="control">
									: <?php echo $view_s['PostCode']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Country </div>
								<div class="control">
									: <?php echo $view_s['Country']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Religion </div>
								<div class="control">
									: <?php echo $view_s['Religion']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Date-Of-Birth </div>
								<div class="control">
									: <?php echo $view_s['DateOfBirth']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Weight </div>
								<div class="control">
									: <?php echo $view_s['Weight']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Height </div>
								<div class="control">
									: <?php echo $view_s['Height']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Employee Status </div>
								<div class="control">
									: <?php echo $view_s['EmpStatus']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Designation </div>
								<div class="control">
									: <?php echo $view_s['Designation']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Holding Position </div>
								<div class="control">
									: <?php echo $view_s['HoldingPosition']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Resign Date </div>
								<div class="control">
									: <?php echo $view_s['ResignDate']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Job Status </div>
								<div class="control">
									: <?php echo $view_s['JobStatus']; ?> 
								</div>
							</div>
							<div class="field">
								<div class="labelN">Length Of Service </div>
								<div class="control">
									: <?php echo $view_s['LenOfService']; ?> 
								</div>
							</div>
							<div class="field" >
								<div class="labelN">Reference </div>
								<div class="control">
									: <?php echo $view_s['Reference']; ?> 
								</div>
							</div>
						</div>
						</form>
					</td>
                    <?php if($view_s['fileImg'] != ''){ ?>
					<td valign="top"> 
						<img src="images/empInfo/<?php echo $view_s['fileImg']; ?>" alt="emp-name" style="width:150px;height:130px;border:2px solid #00698C;"/>
					</td>
                    <?php }else{?>
					<td valign="top"> 
						<img src="images/empInfo/no-img.jpg" alt="emp-name" style="width:150px;height:130px;border:2px solid #00698C;"/>
					</td>
                    <?php }?>
					</tr>
					</table>
					<div class="col-lg-12"> 
					<br/>
					    <span style="font-size:16px;text-transform:uppercase;color:#8C0000;"> Qualification </span> <hr/>  
					    <table class="table1" border="1">
							<tr style="height:30px;color:black;">
								<th>Sl. No.</th>
								<th>Exam Title </th>
								<th>Major Group</th>
								<th>Institute</th>
								<th>Result</th>
								<th>Passing Year</th>
								<th>Duration</th>
								<th>Qualification</th>
								<th>Achivement </th>
							</tr>
							
							<?php
								$j = 1;
								$row_q = $cls_empInfo->qua_details($user_id);
								while($view_q = $row_q->fetch_assoc()){
							?>
							
							<tr>
								<td><?php echo $j; ?></td>
								<td><?php echo $view_q['ExamTitle']; ?></td>
								<td><?php echo $view_q['MajorGroup']; ?></td>
								<td><?php echo $view_q['InstName']; ?></td>
								<td><?php echo $view_q['Result']; ?></td>
								<td><?php echo $view_q['YearOfPass']; ?></td>
								<td><?php echo $view_q['Duration']; ?></td>
								<td><?php echo $view_q['Qualification']; ?></td>
								<td><?php echo $view_q['Achivement']; ?></td>
							</tr>
							<?php 
								$j++;
							}
							?>
						</table> 
					</div>
					
					<div class="col-lg-12"> 
					<br/>
					    <span style="font-size:16px;text-transform:uppercase;color:#8C0000;"> Experience </span> <hr/>  
					    <table class="table1" border="1">
							<tr style="height:30px;color:black;">
								<th>Sl. No.</th>
								<th>Company Name</th>
								<th>Company Business</th>
								<th>Company Location</th>
								<th>Department</th>
								<th>Position Held</th>
								<th>Area of Exp.</th>
								<th>Responsibility </th>
								<th>Job Duration</th>
							</tr>
							
							<?php
								$j = 1;
								$row_q = $cls_empInfo->exp_details($user_id);
								while($view_row= $row_q->fetch_assoc()){
							?>
							
							<tr>
								<td><?php echo $j; ?></td>
								<td><?php echo $view_row['CompanyName']; ?></td>
								<td><?php echo $view_row['CompanyBusiness']; ?></td>
								<td><?php echo $view_row['CompanyLocation']; ?></td>
								<td><?php echo $view_row['Department']; ?></td>
								<td><?php echo $view_row['PositionHeld']; ?></td>
								<td><?php echo $view_row['AreaofExp']; ?></td>
								<td><?php echo $view_row['Respons']; ?></td>
								<td><?php echo $view_row['DateFrom']; ?> - <?php echo $view_row['DateTo']; ?></td>
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