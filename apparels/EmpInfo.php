    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title"> Manage Employee Info</h1>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-12">
				<table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Sl. No.</th>
						<th>Joined Date</th>
						<th>Staff ID</th>
						<th>Staff Name </th>
						<th>Factory Name</th>
						<th>Mobile</th>
						<th>E-mail</th>
						<th>View</th>
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
						<td align="center"><a href="view_emp_info?vid=<?php echo $view_row['StaffIDNO'];?>" style="text-decoration:none;"> <span style="color:#00238C;"> <i class="fa fa-search-plus" aria-hidden="true" style="font-size:20px;"></i> </span> </a></td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table> 
		    </div>
		</div>

    <?php include('include/footer.php'); ?>