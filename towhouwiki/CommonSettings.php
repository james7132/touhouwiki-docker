<?php

# Site-wide settings for Touhou Wiki
# See also:  includes/DefaultSettings.php, or Manual:Configuration_settings on mediawiki.org.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$wgBaseDirectory = MW_INSTALL_PATH;
} else {
	$wgBaseDirectory = dirname( __FILE__ );
}


## Secure Settings
include("$wgBaseDirectory/../SecureSettings.php");

## Extensions, extensions, extensions!
require_once( "$wgBaseDirectory/extensions/googleAnalytics/googleAnalytics.php" );
$wgGoogleAnalyticsAccount = "UA-34275641-1";

## Everything is a subpage!
$wgNamespacesWithSubpages = array_fill(0, 200, true);

$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;
$wgScriptExtension  = ".php";
#$wgJobRunRate = 0;

## Skin config
$wgStylePath        = "$wgScriptPath/skins";

wfLoadSkin( 'Vector' );
$wgVectorFeatures['editwarning']['global'] = false;
$wgVectorFeatures['editwarning']['user'] = true;
$wgVectorUseIconWatch = true;
$wgEnableWriteAPI = true;
$wgAllowUserJs = true;
$wgVectorResponsive = true;


wfLoadSkin( 'DarkVector' );
$wgDarkVectorFeatures['editwarning']['global'] = false;
$wgDarkVectorFeatures['editwarning']['user'] = true;
$wgDarkVectorUseSimpleSearch = true;
$wgDarkVectorUseIconWatch = true;

wfLoadSkin( 'MinervaNeue' );


## Halt, intruder!
if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}

# $wgDisableCounters = true; # set to true when using varnish/squid
$wgDisableCounters = false;

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Cache settings
$wgMainCacheType    = CACHE_MEMCACHED;
$wgMemCachedServers = array("127.0.0.1:11211");

$wgEnableParserCache = true;
$wgParserCacheExpireTime = 86400;
$wgCacheDirectory = "$wgBaseDirectory/cache";
$wgEnableSidebarCache = true;

$wgUseSquid = true;
$wgSquidServers = array("127.0.0.1");

# Don't enable these, they break certain transclusions
#$wgUseFileCache = true;
#$wgUseGzip = true;

# Uploads/images configuration
$wgEnableUploads  = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgUploadDirectory = "$wgBaseDirectory/images";
$wgUploadPath = "$wgScriptPath/images";
$wgFileExtensions = [ 'png', 'gif', 'jpg', 'jpeg', 'webp', 'ico', 'ogg', 'svg', 'mid', 'rpy', 'tsr', ];
$wgVerifyMimeType = true;
$wgGenerateThumbnailOnParse = true;
$wgMaxShellMemory = 409600;
$wgMaxImageArea = 3.6e7;
$wgSVGConverterPath = '/usr/bin';
$wgSVGConverter = 'rsvg';
$wgSVGConverters = [ 'rsvg' => '$path/rsvg-convert -w $width -h $height -o $output $input', ];

# file type verification exclusions;
# rpy:  standard touhou replay file
# tsr:  replay file for taisei

$wgHooks['MimeMagicInit'][] = static function ( $mime ) {
    $mime->addExtraTypes( 'application/octet-stream rpy' );
    $mime->addExtraTypes( 'application/octet-stream tsr' );
};


$wgCategoryPagingLimit = 100;

$wgUseInstantCommons  = false;
$wgShellLocale = "en_US.utf8";
$wgUseTeX           = false;
$wgLocalInterwiki   = strtolower( $wgSitename );
$wgInterwikiMagic   = true;
$wgEnableScaryTranscluding = true;
$wgDiff3 = "/usr/bin/diff3";
$wgCacheEpoch = max( $wgCacheEpoch, gmdate( 'YmdHis', @filemtime( __FILE__ ) ) );
$wgGroupPermissions['*']['edit'] = true;
$wgShowIPinHeader = false; # For non-logged in users
$wgEnableSorbs = true; #proxy block
$wgUseRCPatrol = false;

# Licensing/Copyrights
#$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = "Project:Copyrights";
$wgRightsUrl = "https://creativecommons.org/licenses/by-sa/4.0/";
$wgRightsText = "Creative Commons Attribution-ShareAlike 4.0 International License.";
$wgRightsIcon = "$wgScriptPath/resources/assets/licenses/cc-by-sa.png";
# $wgRightsCode = ""; # Not yet used

## Group rights ahoy!
# Note that we reset the ENTIRE permissions array.
# Be mindful of any new permission types that pop up when upgrading MW.
$wgGroupPermissions = array();

$wgGroupPermissions['*'    ]['createaccount']   = false; # CLOSED REGISTRATION
#$wgGroupPermissions['*'    ]['createaccount']   = true; # OPEN REGISTRATION

