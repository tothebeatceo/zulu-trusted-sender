
 ![zulu-trusted-sender](https://zuluedm.com/trusted-sender/assets/img/ShakaTrustedSenderTrans120.png)
 
 Trusted Sender DMARC Compliance Algorythm
 =====================
 Part of the Trusted Email Sender Community Initiative. Please check the [wiki](https://github.com/tothebeatceo/zulu-trusted-sender/wiki) for other development and ways you can help.
 <a href="https://liberapay.com/zululabsshaka/donate"><img alt="Donate using Liberapay" src="https://liberapay.com/assets/widgets/donate.svg"></a>
#### First Published  May 18, 2018 
 
 * Created by ToTheBeat.CEO 
 * @package zululabs/zulu-trusted-sender
 * @version v1.0.2
 * @files Trusted-Sender-DMARC.php (main function) call.php (calling the main function) and
 example.php which is a form submission.
 * @author Dave Barnes (tothebeatCEO/zulu-trusted-sender) <tothebeat.ceo@gmail.com>
 * DMARC Check for general SPOOF protection
 * Used as part if the Zulu eDM Trusted Sender Program 
 * Returns True if implemented with > Quarantine + pct == 100pc
 * Date: 10/09/2019
 */
 
 ## Use
 Use this script for checking if a domain id DMARC compliant, that means, instructions are set so that no mail will be delivered if the DMARC check fails. Setting sp=none and p=reject will not pass this check.
 
This script is in action here [Email Checker](https://zuluedm.com/trusted-sender/1.0/email-tools.php?utm_source=Zulu%20eDM&utm_medium=Github&utm_campaign=Trusted%20Sender) 

### DMARC Adoption & Research 
For further links please see our [wiki](https://github.com/tothebeatceo/zulu-trusted-sender/wiki)

This methodolgy can be applied to inbound email checks as well preventative checking.

Hopefully reducing the volume of email JUNK!!!  

```json
"zululabs/zulu-trusted-sender": "v1.0.2"
```

or run

```sh
composer require zululabs/zulu-trusted-sender
```



# zulu-trusted-sender v0.01
Check the DMARC record for p>none and pct. Important for domain protection and anti-SPOOF emails

# zulu-trusted-sender v0.02
Readme file and example.php tidied up

# zulu-trusted-sender v0.03
Added composer.json &  install

# zulu-trusted-sender v0.04
Function to use Hetrix tools blacklist API 
# zulu-trusted-sender v1.02
PHP 7.0+ compatible and final example completed
