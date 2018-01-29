<?php 
/**
 *管理员编辑目录的表单
 */
	require_once('book_sc_fns.php');
	session_start();

	do_html_header("Edit category");
	if(check_admin_user()){
		if($catname=get_category_name($_GET['catid'])){
			$catid=$_GET['catid'];
			$cat=compact('catname','catid');
			display_category_form($cat);
		}else{
			echo "<p>Could not retrieve category details.</p>";
		}
		do_html_URL("admin.php","Back to administration menu");
	}else{
		echo "<p>You are not authorised to enter the administration area.</p>";
	}
	do_html_footer();
 ?>