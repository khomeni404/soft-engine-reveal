<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to <?= $_SERVER['HTTP_HOST']; ?></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<style>
		h1,h2,h4.welcome{font-family:'Fjalla One', sans-serif;}
		h1{font-size:42px;margin: 0px 0 0px;}
		h2{font-size:26px;margin-bottom: 40px;}
		h4.welcome{margin: 60px 0 15px 0; font-size: 24px;}
		section{display:block;width:100%;}
		.logo{color:white; font-family: 'Fjalla One', sans-serif; text-transform: uppercase;     padding: 18px 0 15px; display: inline-block; font-size: 28px; line-height: 28px;}
		.logo:hover, p.intro a:hover{text-decoration:none;color:#fff;}
		p.intro{font-weight:300;max-width: 890px; margin: 25px auto; font-size: 18px; font-family: 'Open Sans';}
		.icon i{width: 110px; height: 110px; font-size: 50px; line-height: 108px; border-radius: 50%; border: 1px solid #ccc;}
		.icon{padding:50px 0;}
		.icon h2{font-size: 24px; margin: 15px 0;} 
		.icon p{font-size: 16px;max-width:290px;margin:0 auto;}
		p.intro a, p.footer a{font-weight:400;color:#fff;}
		.ehs{text-align:center;}
		.ehs h4{margin-bottom:35px;text-align:center;font-weight:400;color:#00aadc;font-size:26px;} .ehs h4 span{color:#222;}
		p.footer{text-align: center; margin: 20px auto; font-weight: 100; font-family: 'Open Sans'; font-size: 16px;}
		p.footer b{font-weight:400;}
		a.support:hover{text-decoration:none;}
		a.support{margin-top: 6px;font-size: 16px; font-weight: 100;display:inline-block;color:#fff;font-family:'Open Sans';}
		a.support span{font-weight: normal;display: inline-block; width: 100%; text-align: left; color: #97bed4; font-size: 12px;}
		.ehs i{width: 100px; height: 100px; line-height: 100px; font-size: 45px; text-align: center; background: #00aadc; color: #fff; border-radius: 50%;}
		.ehs a{text-align: center; display: inline-block; width: 100%; margin-bottom: 14px;}
		.ehs a span{display: block; margin-top: 15px;  color: #006c8c; text-transform: uppercase; font-size: 15px;}
		div.lebel{padding: 8px 20px; font-size: 14px; border-radius: 18px; display: inline-block;}
			.lebel.red{background: #bc0000; color: #fff;}
			.lebel.blue{background: #004c8e; color: #fff;}
			.lebel.green{background: #148600; color: #fff;}
			.lebel.ylw{background: #a38100; color: #fff;}
	</style>
  </head>
  <body>
    <section style="background:#00649e;">
	<div class="container">
	<div class="row">
		<div class="col-md-6"><a href="/" class="logo"><?= $_SERVER['HTTP_HOST']; ?></a></div>
		<div class="col-md-6 text-right">
			<a class="support" href="mailto:support@alpha.net.bd"><span>Need Help?</span><br><i class="fa fa-envelope"></i> support@alpha.net.bd</a>
		</div>
	</div>
	</div>
	</section>
	<section style="background:#0075b9;color:#fff;">
	<div class="container">
	<div class="row">
		<div class="cold-md-12 text-center" style="padding-bottom:30px;">
			<h4 class="welcome">Welcome to <?= $_SERVER['HTTP_HOST']; ?></h4>
			<h1>We are working on our new site</h1>
			<h2>Stay tuned for something amazing!!!</h2>
			
			<p class="intro"><?= $_SERVER['HTTP_HOST']; ?> is Registered and Hosted with <a href="http://alpha.net.bd"><b>Alpha Net</b></a>. This temporary Home Page of <?php echo $_SERVER['HTTP_HOST']; ?> is created by Alpha Net's Advanced Hosting Control Panel. When you upload the Website for <?php echo $_SERVER['HTTP_HOST']; ?>, this page will be replaced automatically.</p>
			<p class="intro">The Control Panel for <?= $_SERVER['HTTP_HOST']; ?> includes many advanced features. Log into the Control Panel to access and manage resources like File Manager, FTP accounts, Databases, DNS Editor and more. You can also install many popular Web Applications (WordPress, Joomla, Opencart and many more) into your Website directly from the Control Panel.</p>
		</div>
	</div>
	</div>
	</section>
	<section style="background:#efefef;">
	<div class="container">
	<div class="row">
		<div class="col-md-4 text-center icon">
			<i class="fa fa-cogs"></i>
			<h2>Control Panel</h2>
			<p>
			Your VPS Control Panel Username and Password was included in the welcome Email that we sent you when your service was created.
			</p>
		</div>
		<div class="col-md-4 text-center icon">
			<i class="fa fa-database"></i>
			<h2>Databases</h2>
			<p>
			You can manage your databases from the Control Panel. also you can use phpMyAdmin for managing you databases.
			</p>
		</div>
		<div class="col-md-4 text-center icon">
			<i class="fa fa-cloud-upload"></i>
			<h2>File Upload</h2>
			<p>
			You can upload &amp; manage you files from File Manager or you can use FTP Service. Files must be uploaded into "public_html" folder.
			</p>
		</div>
	</div></div>
	</section>
	<section style="padding:60px;">
	<div class="container">
	<div class="row ehs">
		<div class="col-md-12">
			<h4>ENTERPRISE <span>HOSTING</span> SOLUTIONS</h4>
		</div>
		<div class="col-md-3">
			<a href="//alpha.net.bd/Domains/">
				<i class="fa fa-globe"></i>
				<span>Domain Registration</span>
			</a>
		</div>
		<div class="col-md-3">
			<a href="//alpha.net.bd/Hosting/">
				<i class="fa fa-cloud"></i>
				<span>Web Hosting</span>
			</a>
		</div>
		<div class="col-md-3">
			<a href="//alpha.net.bd/WebDesign/">
				<i class="fa fa-paint-brush"></i>
				<span>Website Design</span>
			</a>
		</div>
		<div class="col-md-3">
			<a href="//alphapbx.net">
				<i class="fa fa-volume-control-phone"></i>
				<span>IP PBX - Business Telephone</span>
			</a>
		</div>
	</div>
	</div>
	</section>
	<section style="background:#0075b9;color:#fff;">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
		<p class="footer">Copyright <?php date_default_timezone_set("Asia/Dhaka"); echo date("Y").' by <b>'. ucfirst($_SERVER['HTTP_HOST']); ?></b>. Hosted &amp; Powered by  <a href="http://alpha.net.bd">Alpha Net</a>.</p>
	</div> 
	</div>
	</div>
	</section>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </body>
</html>
