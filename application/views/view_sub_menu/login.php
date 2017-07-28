<!DOCTYPE html>
<html>
<head>
	<title>Mandiri Utama Finance</title>
	<!-- Stylesheets -->
	<link href="<?php echo base_url();?>assets/design/css/animation.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/design/css/preview.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/design/css/authenty.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/design/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section id="authenty_preview">
		<section id="signin_main" class="authenty signin-main">
			<div class="section-content">
				<div class="wrap">
		<div class="container">	  
							<div class="form-wrap">
								<div class="row">
								  <div class="title" data-animation="fadeInDown" data-animation-delay=".8s">
									  <h2>Silahkan Login</h2>
								  </div>
								  <form action="" method="post" id="form1">
								  		<div class="form-header">
										  <img  src="<?php echo base_url();?>assets/design/images/muf.png" width="150px">
									  	</div>
										<div class="form-main">
											<div class="form-group">
									  			<input type="text" id="nik" name="nik" class="form-control" placeholder="Nik" required="required">
													<input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required="required">
											</div>
										    <button id="submit" type="submit" class="btn btn-block signin">Login</button>
										</div>
										<div class="form-footer">
											<div class="row">
												<div class="col-xs-7">
													<i class="fa fa-unlock-alt"></i>
													<a href="#password_recovery" id="forgot_from_1">Lupa password?</a>
												</div>
											</div>
										</div>		
								  </form>
								</div>
							</div>
					  </div>
	</div>
			</div>
		</section>
	</section>
	

	<!-- js library -->
	<script src="<?php echo base_url();?>assets/design/js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/js/jqueryUI/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/js/jquery.icheck.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/js/waypoints.min.js" type="text/javascript"></script>
		
	<!-- authenty js -->
	<script src="<?php echo base_url();?>assets/design/js/authenty.js" type="text/javascript"></script>
		
	<!-- preview scripts -->
	<script src="<?php echo base_url();?>assets/design/js/preview/jquery.malihu.PageScroll2id.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/js/preview/jquery.address-1.6.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/js/preview/scrollTo.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/design/js/preview/init.js" type="text/javascript"></script>
		
		
		<!-- preview scripts -->
		<script>
			(function($) {
				
				// get full window size
				$(window).on('load resize', function(){
				    var w = $(window).width();
				    var h = $(window).height();

				    $('section').height(h);
				});		
				
				
				// set focus on input
				var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');
        
				if (firstInput != null) {
            firstInput.focus();
        }
				
				$('section').waypoint(function (direction) {
					var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
					target.focus();
				}, {
	          offset: 300
	      }).waypoint(function (direction) {
					var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
			  	target.focus();
	      }, {
	          offset: -400
	      });
				
				
				// animation handler
				$('[data-animation-delay]').each(function () {
	          var animationDelay = $(this).data("animation-delay");
	          $(this).css({
	              "-webkit-animation-delay": animationDelay,
	              "-moz-animation-delay": animationDelay,
	              "-o-animation-delay": animationDelay,
	              "-ms-animation-delay": animationDelay,
	              "animation-delay": animationDelay
	          });
	      });
				
	      $('[data-animation]').waypoint(function (direction) {
	          if (direction == "down") {
	              $(this).addClass("animated " + $(this).data("animation"));
	          }
	      }, {
	          offset: '90%'
	      }).waypoint(function (direction) {
	          if (direction == "up") {
	              $(this).removeClass("animated " + $(this).data("animation"));
	          }
	      }, {
	          offset: '100%'
	      });
			
			})(jQuery);
		</script>
</body>
</html>