<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo TITLE?></title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/uniform.default.css">
<link rel="stylesheet" href="css/bootstrap.datepicker.css">
<link rel="stylesheet" href="css/jquery.cleditor.css">
<link rel="stylesheet" href="css/jquery.plupload.queue.css">
<link rel="stylesheet" href="css/jquery.tagsinput.css">
<link rel="stylesheet" href="css/jquery.ui.plupload.css">
<link rel="stylesheet" href="js/tableTools/css/TableTools.css">
<link rel="stylesheet" href="css/chosen.css">
<link rel="stylesheet" href="css/jquery.jgrowl.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="topbar clearfix">
	<div class="container-fluid">
		<a href="index.php" class='company'><?php echo TITLE?> Admin Panel</a>
		<!-- 
		<form action="#">
			<input type="text" value="Search here...">
		</form>
		 -->
		<ul class='mini'>			
			<li>
				<a href="index.php?page=logout">
					<img src="img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="index.php"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<?php  
				
				switch (true) {
					case ($page == 'home'):
						echo "<a href='index.php'>Dashboard</a>";
						break;
					case ($page == 'users' || $page == 'edit_user'):
						echo "<a href='index.php?page=users&typ=1'>Users</a>";
						break;
					case ($page == 'records' || $page == 'edit_program'):
						echo "<a href='index.php?page=records'>Records</a>";
						break;
					case ($page == 'questions' || $page == 'edit_question'):
						echo "<a href='index.php?page=questions'>Quesiont&Answers</a>";
						break;
					case ($page == 'program_tasks' || $page == 'edit_program_task'):
						echo "<a href='index.php?page=program_tasks'>Program - Daily Tasks</a>";
						break;
					case ($page == 'questions' || $page == 'edit_question'):
						echo "<a href='index.php?page=questions'>Question</a>";
						break;
					case ($page == 'question_answers' || $page == 'edit_question_answer'):
						echo "<a href='index.php?page=question_answers'>Question - Answers</a>";
						break;
					case ($page == 'trait_names'):
						echo "<a href='index.php?page=trait_names'>Trait Names</a>";
						break;
					default:
						echo "<a href='index.php'>Dashboard</a>";
						break;
				}
				?>
			</li>
		</ul>

	</div>
</div>
<div class="main">
	<div class="container-fluid">
	<div class="navi">
		<ul class='main-nav'>
			<li>
				<a href="index.php?page=home" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
					<!-- <span class="label label-warning">10</span> -->
				</a>
			</li>			
			
			
			<li class='active open'>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-tasks icon-white"></i></div>
					Questions&Answers
					<img src="img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav'>					
					<li <?php if($_REQUEST['page']=='questions'){?>class='active'<?php }?>>
						<a href="index.php?page=questions">
							Question & Answers
						</a>
					</li>

					<li <?php if($_REQUEST['page']=='records'){?>class='active'<?php }?>>
						<a href="index.php?page=records">
							Records
						</a>
					</li>								
				</ul>
			</li>		
			
		</ul>
	</div>
	<div class="content">
	  			<div class="row-fluid">
						<?php
						foreach($MiddleContents as $fld => $val){
								include($val);
								}
						?>
	

				</div>
	  		</div>	
	</div>
</div>	
   
<script src="js/jquery.js"></script>
<script src="js/less.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="js/bootstrap.timepicker.js"></script>
<script src="js/bootstrap.datepicker.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/plupload/plupload.full.js"></script>
<script src="js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jquery.jgrowl_minimized.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bbq.js"></script>
<script src="js/jquery-ui-1.8.22.custom.min.js"></script>
<script src="js/jquery.form.wizard-min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.dataTables.bootstrap.js"></script>
<script src="js/jquery.textareaCounter.plugin.js"></script>
<script src="js/ui.spinner.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/tableTools/js/TableTools.min.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/custom.js"></script>
<script src="js/demo.js"></script>


</body>
</html>