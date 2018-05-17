<?php
/**
 * Created by ToTheBeat.CEO.
 * DMARC Check for general SPOOF protection
 * Returns True if implemented with > Quarantine + pct == 100pc
 * Date: 18/05/2018
 * Time: 1:11 AM
 */
include 'Trusted-Sender-DMARC.php';
//composer  use AutoLoad.php
 $setURL = "zululabs.com";

 If (setDMARCpof($setURL) == True) {
        echo "True";
    } else {
        echo "False";
   }
?>


