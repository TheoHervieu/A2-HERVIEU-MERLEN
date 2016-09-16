<body style="background-color: #333;">
	<section id="login-container">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 midway-horizontal midway-vertical fadeInDown animated">
			<div id="logbox">
			<?php if(isset($error) && !empty($error)){ ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $error; ?>
				</div>
			<?php } ?>
				<h1><i class="fa fa-soundcloud"></i> Connectez-vous !</h1>
				<form method="POST" action="login.php">
					<div class="form-input">
						<span class="email">
							<input type="text" name="email" placeholder="Email">
						</span>
					</div>
					<div class="form-input">
						<span class="password">
							<input type="password" name="password" placeholder="Password">
						</span>
					</div>
					<div class="form-submit">
						<input type="submit" value="Connecter" name="button_connect">
					</div>
					<p class="account">Vous n'avez pas de compte ? <a href="register.php">Inscrivez vous !</a></p>
					Nous rejoindre sur : <?php echo '<p><a href="https://www.facebook.com/games/soundcloud/?fbs=1101&fref=ts">facebook</a></p>'; ?>

					ou bien sur : <?php echo '<p><a href="https://twitter.com/SoundCloud">twitter</a></p>'; ?>
				</form>
			</div>
		</div>
	</section>
