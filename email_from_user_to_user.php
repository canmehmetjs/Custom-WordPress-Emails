<?php 
// Title Settings
$user_info = get_user_by('email',$email_to);

$user_first_name = $user_info->first_name;
$author_id = $user_info->ID; 


$schedule_test_drive_request_title = ot_get_option('bonuin_schedule_test_drive_request_title');
$schedule_test_drive_request_subtitle = ot_get_option('bonuin_schedule_test_drive_request_subtitle');

	
?>
			<div class="bonuin_email_header header_color text-center">
              <div class="welcome-email">
                  <div class="site_logo">
                      <img src="<?php echo $email_logo;?>" width="120px"/>
                  </div>
                  <div class="header_email_title">
                      <h1>
						<?php echo esc_attr($schedule_test_drive_request_title);?> <?php echo esc_attr($user_first_name);?>
					  </h1>
                      <p class="bold">
						<?php echo esc_attr($schedule_test_drive_request_subtitle);?>
                      </p>
                  </div>

              </div>
		   </div>
			
			
          <div class="bonuin_email_content">
            <div class="email_title text-center">
				
				<div class="intro_section">
						<p>
							<?php _e('A client just schedule a test drive request for one of your vehicles','bonuin_emails');?>
                        </p>
						
						<p>
							<?php _e('To view your scheduled drives , please click on the button below','bonuin_emails');?>
						</p>
                        <div class="callout_btn">
							<a href="<?php echo $test_drive_page;?>" class="btn btn_border btn_red"><?php _e('View scheduled drives','bonuin_templates');?></a>
                        </div>
				</div>
                

                

               
            </div>
          </div>
