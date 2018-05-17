<form action="" method="Post">
<?php
/**
 * Created by ToTheBeat.CEO.
 * DMARC Check for general SPOOF protection
 * Returns True if implemented with > Quarantine + pct == 100pc
 * Date: 18/05/2018
 * Time: 1:11 AM
 */

include 'Trusted-Sender-DMARC.php';

//$formCheck = $_POST["check"];
//$varLen = strlen($_POST["check"]); // post form check

if (strlen($_POST["check"]) < 1) {
    echo 'Email Domain: <input type="text" name="emaildomain"  value="zululabs.com">';

} else {
    $setURL = $_POST["emaildomain"];
   // $setURL = "zululabs.com";
    echo 'Email Domain: <input type="text" name="emaildomain"  value="'.$setURL.'">';

if (setDMARCpof($setURL) == True)
    {
        echo "True";
    } else {
    echo "False";
}

}
?>
<input type="submit"  value="Check" name="check">
</form>