$wgGroupPermissions['*'    ]['read']            = true;
$wgGroupPermissions['*'    ]['edit']            = false;
$wgGroupPermissions['*'    ]['createpage']      = false;
$wgGroupPermissions['*'    ]['createtalk']      = false;
$wgGroupPermissions['*'	   ]['writeapi']         = true;

/* $wgGroupPermissions['user' ]['move']            = false; */
$wgGroupPermissions['user' ]['read']            = true;
$wgGroupPermissions['user' ]['edit']            = true;
$wgGroupPermissions['user' ]['createpage']      = false;
$wgGroupPermissions['user' ]['createtalk']      = true;
$wgGroupPermissions['user' ]['upload']          = false;
$wgGroupPermissions['user' ]['reupload']        = false;
$wgGroupPermissions['user' ]['reupload-shared'] = false;
$wgGroupPermissions['user' ]['minoredit']       = true;
$wgGroupPermissions['user' ]['purge']           = true;
$wgGroupPermissions['user' ]['viewmywatchlist']   = true;
$wgGroupPermissions['user' ]['editmywatchlist']   = true;
$wgGroupPermissions['user' ]['viewmyprivateinfo'] = true;
$wgGroupPermissions['user' ]['editmyprivateinfo'] = true;
$wgGroupPermissions['user' ]['editmyoptions']     = true;
/* added jan 26 2022 */
$wgGroupPermissions['user']['suppressredirect']  = true;
$wgGroupPermissions['user']['move-subpages']  = true;
$wgGroupPermissions['user']['move']            = true;
$wgGroupPermissions['user']['movefile']  = true;


$wgGroupPermissions['sysop']['read']            = true;
$wgGroupPermissions['sysop']['block']           = true;
$wgGroupPermissions['sysop']['createaccount']   = true;
$wgGroupPermissions['sysop']['delete']          = true;
$wgGroupPermissions['sysop']['deletedhistory']  = true;
$wgGroupPermissions['sysop']['undelete'] 	= true;
$wgGroupPermissions['sysop']['deletedtext']	= true;
$wgGroupPermissions['sysop']['editinterface']   = true;
$wgGroupPermissions['sysop']['editsitecss']     = true;
$wgGroupPermissions['sysop']['editsitejs']      = true;
$wgGroupPermissions['sysop']['editsitejson']    = true;
$wgGroupPermissions['sysop']['import']          = true;
$wgGroupPermissions['sysop']['importupload']    = true;
/* $wgGroupPermissions['sysop']['move']            = true; */
$wgGroupPermissions['sysop']['patrol']          = true;
$wgGroupPermissions['sysop']['autopatrol']      = true;
$wgGroupPermissions['sysop']['protect']         = true;
$wgGroupPermissions['sysop']['proxyunbannable'] = true;
$wgGroupPermissions['sysop']['rollback']        = true;
$wgGroupPermissions['sysop']['trackback']       = true;
$wgGroupPermissions['sysop']['upload']          = true;
$wgGroupPermissions['sysop']['reupload']        = true;
$wgGroupPermissions['sysop']['reupload-shared'] = true;
$wgGroupPermissions['sysop']['unwatchedpages']  = true;
$wgGroupPermissions['sysop']['autoconfirmed']   = true;
$wgGroupPermissions['sysop']['upload_by_url']   = true;
$wgGroupPermissions['sysop']['ipblock-exempt']  = true;
/* $wgGroupPermissions['sysop']['suppressredirect']  = true; */
/* $wgGroupPermissions['sysop']['move-subpages']  = true; */
$wgGroupPermissions['sysop']['move-rootuserpages']  = true;
/* $wgGroupPermissions['sysop']['movefile']  = true; */
$wgGroupPermissions['sysop']['editprotected']  = true;
$wgGroupPermissions['sysop']['editsemiprotected']  = true;
/* changed jan 8 2025 */
$wgGroupPermissions['sysop']['editcontentmodel'] = true;


$wgGroupPermissions['bureaucrat']['userrights'] = true;
$wgGroupPermissions['bureaucrat']['read']       = true;
$wgGroupPermissions['bureaucrat']['delete']          = true;
$wgGroupPermissions['bureaucrat']['deletedhistory']  = true;
$wgGroupPermissions['bureaucrat']['deleterevision']  = true;
$wgGroupPermissions['bureaucrat']['deletelogentry']  = true;
$wgGroupPermissions['bureaucrat']['hideuser']  = true;
$wgGroupPermissions['bureaucrat']['suppressrevision']  = true;
$wgGroupPermissions['bureaucrat']['suppressionlog']  = true;
$wgGroupPermissions['bureaucrat']['viewsuppressed']  = true;
$wgGroupPermissions['bureaucrat']['sendemail'] = true;
/* $wgGroupPermissions['bureaucrat']['editcontentmodel'] = true; */

