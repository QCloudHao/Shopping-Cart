<?php 
/**
 *允许管理员修改密码的表格
 */
	require_once('book_sc_fns.php');
	session_start();
	do_html_header('Change administrator password');
	check_admin_user();
	display_password_form();
	do_html_URL("admin.php","Back to administration menu");
	do_html_footer();
 ?>