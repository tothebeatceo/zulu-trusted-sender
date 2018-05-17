<<<<<<< HEAD
<?php

//Email Domain Tools

include '../Trusted-Sender-DMARC.php';
require_once '../vendor/autoload.php';

// this is the call to the function 
// parse 2 parameters, the first being the domain
// the second the hetrixtools API 
// both are strings
//returns a boolean true = on a blacklist

function isBlacklisted($domain, $hetrixKey) {
		$clientCheck = $domain;
		$hetrixAPIKey = $hetrixKey;

 		$varURLGet = "https://api.hetrixtools.com/v2/" . $hetrixAPIKey . "/blacklist-check/domain/" . $clientCheck . "/";
 		$clientCheck = $varURLGet;
		$response = \Httpful\Request::get($clientCheck)->send();
		$blacklist = json_decode($response);

		if ($blacklist->blacklisted_count < 1) {
				return false;
		} else {
				return true; 
}

}

if (isBlacklisted("breatheasylabs.com", "a384930fec4c7c7342b3f7c477818f73") == true) {
echo "You are on a blacklist";

} else {
echo "Not on any monitored lists";
}
=======
<?php

//Email Domain Tools

include '../Trusted-Sender-DMARC.php';
require_once '../vendor/autoload.php';

// this is the call to the function 
// parse 2 parameters, the first being the domain
// the second the hetrixtools API 
// both are strings
//returns a boolean true = on a blacklist

function isBlacklisted($domain, $hetrixKey) {
		$clientCheck = $domain;
		$hetrixAPIKey = $hetrixKey;

 		$varURLGet = "https://api.hetrixtools.com/v2/" . $hetrixAPIKey . "/blacklist-check/domain/" . $clientCheck . "/";
 		$clientCheck = $varURLGet;
		$response = \Httpful\Request::get($clientCheck)->send();
		$blacklist = json_decode($response);

		if ($blacklist->blacklisted_count < 1) {
				return false;
		} else {
				return true; 
}

}

if (isBlacklisted("breatheasylabs.com", "a384930fec4c7c7342b3f7c477818f73") == true) {
echo "You are on a blacklist";

} else {
echo "Not on any monitored lists";
}
>>>>>>> ee8db90a692464acae5f1623338fe9d5ad781afa
?>