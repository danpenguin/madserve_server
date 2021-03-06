<?php
//Original index redirected to Signin.pgp
/*
// Require the initialisation file
require_once '../../init.php';

// Required files
require_once MAD_PATH . '/www/cp/auth.php';

require_once MAD_PATH . '/functions/adminredirect.php';

if (logincheck()){
MAD_Admin_Redirect::redirect('dashboard.php');
}
else
{
MAD_Admin_Redirect::redirect('signin.php');	
}

*/
require_once '../../init.php';
require_once MAD_PATH . '/www/cp/auth.php';
require_once MAD_PATH . '/functions/adminredirect.php';
require_once MAD_PATH . '/www/cp/admin_functions.php';
if (logincheck())
{
	MAD_Admin_Redirect::redirect('dashboard.php');
	exit;
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><?php echo getconfig_var('adserver_name'); ?> - Login</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" href="assets/stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="assets/stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="assets/stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="assets/stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="assets/stylesheets/login.css" type="text/css" media="screen" title="no title" />
</head>
<body>
<div id="login">
	<h1>Dashboard</h1>
	<div id="login_panel">
			<div class="login_actions">				
				<a href="do_signin.php">
					<button type="submit" class="btn btn-primary" tabindex="3">Sign Up</button>
				</a>
				<a href="do_signin.php">
					<button type="submit" class="btn btn-primary" tabindex="3">Login</button>
				</a>
				</center>
			</div>
	</div> <!-- #login_panel -->		
</div> <!-- #login -->
<script src="assets/javascripts/all.js"></script>
</body>
</html>