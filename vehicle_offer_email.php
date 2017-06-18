<?php 
// User Info
$user_info = get_user_by('email',$email_to);
$user_first_name = $user_info->first_name;

//$author_id = $user_info->ID; 
$offer_submitted_title = ot_get_option('bonuin_offer_submitted_title');
$offer_submitted_title_subtitle = ot_get_option('bonuin_offer_submitted_title_subtitle');

	
?>
			<div class="bonuin_email_header header_color text-center">
              <div class="welcome-email">
                  <div class="site_logo">
                      <img src="<?php echo $email_logo;?>" width="120px"/>
                  </div>
                  <div class="header_email_title">
                      <h1>
						<?php echo esc_attr($offer_submitted_title);?> <?php echo esc_attr($user_first_name);?>
					  </h1>
                      <p class="bold">
						<?php echo esc_attr($offer_submitted_title_subtitle);?>
                      </p>
                  </div>

              </div>
		   </div>
			
			
          <div class="bonuin_email_content">
            <div class="email_title text-center">
				
				<div class="intro_section">
						<p>
							<?php _e('A client just offered you a price in of your submitted vehicles','bonuin_emails');?>
                        </p>
						
						<p>
							<?php _e('To view your vehicle offers, please click on the button below','bonuin_emails');?>
						</p>
                        <div class="callout_btn">
							<a href="<?php echo $offers_page;?>" class="btn btn_border btn_red"><?php _e('View offers','bonuin_templates');?></a>
                        </div>
				</div>
                

                

               
            </div>
          </div>
