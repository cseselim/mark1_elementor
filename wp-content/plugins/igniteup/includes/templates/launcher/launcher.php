<?php global $the_cs_template_options; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title> <?php echo (!empty($the_cs_template_options["general_cs_page_title"]) ? $the_cs_template_options["general_cs_page_title"] : 'Almost Ready to Launch | ' . get_bloginfo('name')); ?> </title>
	
	<?php igniteup_head(); ?>
        
	<style>
            .main-container a{
                color:<?php echo $the_cs_template_options['font_color']; ?> !important;
                transition: all ease 400ms;
            }
            a:hover{
                color:<?php echo $the_cs_template_options['link_color']; ?> !important;
            }
	    <?php if (!empty($the_cs_template_options['bg_image'])): ?>
    	    body::after{
    		content: '';
    		background: url('<?php echo $the_cs_template_options['bg_image']; ?>') !important;
    		opacity: 0.5;
    		top: 0px;
    		left: 0px;
    		bottom: 0px;
    		right: 0px;
    		position: fixed;
    		z-index: -1;
    		background-size:cover;
    	    }
    	    body{
    		background: #000 !important;
    	    }
	    <?php endif; ?>
	    
        </style>
    </head>
    <body style="background: <?php echo $the_cs_template_options['bg_color']; ?>; color:<?php echo $the_cs_template_options['font_color']; ?>;">
        <div class="container-fluid main-container">
            <div class="row">
                <div class="col-sm-3">
                    <img id="rocket" class="img-responsive" src="<?php echo plugins_url('img/rocket.png', __FILE__); ?>">
                </div>
                <div class="col-sm-9 ">
                    <h1 class="text-uppercase text-center">
			<?php echo $the_cs_template_options['title_top']; ?>
                    </h1>
                    <div class="text-center text-uppercase sub-text">
			<?php echo $the_cs_template_options['title']; ?>
                    </div>
		    <?php if (!empty($the_cs_template_options['launch_date']) || !empty($the_cs_template_options['launch_time'])): ?>
    		    <div class="container-fluid" id="countdown">
    			<div class="row text-uppercase">
    			    <div class="col-sm-3 col-xs-6 countdown-time">
    				<span id="days" class="time">00</span><span class="time-name">d<span class="hidden-sm">ay<span id="day-s">s</span></span></span>
    			    </div>
    			    <div class="col-sm-3 col-xs-6 countdown-time">
    				<span id="hrs" class="time">00</span><span class="time-name">h<span class="hidden-sm">our<span id="hrs-s">s</span></span></span>
    			    </div>
    			    <div class="col-sm-3 col-xs-6 countdown-time">
    				<span id="mins" class="time">00</span><span class="time-name">m<span class="hidden-sm">in<span id="min-s">s</span></span></span>
    			    </div>
    			    <div class="col-sm-3 col-xs-6 countdown-time">
    				<span id="secs" class="time">00</span><span class="time-name">s<span class="hidden-sm">ec<span id="sec-s">s</span></span></span>
    			    </div>
    			</div>
    		    </div>
		    <?php endif; ?>
                    <p class="text-center description">
			<?php echo $the_cs_template_options['paragraph']; ?>
                    </p>
                    <div class="subscribe">
                        <div class="input-group">
                            <input type="email" class="form-control text-box" id="cs_email" placeholder="<?php _e('Enter your email...', CSCS_TEXT_DOMAIN); ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-default subscribe-btn" type="button" style="color: <?php echo $the_cs_template_options['subscribe_text_color']; ?>; background: <?php echo $the_cs_template_options['subscribe_bg_color']; ?>;">
				    <?php
				    $subscribe = CSAdminOptions::getDefaultStrings('subscribe_text');
				    $post = substr($subscribe, 0, 20);
				    if (strlen($post) > 15) {
					echo $post;
					echo "...";
				    } else {
					echo $post;
				    }
				    ?>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="thankyou hidden" style="margin-top: -90px;">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <div class="text-center"> <?php echo CSAdminOptions::getDefaultStrings('alert_thankyou'); ?></div>
                        </div>
                    </div>
                    <div class="error-msg hidden" style="margin-top: 0px;">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <div class="text-center" id='error-msg-text'> </div>
                        </div>
                    </div>
                    <div class="social">
			<?php
			$twitter = $the_cs_template_options['common_social_twitter'];
			$facebook = $the_cs_template_options['common_social_facebook'];
			$pinterest = $the_cs_template_options['common_social_pinterest'];
			$gplus = $the_cs_template_options['common_social_googleplus'];
			$youtube = $the_cs_template_options['common_social_youtube'];
			$instagram = $the_cs_template_options['common_social_instagram'];
			$behance = $the_cs_template_options['common_social_behance'];
			$linkedin = $the_cs_template_options['common_social_linkedin'];
			?>
                        <ul>
                            <li class="<?php echo empty($twitter) ? 'hidden' : ''; ?>"><a href="<?php echo $twitter; ?>"><div class="social-icon"><span class="fa fa-twitter"></span></div></a></li>
                            <li class="<?php echo empty($facebook) ? 'hidden' : ''; ?>"><a href="<?php echo $facebook; ?>"><div class="social-icon"><span class="fa fa-facebook"></span></div></a></li>
                            <li class="<?php echo empty($pinterest) ? 'hidden' : ''; ?>"><a href="<?php echo $pinterest; ?>"><div class="social-icon"><span class="fa fa-pinterest"></span></div></a></li>
                            <li class="<?php echo empty($gplus) ? 'hidden' : ''; ?>"><a href="<?php echo $gplus; ?>"><div class="social-icon"><span class="fa fa-google-plus"></span></div></a></li>
                            <li class="<?php echo empty($instagram) ? 'hidden' : ''; ?>"><a href="<?php echo $instagram; ?>"><div class="social-icon"><span class="fa fa-instagram"></span></div></a></li>
                            <li class="<?php echo empty($youtube) ? 'hidden' : ''; ?>"><a href="<?php echo $youtube; ?>"><div class="social-icon"><span class="fa fa-youtube"></span></div></a></li>
                            <li class="<?php echo empty($behance) ? 'hidden' : ''; ?>"><a href="<?php echo $behance; ?>"><div class="social-icon"><span class="fa fa-behance"></span></div></a></li>
                            <li class="<?php echo empty($linkedin) ? 'hidden' : ''; ?>"><a href="<?php echo $linkedin; ?>"><div class="social-icon"><span class="fa fa-linkedin"></span></div></a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
			    <?php
			    $powered_by = $the_cs_template_options['general_powered_by'];
			    if ($powered_by == 1) {
				$class = "visible";
			    } else {
				$class = "hidden";
			    }
			    ?>
                            <div class="<?php echo $class; ?> text-center" id="powered-by">
                                Powered by <a href="https://wordpress.org/plugins/igniteup/" target="_blank">IgniteUp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
	<script src='<?php echo plugins_url('includes/js/jquery.min.js', CSCS_FILE) ?>' type="text/javascript"></script>
	<script src='<?php echo plugins_url('includes/templates/launcher/js/jquery.countdown.js', CSCS_FILE) ?>' type="text/javascript"></script>
        <script type="text/javascript">
	    var count_completed = false;
	    $countdown = "<?php
			    echo $the_cs_template_options['launch_date'];
			    echo ' ';
			    echo $the_cs_template_options['launch_time'];
			    ?>";
	    jQuery("#secs").countdown($countdown, function (event) {
		jQuery(this).text(event.strftime('%S'));
		checkSeconds(jQuery(this).text());


	    });
	    jQuery("#mins")
		    .countdown($countdown, function (event) {
			jQuery(this).text(
				event.strftime('%M')
				);
			checkMins(jQuery(this).text());
		    });
	    jQuery("#hrs")
		    .countdown($countdown, function (event) {
			jQuery(this).text(
				event.strftime('%H')
				);
			checkHours(jQuery(this).text());
		    });
	    jQuery("#days")
		    .countdown($countdown, function (event) {
			jQuery(this).text(
				event.strftime('%D')
				);
			checkDays(jQuery(this).text());
		    });

	    function checkSeconds(sec) {
		if (sec === '01') {
		    jQuery("#sec-s").addClass('hidden');
		} else {
		    jQuery("#sec-s").removeClass('hidden');
		}
	    }

	    function checkMins(min) {
		if (min === '01') {
		    jQuery("#min-s").addClass('hidden');
		} else {
		    jQuery("#min-s").removeClass('hidden');
		}
	    }
	    function checkHours(hrs) {
		if (hrs === '01') {
		    jQuery("#hrs-s").addClass('hidden');
		} else {
		    jQuery("#hrs-s").removeClass('hidden');
		}
	    }
	    function checkDays(days) {
		if (days === '01') {
		    jQuery("#day-s").addClass('hidden');
		} else {
		    jQuery("#day-s").removeClass('hidden');
		}
	    }
	    jQuery(document).ready(function () {
<?php if (!empty($the_cs_template_options['launch_date']) || !empty($the_cs_template_options['launch_time'])): ?>
    		jQuery('#secs').countdown($countdown).on('finish.countdown', function () {
    		    jQuery('#countdown').hide();
    		    jQuery(".main-container").css('margin-top', '120px');
    		    jQuery("#rocket").css('margin-top', '-=120');
    		    count_completed = true;

    		    jQuery('#rocket').addClass('animated bounceOutUp');
    		    setTimeout(function () {
    			jQuery("#rocket").css('margin-top', '-75px');
    			jQuery('#rocket').removeClass('bounceOutUp');
    			jQuery('#rocket').addClass('bounceInUp');
    		    }, 3000);
    		});
<?php endif; ?>
	    });

	    jQuery('.subscribe-btn').on('click', function () {
		subscribe();
	    });
	    jQuery('#cs_email').on('keypress', function (e) {
		if (e.which == 13) {
		    subscribe();
		}
	    });

	    function subscribe() {
		jQuery('.subscribe-btn, #cs_email').attr('disabled', true);
		jQuery.ajax({
		    url: '<?php echo admin_url('admin-ajax.php'); ?>',
		    data: {action: 'subscribe_email', cs_email: jQuery("#cs_email").val()},
		    dataType: 'json',
		    success: function (data) {
			if (data['error']) {
			    jQuery('.error-msg #error-msg-text').html(data['message']);
			    jQuery('.error-msg').removeClass('hidden');
			    jQuery('.error-msg').addClass('animated fadeIn');
			    function hideMsg() {
				jQuery('.error-msg').addClass('fadeOut');
			    }
			    setTimeout(hideMsg, 4000);
			    function showMsg() {
				jQuery('.error-msg').addClass('hidden');
				jQuery('.error-msg').removeClass('animated fadeIn fadeOut');
			    }
			    setTimeout(showMsg, 4500);
			    jQuery('.subscribe-btn, #cs_email').attr('disabled', false);
			} else {
			    jQuery('.subscribe').addClass('animated fadeOutDown');
			    jQuery('.thankyou').removeClass('hidden');
			    jQuery('.thankyou').addClass('animated fadeIn');
			}
		    }
		});
	    }
	    jQuery(function ($) {
		$('#rocket').hover(function () {
		    $(this).animate({'margin-top': "-=50"});
		}, function () {
		    if (count_completed) {
			$(this).animate({'margin-top': "30px"});
		    } else {
			$(this).animate({'margin-top': "150px"});
		    }
		});
	    });
        </script>
	<?php igniteup_footer(); ?>
    </body>
</html>
