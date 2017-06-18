<?php 

$user_info = get_user_by('email',$email_to);
$user_first_name = $user_info->first_name;

// Title Settings
$welcome_title = ot_get_option('bonuin_welcome_email_title');
$welcome_subtitle = ot_get_option('bonuin_welcome_email_subtitle');
	

if ($welcome_title == ''){
	$welcome_title = 'Welcome';
}

?>
			<div class="bonuin_email_header header_color text-center">
              <div class="welcome-email">
                  <div class="site_logo">
                      <img src="<?php echo $email_logo;?>" width="120px"/>
                  </div>
                  <div class="header_email_title">
					  
                      <h1>
						<?php echo esc_attr($welcome_title);?>
					  </h1>
                      <p class="bold">
						<?php echo esc_attr($welcome_subtitle);?>
                      </p>
                  </div>

              </div>
		   </div>
			
			
          <div class="bonuin_email_content">
            <div class="email_title text-center">
                <h2><?php echo esc_attr($user_first_name);?>, <?php _e('Before starting your adventure.<br>Do you know that you can...','bonuin_emails');?></h2>
                <div class="listing_with_image text-center">
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/emails/welcome_email/image.png';?>" />
                    </div>
                    <div class="listing_description text-left">
                        <h3><?php _e('Create a profile','bonuin_emails');?></h3>
                        <p>
                          In Bonuin , you can create your own profile and add profile and cover images . Than you can share your link with your audience .
                        </p>
                        <div class="callout_btn">
							<a href="<?php echo $profile_url;?>" class="btn btn_border btn_red">Edit profile</a>
                        </div>

                    </div>
                </div>
                <div class="border-seperator">
                    <div class="boder-seperator_content">
                    </div>
                </div>

                <div class="listing_with_image text-center">
                  <div class="listing_description text-left">
                      <h3>Add listings</h3>
                      <p>
                        In Bonuin , you can create your own profile and add profile and cover images . Than you can share your link with your audience .
                      </p>
                      <div class="callout_btn">
						
                          <a href="<?php echo $add_listing_url;?>" class="btn btn_border btn_red">Add Listing</a>
                      </div>

                  </div>
                    <div class="image">
                      <img src="<?php echo get_template_directory_uri().'/assets/images/emails/welcome_email/image.png';?>" />
                    </div>

                </div>
                <div class="border-seperator">
                    <div class="boder-seperator_content">
                    </div>
                </div>


                <div class="listing_with_image text-center">

                    <div class="image">
                       <img src="<?php echo get_template_directory_uri().'/assets/images/emails/welcome_email/image.png';?>" />
                    </div>
                    <div class="listing_description text-left">
                        <h3>View Offers</h3>
                        <p>
                          In Bonuin , you can create your own profile and add profile and cover images . Than you can share your link with your audience .
                        </p>
						
                        <div class="callout_btn">
                            <a href="<?php echo $offers_page;?>" class="btn btn_border btn_red">View offers</a>
                        </div>

                    </div>
                </div>
                <div class="border-seperator">
                    <div class="boder-seperator_content">
                    </div>
                </div>
                <div class="listing_with_image text-center">
                  <div class="listing_description text-left">
                        <h3><?php _e('Scheduled Drives','bonuin_emails');?></h3>
                        <p>
                          In Bonuin , you can create your own profile and add profile and cover images . Than you can share your link with your audience .
                        </p>
						<div class="callout_btn">
                            <a href="<?php echo $test_drive_page;?>" class="btn btn_border btn_red"><?php _e('View schedules','bonuin_emails');?></a>
                        </div>

                    </div>
                    <div class="image">
                       <img src="<?php echo get_template_directory_uri().'/assets/images/emails/welcome_email/image.png';?>" />
                    </div>
                </div>

               
            </div>
          </div>
