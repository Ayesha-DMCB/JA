    <?php include('include/header.php'); ?>
    <div class="content">
        <div class="header">  
            <h1 class="page-title">Factory Registration</h1>
        </div>
        <div class="main-content">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#home" data-toggle="tab">Registration</a></li>
		</ul>

		<div class="row">
		  <div class="col-md-5">
			<br>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="home">
			        <form id="factoryReg" class="form2" method="post" style="margin:0px;">
						<div class="field">
							<div class="labelN">Factory Code </div>
							<div class="control">
                                <input type="text" name="FactoryCode" required="required" tabindex="1">
							</div>
						</div>
						<div class="field">
							<div class="labelN">Factory Name </div>
							<div class="control">
							    <input type="text" name="FactoryName" required="required" tabindex="2"> 
							</div>
						</div>
						<div class="field">
							<div class="labelN">Factory Address </div>
							<div class="control">
							    <textarea name="Adress" tabindex="3"></textarea> 
							</div>
						</div>
						<input type="hidden" name="identyKey" value="factoryReg"> 
						
					    <div class="field">
						   <div class="labelN"></div>
						   <div class="control">
						     <input type="submit" name="submit_form" value="Save" tabindex="4">
						   </div>
					    </div>
				   </form>
				</div>
			</div>
		  </div>
		</div>

    <?php include('include/footer.php'); ?>