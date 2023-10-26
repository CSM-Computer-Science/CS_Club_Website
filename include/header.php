<?php
	$onclickNav = "this.classList.toggle('is-active');document.getElementById('headerMobile').classList.toggle('is-active');";
	
	echo '<nav class="navbar is-fixed-top">
	<div class="navbar-brand">
		<a class="navbar-item" href="/"><img src="/assets/logo.webp" style="width: auto;max-height: 4rem;"></a>
		
		<span class="navbar-burger" data-target="headerMobile" onclick= "' . $onclickNav .'">
		<span></span>
		<span></span>
		<span></span>
		</span>
	</div>
	
	<div id="headerMobile" class="navbar-menu">
	<div class="navbar-start">
		<a class="navbar-item" href= "/"><i class="fas fa-house"></i> Home</a>
		
		<a class="navbar-item" href= "/gallery"><i class="fas fa-images"></i> Gallery</a>
		<a class="navbar-item" href= "/calendar"><i class="fas fa-calendar-days"></i> Events</a>
		<a class="navbar-item" href= "/about"><i class="fas fa-circle-info"></i> About</a>
	</div>
	</div>
	</nav>
	
	<div style= "min-height: 5rem;"></div>';
	
	/*
	echo '<nav class="navbar is-fixed-top">
	<div class="navbar-brand">
		<a class="navbar-item" href="/"><img src="/assets/logo.webp" style="width: auto;max-height: 4rem;"></a>
		
		<span class="navbar-burger" data-target="headerMobile" onclick= "' . $onclickNav .'">
		<span></span>
		<span></span>
		<span></span>
		</span>
	</div>
	
	<div id="headerMobile" class="navbar-menu">
	<div class="navbar-start">
		<a class="button backgroundDark" href= "/"><b><i class="fas fa-house"></i> Home</b></a>
		<a class="button backgroundDark" href= "/gallery"><b><i class="fas fa-house"></i> Gallery</b></a>
		<a class="button backgroundDark" href= "/calendar"><b><i class="fas fa-house"></i> Events</b></a>
		<a class="button backgroundDark" href= "/about"><b><i class="fas fa-house"></i> About</b></a>
	</div>
	</div>
	</nav>
	
	<div style= "min-height: 5rem;"></div>'; */
?>
