<?php
## This is a template of required secrets for running the site.
##
## This should have the empty fields populated and renamed as SecureSettings.php
## during testing and deployment.

## Please stand by while we break stuff.
#$wgReadOnly = 'Touhou Wiki is undergoing a datacenter migration and will be unavailable in the interim; please wai^W watch warmly.';

#$wgDebugLogFile = "$IP/{$wgSitename}-debug_log.txt";
#$wgDebugLogFile = "$IP/thwiki-debug_log.txt";

## Place upgrade key here

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "database";
$wgDBname           = "touhouwiki";
$wgDBuser           = "thwiki";
$wgDBpassword       = "";

$wgSecretKey = "";

#$wgDisableAuthManager = "true";

#$wgShowExceptionDetails = true;
#$wgShowDBErrorBacktrace = true;

## Mail settings
## UPO: User preference option
$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO
$wgPasswordSender   = "wiki@touhouwiki.net";

$wgSMTP = [
    'host' => 'smtp.gmail.com', // outbox server of the email account
    'IDHost' => 'touhouwiki.net',
    'port' => 587,
    'username' => '', // user of the email account
    'password' => '', // app password of the email account
    'auth' => true
];

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

# CVE mitigations
$wgActions['mcrundo'] = false;
$wgActions['mcrrestore'] = false;

$wgDevelopmentWarnings = false;
