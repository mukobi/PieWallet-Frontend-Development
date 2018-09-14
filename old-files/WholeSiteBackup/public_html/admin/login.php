<?php session_start(); ?>
<?php include('/header.php'); ?>
<section class="about-us-wrapper">
	<div class="container" id="login-block">
		
		<h1>Login</h1>
		<p class="error-msg"><?php if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		} ?></p>
		<p class="success-msg"><?php if (isset($_SESSION['msg-success'])) {
		echo $_SESSION['msg-success'];
		unset($_SESSION['msg-success']);

		} ?></p>	
		<form action="admin/login.php" method="post">
			<div class="row">
				<div class="col-sm-12 mb-12 form-group">
					<input id="loginEmail" type="text" name="email" class="form-control" placeholder="Email">
				</div>
				<div class="col-sm-12 mb-12 form-group">
					<input id="loginPassword" type="password" name="password" class="form-control" placeholder="Password" value="" >
				</div>
				
				<div class="col-sm-12 submit-btn">
					<input id="login" type="submit" class="btn btn-default" name="login" value="Login">
				</div>
			</div>
		</form>

		<!-- <p ><a href="forgotPassword">Forgot password ? </a> Don't have an account ? <a href="signup">Sign up</a></p> -->
		<ul class="social-share">
			<li><a href="#"><img src="images/web-design_11.png"></a></li>
			<li><a href="#"><img src="images/web-design_13.png"></a></li>
			<li><a href="#"><img src="images/web-design_03.png"></a></li>
			<li><a href="#"><img src="images/web-design_08.png"></a></li>
			<li><a href="#"><img src="images/web-design_05.png"></a></li>
		</ul>

	</div>
</section>
<?php include('/footer.php'); ?>