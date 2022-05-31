
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/images/nina.png" rel="shortcut icon" type="image/x-icon" />
	<title>Administrator - <?=$setting['namevi']?></title>

	<!-- Css all -->
	<?php include 'layout/css.php' ?>
</head>
<body class="sidebar-mini hold-transition text-sm ">
    <!-- Loader -->

    <!-- Wrapper -->
		<div class="wrapper">
			<?php
				include "layout/header.php";
				include "layout/menu.php";
			?>
			<div class="content-wrapper">
					<section class="content">
						<!-- <div class="container-fluid">
							<div class="alert my-alert alert-warning alert-dismissible text-sm bg-gradient-warning mt-3 mb-0">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<i class="icon fas fa-exclamation-triangle"></i> 
							</div>
						</div> -->
					</section>
				
			</div>
			<?php include "layout/footer.php"; ?>
		</div>

	<!-- Js all -->
	<?php include "layout/js.php"; ?>
</body>
</html>