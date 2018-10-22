    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Manage Accounts sub-sub Head</h1>
			<ul class="breadcrumb">
				<li><a href="add_acc_SubSubHead"> <i class="fa fa-arrow-back" aria-hidden="true"></i> Account sub-sub Head</a> </li>
            </ul>
        </div>
        <div class="main-content">
		<div class="row">
		    <div class="col-md-12 col-lg-12">
				<table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Sl. No.</th>
						<th>Acc. Head</th>
						<th>Acc. Sub-Sub Code</th>
						<th>Acc. Sub-Sub Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						$j = 1;
						$room_q = $cls_accHeadSSub->slct_accHeadSSub();
						while($view_act= $room_q->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $j; ?></td>
						<td><?php echo $view_act['acc_subHead']; ?></td>
						<td><?php echo $view_act['acc_subSub_Code']; ?></td>
						<td style="text-align: left;"><?php echo $view_act['acc_subSub_name']; ?></td>
						<td><a href="edit_accSubSub.php?vid=<?php echo $view_act['id'];?>" style="text-decoration:none;"> <span style="color:#00238C;"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</span> </a></td>
						<td onclick="del_accHeSubS('<?php echo "$view_act[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
		    </div>
		</div>
    <?php include('include/footer.php'); ?>