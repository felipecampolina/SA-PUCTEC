<?php
// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
   exit;
}

if (!function_exists('upvf_config_callback')) {
	function upvf_config_callback(){
		if (!current_user_can('manage_options')){
			wp_die( __('You do not have sufficient permissions to access this page.', 'user-private-files') );
		}
		?>

		<!-- Banner HTML -->
		<div class="upfp_banner">
			<div class="banner_col-1"></div>
			<div class="upfp_btn-container">
				<div class="contains_btn">
					<a id="btn1" class="upfp_btn" href="https://userprivatefiles.com/product/user-private-files-pro/" target="_blank">Get PRO Version</a>
					<a id="btn1" class="upfp_btn" href="https://userprivatefiles.com/#contactus" target="_blank">Contact Us</a>
					<a id="btn2" class="upfp_btn" href="https://userprivatefiles.com/documentation/installing-plugin-frontend-file-manager-pro/" target="_blank">Documentation</a>
				</div>	
			</div>
		</div>

		<?php
		
		$active_menu = 'settings';
		if(isset($_GET['tab']) && $_GET['tab']){
			$active_menu = $_GET['tab'];
		}
		?>

		<!-- Tabs Navbar HTML -->
		<nav class="upfp_tab-container">
			<a href="<?php echo get_admin_url(); ?>admin.php?page=upvf-free&tab=settings" class="tabs <?php echo ($active_menu == 'settings' ? 'upfp_active' : ''); ?>">Settings</a>
			<a href="<?php echo get_admin_url(); ?>admin.php?page=upvf-free&tab=storage" class="tabs <?php echo ($active_menu == 'storage' ? 'upfp_active' : ''); ?>">Storage</a>
			<a href="<?php echo get_admin_url(); ?>admin.php?page=upvf-free&tab=login" class="tabs <?php echo ($active_menu == 'login' ? 'upfp_active' : ''); ?>">Log In</a>
			<a href="<?php echo get_admin_url(); ?>admin.php?page=upvf-free&tab=customizer" class="tabs <?php echo ($active_menu == 'customizer' ? 'upfp_active' : ''); ?>">Customizer</a>
		</nav>

		<?php
		if($active_menu == 'storage'){
			include(plugin_dir_path(__FILE__ ) . 'gdrive_settings-free.php');
			upvf_pro_gdrive_callback();
		} 
		elseif($active_menu == 'login'){
			include(plugin_dir_path(__FILE__ ) . 'login_setting-free.php');
			$upfp_login_obj = new UPFP_LOGIN_FUNC();
			$upfp_login_obj->upvf_pro_login_menu();
		}
		elseif($active_menu == 'customizer'){
			include(plugin_dir_path(__FILE__ ) . 'customizer-free.php');
			upvf_pro_customiser_callback();
		}
		else{
			
			
			if($_POST){
				if(isset($_POST['upfp_settings_submit'])){

					$nonce = sanitize_text_field($_REQUEST['_wpnonce']);
					if (!wp_verify_nonce($nonce, 'upfp_settings_option')) {
						wp_die(__('error - Could not verify POST values', 'user-private-files'));
					}
					
					if(isset($_POST['upfp_enable_email_field'])){
						$upfp_enable_email_field = filter_var($_POST['upfp_enable_email_field'], FILTER_SANITIZE_STRING);
						if($upfp_enable_email_field == 'on'){
							update_option('upfp_enable_email', 'yes');
						}
					} else{ update_option('upfp_enable_email', 'no'); }
					
					if(isset($_POST['upfp_email_subject_field'])){
						$upfp_email_subject = sanitize_text_field($_POST['upfp_email_subject_field']);
						update_option('upfp_email_subject', $upfp_email_subject);
					}
					
					if(isset($_POST['upfp_email_content_field'])){
						$upfp_email_content = stripslashes( $_POST['upfp_email_content_field'] );
						$upfp_email_content = sanitize_textarea_field( htmlentities($upfp_email_content) );
						
						update_option('upfp_email_content', $upfp_email_content);
					}
					
					// Saved message
					echo '<div class="notice notice-success is-dismissible"><p>Settings Saved!</p></div>';
					
				}
			}
			
			
		?>
			<!-- Pages HTMl -->
			<div class="wrap">
				<div id="upvf_pro_settings">
					<form method='POST' action="">
						<?php 
						wp_nonce_field('upfp_settings_option');
						?>
						<div class="upfp_setting-container">
							<h2 class="heading">General Settings - (PRO Feature)</h2>
							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<label>Enable role based sharing for all users</label>
									<i id="upfp_icon1" class="fas fa-info-circle upfp_icon" aria-hidden="true"></i>
								</div>

								<div class="upfp_col-2">
									<div id="upfp_setting-toggle" class="upfp_toggle_setting">
										<div class="upfp_toggle-check">
											<input type="checkbox" name="field1" id="field1" disabled readonly="readonly">
											<div class="upfp_round"></div>
										</div>
									</div>
								</div>								
							</div>
							
							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<label for="upfp_enable_sort_field">Enable Sorting</label>
								</div>
								
								<div class="upfp_col-2">
									<div id="upfp_setting-toggle" class="upfp_toggle_setting">
										<div class="upfp_toggle-check">
											<input type="checkbox" id="upfp_enable_sort_field" disabled readonly="readonly">
											<div class="upfp_round"></div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<label>Disable Uploading for</label>
									<i id="upfp_icon2" class="fa-solid fa-circle-info upfp_icon"></i>
								</div>

								<div class="upfp_col-2">
									<select id="field2" class="chosen-select" name="field2" multiple disabled readonly="readonly"></select>
								</div>
							</div>
						</div>
						
						
						
						<div class="upfp_setting-container">
							<h2 class="heading">Notification Settings</h2>

							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<label>Enable Frontend Notification (PRO Feature)</label>
								</div>

								<div class="upfp_col-2">
									<div id="upfp_setting-toggle" class="upfp_toggle_setting">
										<div class="upfp_toggle-check">
											<input type="checkbox" name="field_notif" id="field_notif" disabled readonly="readonly">	
											<div class="upfp_round"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<?php $upfp_enable_email = get_option('upfp_enable_email'); ?>
									<label>Enable Email Notification</label>
								</div>

								<div class="upfp_col-2">
									<div id="upfp_setting-toggle" class="upfp_toggle_setting <?php echo ($upfp_enable_email == 'yes' ? 'parent_toggle' : ''); ?>">
										<div class="upfp_toggle-check">
										<input type="checkbox" name="upfp_enable_email_field" id="upfp_enable_email_field" <?php echo ($upfp_enable_email == 'yes')?'checked':''; ?>>
											<div class="upfp_round <?php echo ($upfp_enable_email == 'yes' ? 'child_toggle' : ''); ?>"></div>
										</div>
									</div>
								</div>
							</div>

							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<?php $upfp_email_subject = get_option('upfp_email_subject'); ?>
									<label for="upfp_email_subject_field">Email Subject</label>
								</div>

								<div class="upfp_col-2">
									<input type="text" name="upfp_email_subject_field" id="upfp_email_subject_field" class="upfp_input" placeholder="e.g. {user} shared a file / folder with you on <?php echo get_bloginfo( 'name' ); ?>" value="<?php echo $upfp_email_subject; ?>">
								</div>
							</div>

							<div class="upfp_inner-container">
								<div class="upfp_col-1">
									<?php $upfp_email_content = html_entity_decode( get_option('upfp_email_content') ); ?>
									<label for="upfp_email_content_field">Email Content <br> <small>(html allowed)</small></label>
								</div>

								<div class="upfp_col-2">
									<textarea name="upfp_email_content_field" id="upfp_email_content_field" class="upfp_input" rows="5" placeholder="e.g. {user} shared a file / folder with you on <?php echo get_bloginfo( 'name' ); ?>. Login and check your files"><?php echo $upfp_email_content; ?></textarea>
								</div>
							</div>
						
						</div>
						
						<div class="upfp_admin_save">
							<input type="submit" name="upfp_settings_submit" class="button-primary" value="Save"/>
						</div>
						
					</form>

					<!--POP-UP-->
					<div id="upfp_popup-container-1" class="upfp_popup-container">
						<div class="upfp_pop-up">
							<span id="upfp_close-popup1" class="upfp_close-popup">X</span>
							<h3 class="heading">Enable role based sharing for all users</h3>
							<p>By default, users can share with email address one by one. Only admin is allowed to share files on role basis or to all users at once. Enabling this will allow all users share their files with all users and role based users at once.</p>
						</div>
					</div>

					<!--POP-UP-->	
					<div id="upfp_popup-container-2" class="upfp_popup-container">
						<div class="upfp_pop-up">
							<span id="upfp_close-popup2" class="upfp_close-popup">X</span>
							<h3 class="heading">Disable Uploading for</h3>
							<p>This will restrict them to upload only in the shared folders with full-access.</p>
						</div>
					</div>
				</div>
			</div>
		
		<?php
		}
	}
}
