<<<<<<< HEAD
![zulu-trusted-sender](https://zuluedm.com/trusted-sender/1.0/dist/img/ShakaTrustedSenderTrans320.png)
 
 * Created by ToTheBeat.CEO 
 * @package zululabs/zulu-trusted-sender
 * @version 1.0
 * @files Trusted-Sender-DMARC.php (main function) call.php (calling the main function) and
 example.php which is a form submission.
 * @author Dave Barnes (tothebeatCEO/zulu-trusted-sender) <tothebeat.ceo@gmail.com>
 * DMARC Check for general SPOOF protection
 * Used as part if the Zulu eDM Trusted Sender Program 
 * Returns True if implemented with > Quarantine + pct == 100pc
 * Date: 10/09/2019
 */
This script  is in action here [Email Checker](https://zuluedm.com/trusted-sender/?utm_source=Zulu%20eDM&utm_medium=Github&utm_campaign=Trusted%20Sender) 

As of this date less than 50% of the S&P 500 are DMARC protected. 202 have a record but very few are 100pct + quarantine or reject.

Email Cyber attacks are one thing but getting encouraging DMARC will make domains visible to 
the Webmail and FBL profviders Vs having an ESP return path. Therefore bad campaign practices
by lazy marketers, eBlasters and "marketing automation" systems will be held to account. Reputations (delivery) will slide unless better campaign practices are undertaken

Hopefully reducing the volume of email JUNK!!!  

```json
"zululabs/zulu-trusted-sender": "1.0"
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
# zulu-trusted-sender v1.0
PHP 7.0+ compatible and final example completed
