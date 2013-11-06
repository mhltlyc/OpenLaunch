<div class="website">
	<div class="header">
		<div class="logo">
			<?php echo Settings::get("website.name") ?>
		</div>
	</div>
	<div class="menu">
		<div class="menu-right">
			<?php if (Session::loggedIn()) { ?>
			<div class="menu-item"><a href="/account/">Settings</a></div>
			<div class="menu-item"><a href="/account/signout/">Sign Out</a></div>
			<?php } else { ?>
			<div class="menu-item"><a href="/account/access/">Sign In / Register</a></div>
			<?php } ?>

		</div>
		<?php echo Component::get("*.TopMenu") ?>
	</div>
	<div class="main">
		<?php echo $content ?>
	</div>
</div>

