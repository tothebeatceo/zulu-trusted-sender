<?php
/**
 * Created by tothebeatceo
 * @author Dave Barnes tothebeat.ceo@gmail.com
 *  @version 1.0
 *  @license MIT License
 *  @description: The algorithm loops through the input domain
 * to ascertain if a DMARC record exists and if it does exist 
 * then does the record protect the domain with a reject or  quarantine 
 * policy for 100% of all mail, sp policeis must not differ or it will return false
 * User: Dave
 * Date: 18/05/2018
 * Updated: 05/09/2019
 * Time: 12:46 AM
 */


function setDMARCpof($vargetURL)
{
    $domain = "_dmarc." . $vargetURL;
 /**
 * @var $showResult array or string get the DNS entry for _dmarc.domain.com  
*/
    $showResult = dns_get_record($domain, DNS_TXT);
    if (!$showResult) {
        return false;
    } else {

            $j = count($showResult);
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
            echo $varDMARC;
            return false;
        } else {
            //////////// this is the code to ascertain safetyfom DMARC
            If (strpos($varDMARC, "none") > 1) {
                return false;
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
