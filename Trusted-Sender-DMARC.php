<?php
/**
 * Created by tothebeat.ceo.
 * User: Dave
 * Date: 18/05/2018
 * Time: 12:46 AM
 */

  function setDMARCpof($vargetURL)
    {
       $domain = "_dmarc." . $vargetURL;
        /** @var get the DNS entry for _dmarc.domain.com $result */
        $showResult = dns_get_record($domain);
        $arrEmpty = empty($showResult);


        if ($arrEmpty == true) {
            return false;
        } else {

            $j = sizeof($showResult);
            $i = 0;
            if ($j > 1) {
                while ($i <= $j) {
                    If (strpos($showResult[$i]["txt"], "DMARC1") > 0) {
                        $varDMARC = $showResult[$i]["txt"];
                    }
                    $i++;
                }
            }else {
                $varDMARC = $showResult[$i]["txt"];
            }




            If (strpos($varDMARC, "DMARC1") < 1) {
                return false;
            } else {
//////////// this is the code to ascertain safetyfom DMARC
                If (strpos($varDMARC, "none") > 1) {
                    return false;
                    // echo "<pre>";
//    echo "Unfortunately this domain may have started the process but it remains
                    //  not to be trusted.";
                    //   echo "</pre>";

                } elseif (strpos($varDMARC, "reject") > 1) {
                    if (strpos($varDMARC, "pct=") > 1) {
                        if (strpos($varDMARC, "pct=100") > 1) {
                            return true;
                        }
                        return false;
                        //    echo "Percentage fail";
                    } else {
                        //   echo "Good and Percentage Good";
                        return true;
                    }
                } elseif (strpos($varDMARC, "quarantine") > 1) {
                    if (strpos($varDMARC, "pct=") > 1) {
                        if (strpos($varDMARC, "pct=100") > 1) {
                            return true;
                            // echo "Quarantine Percentage is good";
                        }
                        return false;
                        //  echo " Q Percentage fail";
                    } else {
                        return true;
                        //   echo "Q Good and Percentage Good";

                    }
                }
            }
        }

    }
//}
?>