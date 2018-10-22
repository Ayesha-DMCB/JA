    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Manage Accounts Head</h1>
			<ul class="breadcrumb">
				<li><a href="acc_head"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Account Head List </a> </li>
            </ul>
        </div>
        <div class="main-content">

		<div class="row">
		    <div class="col-md-12">
				<table class="table1" border="1">
					<tr style="height:30px;color:black;">
						<th>Sl. No.</th>
						<th>Acc. Head Code</th>
						<th>Acc. Head Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					
					<?php
						$j = 1;
						$room_q = $cls_accHead->slct_accHead();
						while($view_act= $room_q->fetch_assoc()){
					?>
					
					<tr>
						<td align="center"><?php echo $j; ?></td>
						<td align="center"><?php echo $view_act['acc_headCode']; ?></td>
						<td align="center"><?php echo $view_act['acc_headName']; ?></td>
						<td align="center"><a href="edit_accHead.php?vid=<?php echo $view_act['id'];?>" style="text-decoration:none;"> <span style="color:#00238C;"><i class="fa fa-pencil-square" aria-hidden="true"></i> Edit</span> </a></td>
						<td align="center" onclick="delete_accHead('<?php echo "$view_act[id]";?>')"> <span style="color:#FF2626;"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span> </td>
					</tr>
					<?php 
						$j++;
					}
					?>
				</table>
		    </div>
		</div>
    <?php include('include/footer.php'); ?>