$wgGroupPermissions['bot']['bot'] = true;
$wgGroupPermissions['bot']['autoconfirmed'] = true;
$wgGroupPermissions['bot']['autopatrol'] = true;
$wgGroupPermissions['bot']['autoreview'] = true;
$wgGroupPermissions['bot']['noratelimit'] = true;
$wgGroupPermissions['bot']['suppressredirect'] = true;
$wgGroupPermissions['bot']['nominornewtalk'] = true;
$wgGroupPermissions['bot']['apihighlimits'] = true;
$wgGroupPermissions['bot']['writeapi'] = true;
$wgGroupPermissions['bot']['read']     = true;
$wgGroupPermissions['bot']['move-subpages']  = true;
$wgGroupPermissions['bot']['move-rootuserpages']  = true;
$wgGroupPermissions['bot']['movefile']  = true;


$wgGroupPermissions['autoconfirmed']['autoconfirmed'] = true;
$wgGroupPermissions['autoconfirmed']['createpage'] = true;
$wgGroupPermissions['autoconfirmed']['createtalk'] = true;
$wgGroupPermissions['autoconfirmed']['upload'] = true;
$wgGroupPermissions['autoconfirmed']['reupload'] = true;
$wgGroupPermissions['autoconfirmed']['move'] = true;
$wgGroupPermissions['autoconfirmed']['reupload-shared'] = true;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
$wgGroupPermissions['autoconfirmed']['editmyusercss']     = true;
$wgGroupPermissions['autoconfirmed']['editmyuserjs']      = true;
$wgGroupPermissions['autoconfirmed']['viewmywatchlist']   = true;
$wgGroupPermissions['autoconfirmed']['editmywatchlist']   = true;
$wgGroupPermissions['autoconfirmed']['viewmyprivateinfo'] = true;
$wgGroupPermissions['autoconfirmed']['editmyprivateinfo'] = true;
$wgGroupPermissions['autoconfirmed']['editmyoptions']     = true;

$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['sysop']['confirmaccount'] = true;


# autoconfirm workaround, use when admin-regulated registration is enabled
# without this, users with temporary passwords can't even log in to change their password. Use * instead of user, because apparently they're not considered users at this point (???)
#$wgGroupPermissions['*']['editmyprivateinfo'] = true;

# AUTOPROMOTE

# autopromote defaults to use when registration is open (require 1 day + 1 edit)
#$wgAutoConfirmAge = 86400;
#$wgAutoConfirmCount = 1;

# autopromote defaults to use when registration is closed (effectively no restrictions, since users are pre-approved anyhow)
$wgAutoConfirmAge = 1;
$wgAutoConfirmCount = 0;

$wgAutopromote = array(
        "autoconfirmed" => array( "&",
                array( APCOND_EDITCOUNT, &$wgAutoConfirmCount ),
                array( APCOND_AGE, &$wgAutoConfirmAge ),
        ),
);

$wgDefaultUserOptions['vector-collapsiblenav'] = 1;

## Shared image repository, Commons support
$wgSharedDB = "touhouwiki";
$wgSharedPrefix = "thwikiEN_";
$wgSharedTables = array( 'actor', 'user',  'user_groups', 'interwiki', 'image', 'imagelinks', 'oldimage', 'ipblocks', 'spoofuser' );

$wgUseSharedUploads = true;
$wgSharedUploadDirectory = '$wgBaseDirectory/images/';
$wgHashedSharedUploadDirectory = true;
$wgUploadNavigationUrl = "https://onsen.touhouwiki.net/index.php/Special:Upload";
$wgUploadMissingFileUrl= "https://onsen.touhouwiki.net/index.php/Special:Upload";
$wgSharedUploadPath = 'https://onsen.touhouwiki.net/images';


## Request Account login link
#$wgHooks['PersonalUrls'][] = 'onPersonalUrls';
#
#function onPersonalUrls( array &$personal_urls, Title $title, SkinTemplate $skin  ) {
#    // Add a link to Special:RequestAccount if a link exists for login
#    if ( isset( $personal_urls['login'] ) || isset( $personal_urls['anonlogin'] ) ) {
#            $personal_urls['createaccount'] = array(
#                'text' => wfMessage( 'requestaccount' )->text(),
#                'href' => SpecialPage::getTitleFor( 'RequestAccount' )->getFullURL()
#            );
#    }
#    return true;
#}

# Try to make session cookies global across sites
$wgCookieDomain = "touhouwiki.net";

$wgAllowUserCss = true;


# Extension loading and configuration
require_once "/var/www/touhouwiki.net/htdocs/ExtensionSettings.php";

#$wgShowExceptionDetails = true;
#$wgShowExceptionDetails = true;
#$wgShowDBErrorBacktrace = true;
#$wgShowSQLErrors = true;
