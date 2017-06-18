<?php 
add_filter( 'wp_mail_from', 'custom_wp_mail_from' );
function custom_wp_mail_from( $original_email_address ) {
	$admin_email = get_option('admin_email');
	return $admin_email;
}

add_filter( 'wp_mail_from_name', 'custom_wp_mail_from_name' );
function custom_wp_mail_from_name( $original_email_from ) {
	$blogname = get_option('blogname');
	return $blogname;
}

// MAIN EMAIL FUNCTION 
function bonuin_send_email($email_to,$email_type,$key = '',$username = ''){
	$admin_email = get_option('admin_email');
	
	// Add reply to option . 
	$reply_to = $admin_email;

	$headers = "Reply-To: ". strip_tags($reply_to) . "\r\n";
	//$headers .= "CC: susan@example.com\r\n";	
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	// Social Settings
	$enable_facebook =  ot_get_option('bonuin_welcome_email_title');
	$enable_twitter  =  ot_get_option('bonuin_welcome_email_title');
	$enable_pinterest  =  ot_get_option('bonuin_welcome_email_title');
	$enable_google 	=  ot_get_option('bonuin_welcome_email_title');
	$enable_dribbble =  ot_get_option('bonuin_welcome_email_title');
	$enable_linkedin =  ot_get_option('bonuin_welcome_email_title');
	$enable_instagram =  ot_get_option('bonuin_welcome_email_title');
	
	
	// Logo Settings
	$email_logo = ot_get_option('email_logo');
	

	// Publisher Pages URL
	$profile_url = bonuin_get_page_url('dashboard_profile_page');	
	$add_listing_url = bonuin_get_page_url('dashboard_add_listing_page');	
	$test_drive_page = bonuin_get_page_url('dashboard_scheduled_test_drives_page');	
	$offers_page = bonuin_get_page_url('dashboard_offers_page');

		
	if ($profile_url == '') {
		$profile_url = get_site_url();
	}	
	if ($add_listing_url == '') {
		$add_listing_url = get_site_url();
	}
	if ($test_drive_page == '') {
		$test_drive_page = get_site_url();
	}
	if ($offers_page == '') {
		$offers_page = get_site_url();
	}

	// Email Subjects
	
	$subject = '' ;
	switch ($email_type){
					case 'welcome_email':
						$subject =  ot_get_option('bonuin_welcome_email_subject');
					break;
					case 'forget_password_email':
						$subject =  ot_get_option('bonuin_reset_pswd_email_subject');
					break;
						
					case 'publisher_schedule_test_drive_email';
						$subject =  ot_get_option('bonuin_schedule_test_drive_request_subject');
					break;
						
					case 'publisher_offer_email':
						$subject =  ot_get_option('bonuin_offer_submitted_subject');
					break;

	
	}	
	
	?>

	<?php 
		ob_start(); //Turn on output buffering 
	?> 

<html>
	<head>
	
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

	<style>
		body,i{color:#515554}a,h1,h2,h3,p{margin:10px;font-family:Montserrat,sans-serif}html{-webkit-font-smoothing:antialiased}body{background:#f1f1f1}h2{font-size:20px}h3{font-size:17px}p{font-size:13px;line-height:22px}a{font-size:12px;text-transform:uppercase;letter-spacing:1.2px}.bold{font-weight:600}.callout_btn{padding:16px 0}.btn{padding:11px 28px;text-decoration:none}.btn.btn_red{background:#fe595f;color:#fff}.bonuin_email_container{background:#f1f1f1;border:1px solid #f6f6f6}.container_width{width:100%;max-width:550px}.center_wrapper{margin:0 auto}.bonuin_email_header{padding:30px}.header_color{background:#fe595f}.text-center{text-align:center}.text-right{text-align:right}.text-left{text-align:left}.site_logo{border-bottom:1px solid #f48e92;padding-bottom:27px}.header_email_title{color:#fff;letter-spacing:1.2px}.header_email_title h1{margin-top:30px}.bonuin_email_content{background:#fff;display:table;width:100%;padding:20px 0}.listing_with_image{display:table;min-height:189px}.listing_with_image .image img{width:100%}.listing_with_image .image,.listing_with_image .listing_description{display:table-cell;vertical-align:middle;padding:31px}.border-seperator{padding-left:26px;padding-right:26px;padding-bottom:10px}.boder-seperator_content{position:relative;height:1px;width:100%;background:#f1f1f1}ul.social_icons{list-style:none;padding:0;text-align:center;width:100%;display:table}ul.social_icons a{text-decoration:none;font-size:20px}ul.social_icons li{display:inline-block;vertical-align:middle}
		.intro_section{
					width:100%;
					padding:12px 0;
					text-align:center;
				}
	</style>
				
	</head>


	<body>
		<div class="bonuin_email_wrapper">
			  <div class="bonuin_email_container container_width center_wrapper">

					
					<?php 
						switch ($email_type){
							case 'welcome_email':
								include(locate_template('/inc/emails/welcome_email.php'));
							break;
							case 'forget_password_email':
								include(locate_template('/inc/emails/reset_password_email.php'));
							break;
							case 'publisher_schedule_test_drive_email';
								include(locate_template('/inc/emails/schedule_test_drive_email.php'));
							break;
							case 'publisher_offer_email':
								include(locate_template('/inc/emails/vehicle_offer_email.php'));
							break;
						
					}
					
					?>
					
					 <div class="border-seperator">
						<div class="boder-seperator_content">
						</div>
					 </div>
				   
					  <ul class="social_icons text-center">
						<li>
							<a href="#"><i class="tomplabs-user-2"></i> </a>
						</li>
						<li>
							<a href="#"><i class="tomplabs-user-2"></i> </a>
						</li>
						<li>
							<a href="#"><i class="tomplabs-user-2"></i> </a>
						</li>
						<li>
							<a href="#"><i class="tomplabs-user-2"></i> </a>
						</li>
					  </ul>
					  <p class="text-center">
						<?php _e('This email is sent by Bonuin','bonuin_emails');?>
					  </p>
				
				
			  </div> <!-- end of bonuin_email_container -->


		</div><!-- end of bonuin_email_wrapper -->

	</body>
</html>

<?php 
		$message = ob_get_clean(); 
		
		$email_status = '';
		//send the email 
		$mail_sent = wp_mail( $email_to, $subject, $message, $headers ); 
		
		if ($mail_sent == '1'){
			$email_status = 'sent';
		}
		
		return $email_status ;
} 
?>