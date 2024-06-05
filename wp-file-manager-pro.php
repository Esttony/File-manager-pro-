<?php
// ...

// Include necessary files
require_once WP_FILE_MANAGER_PRO_PATH . 'includes/class-wp-file-manager-pro.php';
require_once WP_FILE_MANAGER_PRO_PATH . 'includes/class-wp-file-manager-pro-admin.php';
require_once WP_FILE_MANAGER_PRO_PATH . 'includes/class-wp-file-manager-pro-frontend.php';
require_once WP_FILE_MANAGER_PRO_PATH . 'includes/class-wp-file-manager-pro-custom-file-type.php';

// Instantiate the main plugin class
function run_wp_file_manager_pro() {
    $plugin = new WP_File_Manager_Pro();
    $plugin->run();

    $custom_file_type = new WP_File_Manager_Pro_Custom_File_Type();
    $custom_file_type->init();
}
run_wp_file_manager_pro();