    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Salary Matrix </h1>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-7 col-lg-7">
			<?php
				$row_q = $cls_salMatrix->salMat_list();
				$view_r = $row_q->fetch_assoc();
			?>
			    <form id="updateSalMatrix" class="form2" method="post" style="margin:0px;">
					<div class="field">
						<div class="labelN">Basic (%)</div>
						<div class="control">
							<input type="number" name="basic" value="<?php echo $view_r['basic'];?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Home Rent (%)</div>
						<div class="control">
							<input type="number" name="HomeRent" value="<?php echo $view_r['HomeRent'];?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Medical  Allowance (%)</div>
						<div class="control">
							<input type="number" name="MedAllowance" value="<?php echo $view_r['MedAllowance'];?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Food Allowance (%)</div>
						<div class="control">
							<input type="number" name="FoodAllowance" value="<?php echo $view_r['FoodAllowance'];?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">Conveyance (%)</div>
						<div class="control">
							<input type="number" name="conveyance" value="<?php echo $view_r['conveyance'];?>"> 
						</div>
					</div>
					<div class="field">
						<div class="labelN">PF (%)</div>
						<div class="control">
							<input type="number" name="ProbFund" value="<?php echo $view_r['ProbFund'];?>"> 
						</div>
					</div>
					<input type="hidden" name="identyKey" value="update_salMatrix"> 
					
					<div class="field">
					   <div class="labelN"></div>
					   <div class="control">
						 <input type="submit" name="submit_btn" value="Set">
					   </div>
					</div>
			    </form>
		    </div>
			
			<div class="col-md-12 col-lg-12">
			<br><br>
			    <table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Basic </th>
						<th>Home Rent </th>
						<th>Medi. Allowance</th>
						<th>Food Allowance</th>
						<th>Conveyance </th>
						<th>PF </th>
					</tr>
					
					<?php
						$j = 1;
						$row_q = $cls_salMatrix->salMat_list();
						while($view_act= $row_q->fetch_assoc()){
					?>
					
					<tr>
						<td style="text-align:center;"><?php echo $view_act['basic']; ?> %</td>
						<td style="text-align:center;"><?php echo $view_act['HomeRent']; ?> %</td>
						<td style="text-align:center;"><?php echo $view_act['MedAllowance']; ?> %</td>
						<td style="text-align:center;"><?php echo $view_act['FoodAllowance']; ?> %</td>
						<td style="text-align:center;"><?php echo $view_act['conveyance']; ?> %</td>
						<td style="text-align:center;"><?php echo $view_act['ProbFund']; ?> %</td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
			</div>
		</div>
    <?php include('include/footer.php'); ?>