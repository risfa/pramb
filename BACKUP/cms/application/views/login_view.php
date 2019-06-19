<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<body lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Login | Prambors</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/themes/metro')?>/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/favicon')?>/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/favicon')?>/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/favicon')?>/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/favicon')?>/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/favicon')?>/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/favicon')?>/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/favicon')?>/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/favicon')?>/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/favicon')?>/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url('assets/favicon')?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/favicon')?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('assets/favicon')?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/favicon')?>/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url('assets/favicon')?>/manifest.json">
    <link rel="shortcut icon" href="<?=base_url('assets/favicon')?>/favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=base_url('assets/favicon')?>/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<style>
	/*body
	{
	 
		background: #fe8c00; /* fallback for old browsers */
		background: -webkit-linear-gradient(to left, #fe8c00 , #f83600); /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to left, #fe8c00 , #f83600); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			
	}*/

    .logo123 {
     margin: -100px ; 
     padding: 0px; 
    text-align: center;
        }   
	</style>
	
</head>
<body class=" login"
<!-- BEGIN LOGO -->
<div class="logo123" style=" margin:-100px padding : -100px auto 0 !important ">
    <a href="<?=base_url()?>">
        <img src="<?=base_url('assets')?>/logo1.png" alt="" width="300" style="margin-left: 530px;"/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" method="post" action="<?=site_url().'/login/process'?>">
        <h3 class="form-title font-red">Login to Access</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" name="username" id="username" autocomplete="off" placeholder="username" name="username" /> </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" name="password" autocomplete="off" id="password" placeholder="Password" name="password" /> </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-block red uppercase" id="login">Login</button>
<!--            <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>-->
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    
    <!-- END FORGOT PASSWORD FORM -->
</div>
<div class="copyright" style="color:#fff"> 2018 © Masima. </div>

</body>
</html>