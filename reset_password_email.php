<?php 
// User Info



//$author_id = $user_info->ID; 
$reset_password_title = ot_get_option('bonuin_reset_pswd_email_title');
$reset_password_title_paragraph = ot_get_option('bonuin_reset_pswd_email_subtitle');
$reset_password_title_paragraph2 = ot_get_option('bonuin_reset_pswd_email_paragraph2');
$reset_password_title_paragraph3 = ot_get_option('bonuin_reset_pswd_email_paragraph3');

	
?>
			<div class="bonuin_email_header header_color text-center">
              <div class="welcome-email">
                  <div class="site_logo">
                      <img src="<?php echo $email_logo;?>" width="120px"/>
                  </div>
                  <div class="header_email_title">
                      <h1>
						<?php echo esc_attr($reset_password_title);?> 
					  </h1>
                      <p class="bold">
						<?php echo esc_attr($reset_password_title_paragraph);?>
                      </p>
                  </div>

              </div>
		   </div>
			
			
          <div class="bonuin_email_content">
            <div class="email_title text-center">
			
					<h2><?php echo esc_attr($username);?></h2>
				 <div class="intro_section">
						<p>
							<?php echo esc_attr($reset_password_title_paragraph2);?>
                        </p>
						
						<p>
							<?php echo esc_attr($reset_password_title_paragraph3);?>
						</p>
                        <div class="callout_btn">
							<a href="<?php echo network_site_url("wp-login.php?action=rp&key=$key&login=" . $username, 'login');?>" class="btn btn_border btn_red"><?php _e('Reset Password','bonuin_templates');?></a>
                        </div>
				</div>
                

                

               
            </div>
          </div>
