<?php 
session_start();
$uid = $_SESSION['uid'];
$utype = $_SESSION['user_type'];
$fullName = $_SESSION['fullname'];
$uName = $_SESSION['username'];

if($_SESSION['uid'] == ""){
	header('location:index');
	exit;
}

require_once('functions/db_config.php');
function __autoload($class_name){
  require_once("functions/$class_name.class.php");
}
require_once('functions/cls_disUpazila.class.php');
require_once('functions/cls_empExpe.class.php');
require_once('functions/cls_empInfo.class.php');

$cls_admin_users = new cls_admin_users();
$cls_empInfo = new cls_empInfo();
$cls_empExperience = new cls_empExperience();
$cls_disUpazila = new cls_disUpazila();
$cls_acc_report = new cls_acc_report();
$cls_accHead = new cls_accHead();
$cls_accHeadSSub = new cls_accHeadSSub();
$cls_accHeadSub = new cls_accHeadSub();
$cls_branchName = new cls_branchName();
$cls_deptName = new cls_deptName();
$cls_secName = new cls_secName();
$cls_empType = new cls_empType();
$cls_empCat = new cls_empCat();
$cls_eduType = new cls_eduType();
$cls_designation = new cls_designation();
$cls_holyType = new cls_holyType();
$cls_leaveType = new cls_leaveType();
$cls_salMatrix = new cls_salMatrix();
$cls_shiftType = new cls_shiftType();
$cls_benefitType = new cls_benefitType();
$cls_factReg = new cls_factReg();
$cls_datetime = new cls_datetime();
$post_date= $cls_datetime->todayDate();
$ctime= $cls_datetime->ctime();

?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Adminpanel</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
	
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style-site.css">
	
	<script src="lib/jquery.js"></script>
    <script src="js/print.js"></script>
	
	<link href="stylesheets/rh_msgbox_style.css" rel="stylesheet" type="text/css">
    <script src="js/rh_msgbox.js"></script>
	
    <script>
	    $(function(){
			$('#signout').click(function(){
				$.ajax({
					type:'post',
					url:'post_url/signout',
					success:function(){
						window.location.href='http://soft.purbaapparels.com/';
						return;
					}
				});
			});
		});
	</script>
</head>
<body class=" theme-blue">
<?php include('include/rh_msgbox.php');?>
    <!-- Demo page code -->
    <script type="text/javascript">
        $(function() {
            var match = document.cookie.match(new RegExp('color=([^;]+)'));
            if(match) var color = match[1];
            if(color) {
                $('body').removeClass(function (index, css) {
                    return (css.match (/\btheme-\S+/g) || []).join(' ')
                })
                $('body').addClass('theme-' + color);
            }
            $('[data-popover="true"]').popover({html: true});
        });
    </script>
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover { 
            color: #fff;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            var uls = $('.sidebar-nav > ul > *').clone();
            uls.addClass('visible-xs');
            $('#main-menu').append(uls.clone());
        });
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    
	<!--datepicker ----->

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $( function() {
		$( ".dateALLPic" ).datepicker();
	  } );
	</script>
	
	<!--datepicker ----->	

	  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
	  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
	  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
	  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
	  <!--[if (gt IE 9)|!(IE)]><!--> 
	   
	  <!--<![endif]-->
	  

    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> ADMINPANEL</span></a></div>

        <div class="navbar-collapse collapse" style="height: 1px;">
          <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span> <?php echo $fullName; ?>
                    <i class="fa fa-caret-down"></i>
                </a>

              <ul class="dropdown-menu">
                <li><a href="./">My Account</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Admin Panel</li>
                <li><a href="./">Users</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#" id="signout">Logout</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="sidebar-nav">
		<ul>
			<li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>
            <li><a href="#" data-target=".hr-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-star"></i> HR Config<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="hr-menu nav nav-list collapse">
				    <li><a href="branch"><span class="fa fa-caret-right"></span> Branch</a></li>
				    <li><a href="department"><span class="fa fa-caret-right"></span> Department</a></li>
				    <li><a href="section"><span class="fa fa-caret-right"></span> Section</a></li>
				    <li><a href="shift"><span class="fa fa-caret-right"></span> Shift</a></li>
				    <li><a href="empType"><span class="fa fa-caret-right"></span> Employee Type</a></li>
				    <li><a href="empCat"><span class="fa fa-caret-right"></span> Employee Category</a></li>
				    <li><a href="educationType"><span class="fa fa-caret-right"></span> Education Type</a></li> 
					<li><a href="designation"><span class="fa fa-caret-right"></span> Designation</a></li>
					<li><a href="SalaryMatrix"><span class="fa fa-caret-right"></span> Salary Matrix </a></li>
					<li><a href="holydayType"><span class="fa fa-caret-right"></span> Holiday Type</a></li>
					<li><a href="leaveType"><span class="fa fa-caret-right"></span> Leave Type</a></li>
					<li><a href="benefitType"><span class="fa fa-caret-right"></span> Benefit Type</a></li>
				</ul>
			</li>
			<li><a href="#" data-target=".factory-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-legal"></i> Factory Registration<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="factory-menu nav nav-list collapse">
					<li><a href="factoryReg"><span class="fa fa-caret-right"></span> Entry </a></li>
					<li><a href="man_FactReg"><span class="fa fa-caret-right"></span> Manage</a></li>
				</ul>
			</li>
			<li><a href="#" data-target=".emp-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Employee<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="emp-menu nav nav-list collapse">
					<li><a href="new_employee"><span class="fa fa-caret-right"></span> New Employee </a></li>
					<li><a href="emp_qualification"><span class="fa fa-caret-right"></span> Qualification </a></li>
					<li><a href="emp_experience"><span class="fa fa-caret-right"></span> Experience </a></li>
					<li><a href="EmpInfo"><span class="fa fa-caret-right"></span> Employee Information </a></li>
				</ul>
			</li>
			<li><a href="#" data-target=".acc-menu" class="nav-header collapsed" data-toggle="collapse"><i class="fa fa-list" ></i> Accounts<i class="fa fa-collapse"></i></a></li>
			<li>
				<ul class="acc-menu nav nav-list collapse">
					<li><a href="acc_head"><span class="fa fa-caret-right"></span> Account Head </a></li>
					<li><a href="add_acc_headSub"><span class="fa fa-caret-right"></span> Account Sub-Head </a></li>
					<li><a href="add_acc_SubSubHead"><span class="fa fa-caret-right"></span> Account Sub-Sub-Head </a></li>
					<li><a href="#"><span class="fa fa-caret-right"></span> Report </a></li>
				</ul>
			</li>
		</ul>
    </div>