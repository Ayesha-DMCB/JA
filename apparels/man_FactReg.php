    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Manage Factory Registration</h1>
			<ul class="breadcrumb">
				<li><a href="factoryReg"> <i class="fa fa-arrow-back" aria-hidden="true"></i> Factory Registration </a> </li>
            </ul>
        </div>
        <div class="main-content">
		<div class="row">
		    <div class="col-md-12 col-lg-12">
				<table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Sl. No.</th>
						<th>Factory Code</th>
						<th>Factory Name</th>
						<th>Address</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						$j = 1;
						$row_q = $cls_factReg->slct_FactReg();
						while($view_act= $row_q->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $j; ?></td>
						<td><?php echo $view_act['FactoryCode']; ?></td>
						<td style="text-align: left;"><?php echo $view_act['FactoryName']; ?></td>
						<td style="text-align: left;"><?php echo $view_act['Adress']; ?></td>
						<td><a href="" style="text-decoration:none;"> <span style="color:#00238C;"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</span> </a></td>
						<td onclick="del_FactReg('<?php echo "$view_act[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
		    </div>
		</div>
    <?php include('include/footer.php'); ?>