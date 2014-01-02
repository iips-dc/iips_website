<!-- Called from main_menu.php,  -->
<!-- Imported the 'ti.php' for template inheritance -->
<?php require_once 'ti.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>
        <!-- Title block Start -->
        <?php startblock('title'); ?>
		<?php endblock(); ?>
		<!-- Title block End -->
		</title>

		<!-- Style (CSS files) block Start -->
		<?php startblock('style'); ?>

	       <!-- Include Styles -->
	        <link rel="stylesheet" href="css/vtab-style.css" />		
	        <!--[if IE 7]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
	        <!--[if IE 8]><style type="text/css">#v-nav>ul>li.current{border-right:1px solid #fff!important}#v-nav>div.tab-content{z-index:-1!important;left:0}</style><![endif]-->
			<?php
			 include('cssLinks.php');
			?>
		<?php endblock(); ?>
		<!-- Style block End -->
</head>
<body>
	<!-- Header block Start -->
	<?php startblock('header') ?>
		<?php
				// inlclude header here
				include 'header.php';
				
				include('readTextFilesScript.php');
		?>
	<?php endblock(); ?>
	<!-- Header block End -->
	
	<!-- Content block Start -->
	<?php startblock('content') ?>
		
	<?php endblock(); ?>
	<!-- Content block End -->

	<!-- Script (JS files) block Start -->
	<?php startblock('script'); ?>
		<?php
	        include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts for vertical tabs-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       
        <script type="text/javascript" src="js/vtab-script.js"></script>
	<?php endblock(); ?>
	<!-- Script block End -->


</body>

</html>
