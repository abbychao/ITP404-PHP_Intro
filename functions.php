
<?php
	
	function redirect($url) {
		header("Location:" . $url);
	}

	function validDomain($email) {
		$_domains = array('yahoo.com', 'gmail.com', 'usc.edu', 'hotmail.com', 'aol.com');
		foreach ($_domains as $domain) {
			if(strpos($email, $domain) != false) {
				return true;
			}
		}
		return false;
	}

	function validateEmail($email) {
		if(strpos($email,'@') != false and validDomain($email)) {
			return true;
		}
		else {
			return false;
		}
	}
?>