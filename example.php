<!-- simple form example -->

<html>
	<head>
		<title>DMARC Compliance Check in PHP</title>
	</head>
	<body>
		<form action="" method="Post" name="check">
<?php

/**
 * Created by ToTheBeat.CEO 
 * @package zulu-trusted-sender
 * subversion - DMARC-Check 
 * @version 0.02
 * @author Dave Barnes (tothebeatCEO/zulu-trusted-sender) <tothebeat.ceo@gmail.com>
 * DMARC Check for general SPOOF protection
 * Used as part if the Zulu eDM Trusted Sender Program 
 * Returns True if implemented with > Quarantine + pct == 100pc
 * Date: 18/05/2018
 * URL being used for public help https://zuluedm.com/trusted-sender
 */

include __DIR__ . '/pathtofunction/Trusted-Sender-DMARC.php';

if (isset($_POST['emaildomain'])) {
// see if the form posted 
	 echo '<input type="text" class="form-control" name="emaildomain"  value="' . $_POST["emaildomain"] . '">';
   
	if (setDMARCpof($_POST["emaildomain"]) === true) {
        	echo "<pre>";
        	echo "True, you have a safe domain";
        	echo "</pre>";
    	} else {

    		echo "<pre>";
        	echo "False, delete the email";
        	echo "</pre>";
} else {
		 echo '<input type="text" class="form-control" name="emaildomain" value="zululabs.com">';
	}
}
  
?>
<input type="submit"  value="Check" name="check" onclick="showLoader();">
</form>
	</body>
</html>


