<div class="container">
    <div class="w3layouts_logo">
        <a href="index.html"><h1>One<span>Movies</span></h1></a>
    </div>
    <div class="w3_search">
        <form action="#" method="post">
            <input type="text" name="Search" placeholder="Search" required="">
            <input type="submit" value="Go">
        </form>
    </div>
    <div class="w3l_sign_in_register">
        <ul>
            <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Register</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
								<form action="#" method="post">
								<input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form action="#" method="post">
								  <input type="text" name="Name" placeholder="Name" required="">
								  <input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
							      			<input type="password" name="ConfirmPassword" placeholder="Confirm Password" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->