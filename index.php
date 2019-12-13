<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="UTF-8">
	<title><?php echo get_bloginfo( 'title' ); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
	<style>
		.container {
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="h-100 row align-items-center">
		<?php
		if ( ! is_user_logged_in() ) {
			echo do_shortcode( '[wp_login_form]' );

			return;
		}
		?>
		<div class="col-md-12">
			<h2>
				Welcome <?php echo ( is_user_logged_in() ) ? get_userdata( get_current_user_id() )->display_name : 'To Nts' ?></h2>
			<br><br>
			<p>To generate food coupon please enter employee id and click Submit button</p><br>
			<form class="" action="/">
				<div class="form-group">
					<label for="email">Employee Id:</label>
					<input
						type="email" class="form-control" id="email" placeholder="Enter employee id / Email Id"
						name="email">
				</div>
				<button type="submit" class="btn btn-primary submitBtn">Submit</button>
				<button type="button" class="btn btn-primary submitBtn">Generate QR Code</button>
			</form>
		</div>
	</div>
</div>
</body>
<?php wp_footer(); ?>
</html>
