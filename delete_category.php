<?php 
/**
 *从数据库中删除一个目录
 */
	require_once('book_sc_fns.php');
	session_start();

	do_html_header("Deleting category");
	if(check_admin_user()){
		if(isset($_POST['catid'])){
			if(delete_category($_POST['catid'])){
				echo "<p>Category was deleted.</p>";
			}else{
				echo "<p>Category could not be deleted.<br />
					  This is usually because it is not empty.</p>";
			}
		}else{
			echo "<p>No category specified. Please try again.</p>";
		}
		do_html_URL("admin.php","Back to administration menu");
	}else{
		echo "<p>You are not authorized to view this page.</p>";
	}

	do_html_footer();
 ?>