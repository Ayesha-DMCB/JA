    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Accounts Sub-Head</h1>
			<ul class="breadcrumb">
				<li><a href="add_acc_headSub"> <i class="fa fa-arrow-back" aria-hidden="true"></i> Accounts Sub-Head </a> </li>
            </ul>
        </div>
        <div class="main-content">
		<div class="row">
		    <div class="col-md-12 col-lg-12">
				<table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Sl. No.</th>
						<th>Acc. Head</th>
						<th>Acc. Sub-Head Code</th>
						<th>Acc. Sub-Head Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						$j = 1;
						$room_q = $cls_accHeadSub->slct_accHeadSub();
						while($view_act= $room_q->fetch_assoc()){
					?>
					<tr>
						<td align="center"><?php echo $j; ?></td>
						<td align="center"><?php echo $view_act['acc_head']; ?></td>
						<td align="center"><?php echo $view_act['acc_subHead_code']; ?></td>
						<td align="center"><?php echo $view_act['acc_subHead_name']; ?></td>
						<td align="center"><a href="edit_accHeadSub.php?vid=<?php echo $view_act['id'];?>" style="text-decoration:none;"> <span style="color:#00238C;"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</span> </a></td>
						<td align="center" onclick="del_accHeadSub('<?php echo "$view_act[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
		    </div>
		</div>
    <?php include('include/footer.php'); ?>