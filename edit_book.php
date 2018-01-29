<?php 
/**
 *更新数据库中的图书信息
 */
	require_once('book_sc_fns.php');
	session_start();

	do_html_header("Updating book");
	if(check_admin_user()){
		if(filled_out($_POST)){
			$oldisbn=$_POST['oldisbn'];
			$isbn=$_POST['isbn'];
			$title = $_POST['title'];
		    $author = $_POST['author'];
		    $catid = $_POST['catid'];
		    $price = $_POST['price'];
		    $description = $_POST['description'];

		    if(update_book($oldisbn, $isbn, $title, $author, $catid, $price, $description)){
		    	echo "<p>Book was updated.</p>";
		    }else{
		    	echo "<p>Book could not be updated.</p>";
		    }
		}else{
			echo "<p>You have not filled out the form. Please try again.</p>";
		}
		do_html_URL("admin.php","Back to administration menu");
	}else{
		echo "<p>You are not authorised to view this page.</p>";
	}

	do_html_footer();
 ?>