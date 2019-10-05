<?php
/**
 * Created by ToTheBeat.CEO 
 * @package zulu-trusted-sender
 * @version 1.00
 * @author Dave Barnes (tothebeatCEO/zulu-trusted-sender) <tothebeat.ceo@gmail.com>
 * DMARC Check for general SPOOF protection
 * Used as part if the Zulu eDM Trusted Sender Program 
 * Returns True if implemented with > Quarantine + pct == 100pc
 * Date: 18/05/2018
 */

include 'Trusted-Sender-DMARC.php';
//composer  use PHPAutoLoad.php

// to call the function that is included using the 
// include or require call
// you need to parse a URL to return the function setDMARCpof


 $setURL = "zululabs.com";

 if (setDMARCpof($setURL) === true) {
        echo "True";
    } else {
        echo "False";
   }
?>


