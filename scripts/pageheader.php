<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="fi">
<head>
	<meta name="keywords" content="minetest minetest-c55" />
	<meta name="description" content="<?php
          if ($page_description=="")
             $page_description="Minetest (minetest-c55): An open source Infiniminer/Minecraft style game";
             
          echo $page_description;
        ?>" />
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<link rel="stylesheet" href="http://minetest.net/style_v2.css" type="text/css" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="bookmark icon" href="/favicon.ico" />
	<title><?php echo $page_title;?> - Minetest Skins</title>

<style>
.inbar_login {
	float: right;
}

#notice_bar {
	/*text-align: center;*/
	/*background: url("images/logo1.png") center top no-repeat;*/
	/*background: url("images/minetest-icon-120.png") left top no-repeat;*/
	background: #FACF73;
	color: #000000;
	display: block;
	height: 30px;
	width: auto;
	margin: 0px;
	padding: 1em 0 1em 0;
	border: 0px;
}
</style>
</head>

<body>

<div id="navbar" class="navbar">
	<div class="constrain">
		<span class="inbar_main">
			<ul>
				<li class="navlink_normal"><a href="http://minetest.net/index.php">About</a></li>
				<li class="navlink_normal"><a href="http://minetest.net/news.php">News</a></li>
				<li class="navlink_normal"><a href="http://minetest.net/download.php">Download</a></li>
				<li class="navlink_normal"><a href="http://minetest.net/contribute.php">Contribute</a></li>
			</ul>
		</span>
		<span class="inbar_separator">
			|
		</span>
		<span class="inbar_other">
			<ul>
				<li class="navlink_normal"><a href="<?php echo $serverpath;?>/index.php">Home</a></li>
				<li class="navlink_normal"><a href="<?php echo FORUM_ROOT;?>">Forum</a></li>
				<li class="navlink_normal"><a href="<?php echo $serverpath;?>/zipball.php">Zipball</a></li>
			</ul>
		</span>
		<span class="inbar_login">
			<ul>
<?php
if ($forum_user['username']=="Guest"){
  echo "<li class=\"navlink_normal\"><a href=\"".FORUM_ROOT."login.php\">Login</a></li>";
  echo "<li class=\"navlink_normal\"><a href=\"".FORUM_ROOT."register.php\">Register</a></li>";
}else{
   echo "<li class=\"navlink_normal\">".$forum_user['username']."</li>";
}
?>
			</ul>
		</span>
	</div>
</div>
<div class="navbarbottom1">
</div>

<div id="logo">
	<div class="constrain">
		<img src="http://minetest.net/images/minetest-icon-120.png" alt="logo" id="logoimage">
		<div style="float:right;vertical-align:top;">
		     <form method="get" action="<?php echo $serverpath;?>/gallery.php">
                          <input type="hidden" name="mode" value="sb">
                          <input type="text" placeholder="search for something" name="id"> <input type="submit" value="Search">
                    </form>
		</div>
		<span class="bigheader">
			<h1>Minetest Avatars</h1>
			<h2>Upload or Choose a character texture</h2>
		</span>

	</div>
</div>

<div id="content">
	<div class="constrain">
		<div style="clear: both;"></div>
