    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Shift</h1>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-6 col-lg-6">
			    <form id="addShift" class="form2" method="post" style="margin:0px;">
					<div class="field">
						<div class="labelN">Shift Name</div>
						<div class="control">
							<input type="text" name="shiftName"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Start Time</div>
						<div class="control">
							<input type="text" name="startTime" class="timepicker"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">End Time </div>
						<div class="control">
							<input type="text" name="endTime" class="timepicker"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Late Allowed</div>
						<div class="control">
							<input type="text" name="lateAllowed" class="timepicker"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Absent Allowed</div>
						<div class="control">
							<input type="text" name="absentAllowed" class="timepicker"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Weekend-1 </div>
						<div class="control">
							<select name="weekend1">
							   <option>None</option>
							   <option>Saturday</option>
							   <option>Sunday</option>
							   <option>Monday</option>
							   <option>Tuesday</option>
							   <option>Wednesday</option>
							   <option>Thursday</option>
							   <option>Friday</option>
							</select>
						</div>
					</div>
					<div class="field">
						<div class="labelN">Weekend-2 </div>
						<div class="control">
							<select name="weekend2">
							   <option>None</option>
							   <option>Saturday</option>
							   <option>Sunday</option>
							   <option>Monday</option>
							   <option>Tuesday</option>
							   <option>Wednesday</option>
							   <option>Thursday</option>
							   <option>Friday</option>
							</select> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">shiftType </div>
						<div class="control">
							<select name="shiftType">
							  <option value="Day">Day</option>
							  <option value="Night">Night</option>
							</select>
						</div>
					</div>
					
					<input type="hidden" name="identyKey" value="add_shift"> 
					
					<div class="field">
					   <div class="labelN"></div>
					   <div class="control">
						 <input type="submit" name="submit_btn" value="Set">
					   </div>
					</div>
			    </form>
				<script> 
				$(function(){
				  $('.timepicker').wickedpicker();
				});
				</script>
		    </div>
			
			<div class="col-md-12 col-lg-12">
			<br><br>
			    <table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Shift Name </th>
						<th>Start Time </th>
						<th>End Time </th>
						<th>Late Allowed </th>
						<th>Absent Allowed </th>
						<th>Weekend 1 </th>
						<th>Weekend 1 </th>
						<th>shiftType </th>
					</tr>
					<?php
						$j = 1;
						$row_q = $cls_shiftType->slct_shift();
						while($view_act= $row_q->fetch_assoc()){
					?>
					<tr>
						<td style="text-align:center;"><?php echo $view_act['shiftName']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['startTime']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['endTime']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['lateAllowed']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['absentAllowed']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['weekend1']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['weekend2']; ?> </td>
						<td style="text-align:center;"><?php echo $view_act['shiftType']; ?> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
			</div>
			
			<link rel="stylesheet" type="text/css" href="lib/wickedpicker.css" />
			<script type="text/javascript" src="lib/wickedpicker.js"></script>
			
		</div>
    <?php include('include/footer.php'); ?>