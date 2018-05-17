<!-- simple form example -->

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

include 'Trusted-Sender-DMARC.php';


// see if the form posted 

	If (strlen($_POST["check"]) > 1) {
	    $setURL = $_POST["emaildomain"];
   // $setURL = "zululabs.com";
    echo 'Email Domain: <input type="text" name="emaildomain"  value="'.$setURL.'">';

	if (setDMARCpof($setURL) == True)
    {
        echo "<pre>";
        echo "True, you have a safe domain";
        echo "</pre>";
    } else {

    echo "<pre>";
        echo "False, delete the email";
        echo "</pre>";
}
  

	} else {
  echo 'Email Domain: <input type="text" name="emaildomain"  value="zululabs.com">';
}
?>
<input type="submit"  value="Check" name="check">
</form>



