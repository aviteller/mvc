<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewpoart" content="width=device-width">
	<title><?= (isset($this->title)) ? $this->title : 'MVC'; ?></title>
	<!-- <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css">
	<script src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
	<script src="<?php echo URL; ?>public/js/app.js"></script>
	<?php 
		if(isset($this->js)){
			foreach ($this->js as $js){
			echo "<script src='".URL.'views/'.$js."'></script>";
		}
		}
	 ?>

</head>
<body>
<header>
	<div class="container">
		<div id="branding">
			<h1><span class="highlight">Avi</span> web design</h1>
		</div>
		<nav>
			<ul>
			<?php if(Session::get('loggedIn') == false): ?>
				<li class="current"><a href="<?php echo URL; ?>index">Home</a></li>
				<li><a href="<?php echo URL; ?>help">Help</a></li>
				<li><a href="<?php echo URL; ?>login">Login</a></li>
			<?php else: ?>
				<?php if (Session::get('role') == 'owner'): ?>
						<li"><a href="<?php echo URL; ?>user">User</a></li>
				<?php endif ?>
				<li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
				<li><a href="<?php echo URL; ?>note">Note</a></li>
				<li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
			<?php endif; ?>
			</ul>
		</nav>
	</div>
</header>



<!-- <div class="pure-menu pure-menu-horizontal">
    <a href="#" class="pure-menu-heading pure-menu-link">BRAND</a>
    <ul class="pure-menu-list">
        <?php if(Session::get('loggedIn') == false): ?>
        <li class="pure-menu-item"><a href="<?php echo URL; ?>index" class="pure-menu-link">Index</a></li>
        <li class="pure-menu-item"><a href="<?php echo URL; ?>help" class="pure-menu-link">Help</a></li>
      <?php endif; ?>
        <?php if(Session::get('loggedIn') == true): ?>
        	<li class="pure-menu-item"><a href="<?php echo URL; ?>dashboard" class="pure-menu-link">Dashboard</a></li>
        	<li class="pure-menu-item"><a href="<?php echo URL; ?>note" class="pure-menu-link">Note</a></li>
						<?php if (Session::get('role') == 'owner'): ?>
							        	<li class="pure-menu-item"><a href="<?php echo URL; ?>user" class="pure-menu-link">User</a></li>
						<?php endif ?>
		
					
        	<li class="pure-menu-item"><a href="<?php echo URL; ?>dashboard/logout" class="pure-menu-link">Logout</a></li>
        <?php else: ?>
       		<li class="pure-menu-item"><a href="<?php echo URL; ?>login" class="pure-menu-link">Login</a></li>
      	<?php endif; ?>
    </ul>
</div> -->