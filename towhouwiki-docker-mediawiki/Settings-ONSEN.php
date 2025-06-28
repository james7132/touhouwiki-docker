<?php
require_once("/var/www/touhouwiki.net/htdocs/CommonSettings.php");

$wgSitename         = "Touhou Wiki Commons";
$wgLogo             = "$wgScriptPath/skins/common/images/alicelogo.png";
$wgDBprefix         = "thwikiOnsen_";
$wgServer           = //onsen.touhouwiki.net
$wgLanguageCode = "en";

$wgGroupPermissions = array();

$wgGroupPermissions['*'    ]['createaccount']	= false;
$wgGroupPermissions['*'    ]['read']     	= true;
$wgGroupPermissions['*'    ]['edit']            = false;
$wgGroupPermissions['*'    ]['createpage']      = false;
$wgGroupPermissions['*'    ]['createtalk']      = false;
$wgGroupPermissions['*'    ]['writeapi']        = true;
$wgGroupPermissions['user' ]['read']          = true;
$wgGroupPermissions['user' ]['edit']          = true;
$wgGroupPermissions['user' ]['createpage']      = true;
$wgGroupPermissions['user' ]['upload']          = true;
$wgGroupPermissions['user' ]['reupload']        = true;
$wgGroupPermissions['user' ]['reupload-shared'] = true;
$wgGroupPermissions['autoconfirmed' ]['read']          = true;
$wgGroupPermissions['autoconfirmed' ]['edit']          = true;
$wgGroupPermissions['autoconfirmed' ]['createpage']      = true;
$wgGroupPermissions['autoconfirmed' ]['upload']          = true;
$wgGroupPermissions['autoconfirmed' ]['reupload']        = true;
$wgGroupPermissions['autoconfirmed' ]['reupload-shared'] = true;
$wgGroupPermissions['sysop' ]['read']          = true;
$wgGroupPermissions['sysop' ]['edit']          = true;
$wgGroupPermissions['sysop' ]['createpage']      = true;
$wgGroupPermissions['sysop' ]['upload']          = true;
$wgGroupPermissions['sysop' ]['reupload']        = true;
$wgGroupPermissions['sysop' ]['reupload-shared'] = true;
$wgGroupPermissions['sysop']['delete']          = true;
$wgGroupPermissions['sysop']['deletedhistory']  = true;
$wgGroupPermissions['sysop']['editinterface'] = true;
$wgGroupPermissions['sysop']['editprotected'] = true;
$wgGroupPermissions['sysop']['move']          = true;
$wgGroupPermissions['sysop']['movefile']      = true;
$wgGroupPermissions['bureaucrat' ]['read']          = true;
$wgGroupPermissions['bureaucrat' ]['edit']          = true;
$wgGroupPermissions['bureaucrat' ]['createpage']      = true;
$wgGroupPermissions['bureaucrat' ]['upload']          = true;
$wgGroupPermissions['bureaucrat' ]['reupload']        = true;
$wgGroupPermissions['bureaucrat' ]['reupload-shared'] = true;
$wgGroupPermissions['bureaucrat']['delete']          = true;
$wgGroupPermissions['bureaucrat']['deletedhistory']  = true;
$wgGroupPermissions['bureaucrat']['editinterface'] = true;
$wgGroupPermissions['bureaucrat']['editprotected'] = true;
$wgGroupPermissions['bureaucrat']['move']          = true;
$wgGroupPermissions['bureaucrat']['movefile']      = true;
$wgGroupPermissions['bot' ]['read']          = true;
$wgGroupPermissions['bot' ]['edit']          = true;
$wgGroupPermissions['bot' ]['createpage']      = true;
$wgGroupPermissions['bot' ]['upload']          = true;
$wgGroupPermissions['bot' ]['reupload']        = true;
$wgGroupPermissions['bot' ]['reupload-shared'] = true;
$wgGroupPermissions['bot']['move-subpages']  = true;
$wgGroupPermissions['bot']['move-rootuserpages']  = true;
$wgGroupPermissions['bot']['movefile']  = true;

## re-enable for mass-upload purposes, otherwise leave disabled
#require_once("$IP/extensions/UploadLocal/UploadLocal.php");

#$wgShowExceptionDetails = true;
#$wgDebugLogFile = "$IP/{$wgSitename}-debug_log.txt";

## DiscordNotification
$wgDiscordFromName = "Touhou Wiki (Onsen)";
$wgWikiUrl            = "https://onsen.touhouwiki.net/";
