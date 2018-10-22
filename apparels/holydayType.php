    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Holyday Type </h1>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-5 col-lg-5">
			    <form id="add_hType" class="form2" method="post" style="margin:0px;">
					<div class="field">
						<div class="labelN">Holyday Type</div>
						<div class="control">
							<input type="text" name="holyType" required="required"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="add_htype"> 
					
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
						<th>Holyday Type</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					
					<?php
						$j = 1;
						$row_q = $cls_holyType->slct_holyType();
						while($view_act= $row_q->fetch_assoc()){
					?>
					
					<tr>
						<td align="center"><?php echo $j; ?></td>
						<td align="center"><?php echo $view_act['holyType']; ?></td>
						<td align="center"> <span style="color:#00238C;" onclick="edit_popup('<?php echo "$view_act[id]";?>' , '<?php echo "$view_act[holyType]";?>')"><i class="fa fa-pencil-square" aria-hidden="true" style="font-size:18px"></i></span> </td>
						<td align="center" onclick="delete_htype('<?php echo "$view_act[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true" style="font-size:18px"></i> </span> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
				<div id="popOpen">
				   <div id="closeDiv"> <a href="#" class="close agree"> ( CLOSE )</a> </div>
				   <br> <br>
				    <form id="edit_hType" class="form2" method="post" style="margin:0px;">
						<div class="field">
							<div class="labelN">Holyday Type </div>
							<div class="control">
								<input type="hidden" name="uid" id="uid"> 
								<input type="text" name="holyType" id="htype"> 
							</div>
						</div>
						<input type="hidden" name="identyKey" value="edit_htype"> 
						
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
			    function edit_popup(id, htype){
				    $("#popOpen").show();
				    $("#htype").val(htype);
				    $("#uid").val(id);
				}
			</script>
		</div>
    <?php include('include/footer.php'); ?>