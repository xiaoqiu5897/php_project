<?php 
/**
 * 
 */
class Middleware
{
	
	function isLogin()
	{
		if (!isset($_SESSION['isLogin'])) {
			header('Location: ?mod=login&act=callForm');
		}
	}
}

 ?>