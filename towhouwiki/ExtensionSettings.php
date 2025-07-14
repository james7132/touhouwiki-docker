<?php

## LODES OF EXTENSIONS

## Bundled Extensions; included with Mediawiki


wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'WikiEditor' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
wfLoadExtension( 'Interwiki' );
$wgGroupPermissions['*']['interwiki'] = false;
$wgGroupPermissions['sysop']['interwiki'] = true;
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'CodeEditor' );
$wgCodeEditorEnableCore = 'true';
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TextExtracts' );
#wfLoadExtension( 'VisualEditor' );

## Scribunto
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoEngineConf['luastandalone']['luaPath'] = '/usr/bin/luajit';
$wgScribuntoEngineConf['luastandalone']['cpuLimit'] = '20';

$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;

## Extra Extensions; updated separately


## BetaFeatures
##wfLoadExtension( 'BetaFeatures' );

wfLoadExtension( 'HeadScript' );
$wgHeadScriptCode = '
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34275641-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());
  gtag("config", "UA-34275641-1");
</script>';

## CollapsibleVector
wfLoadExtension( 'CollapsibleVector' );
$wgCollapsibleVectorFeatures['collapsibletabs']['global'] = false;
$wgCollapsibleVectorFeatures['collapsiblenav']['global'] = true;

## ConfirmAccount
#wfLoadExtension( 'ConfirmAccount' );
#$wgMakeUserPageFromBio = false;
#$wgAutoWelcomeNewUsers = false;
#$wgConfirmAccountRequestFormItems = [
#        'UserName'        => [ 'enabled' => true ],
#        'RealName'        => [ 'enabled' => false ],
#        'Biography'       => [ 'enabled' => true, 'minWords' => 30 ],
#        'AreasOfInterest' => [ 'enabled' => false ],
#        'CV'              => [ 'enabled' => false ],
#        'Notes'           => [ 'enabled' => false ],
#        'Links'           => [ 'enabled' => false ],
#        'TermsOfService'  => [ 'enabled' => false ],
#];

##wfLoadExtension( 'DiscordRCFeed' );
##$wgRCFeeds['discord'] = [
##	'url' => 'https://discordapp.com/api/webhooks/422117997595852831/I8kWAoU_-mfCIDQnmq2PY5Hz6dTkjJ09qEVrciF-uaS26urbKCxxb70fN_cPRJsuyFg6',
##	'omit_bots' => true,
##	'omit_minor' => true,
##];

## DiscordNotifications (wiki-log)
##wfLoadExtension( 'DiscordNotifications' );
##$wgDiscordIncomingWebhookUrl = "https://discordapp.com/api/webhooks/422117997595852831/I8kWAoU_-mfCIDQnmq2PY5Hz6dTkjJ09qEVrciF-uaS26urbKCxxb70fN_cPRJsuyFg6";
##$wgDiscordSendMethod = "curl";
##$wgWikiUrlEnding = "index.php?title=";
##$wgDiscordIncludeUserUrls = false;
##$wgDiscordNotificationNewUser = false;
##$wgDiscordExcludeNotificationsFrom = ["User:", "Category:"];
##$wgDiscordIgnoreMinorEdits = true;
##$wgDiscordIncludeDiffSize = true;
##$wgDiscordIncludePageUrls = true;
##$wgDiscordShowNewUserEmail = false;
##$wgDiscordShowNewUserFullName = false;
##$wgDiscordShowNewUserIP = false;

## LabeledSectionTransclusion
wfLoadExtension( 'LabeledSectionTransclusion' );
$wgUseAjax = true;

## CheckUser
wfLoadExtension( 'CheckUser' );

## EditCount
wfLoadExtension( 'Editcount' );

## Arrays
# NOTE:  WILL BE INCOMPATIBLE WITH MW SOON
wfLoadExtension( 'Arrays' );

## THM
wfLoadExtension( 'TimedMediaHandler' );
$wgMediaAudioTypes = array( 'Vorbis','Speex' );
$wgVideoPlayerSkin = 'kskin';
$wgEnableIframeEmbed = true;
$wgEnableTranscode = false;

## CharInsert
wfLoadExtension( 'CharInsert' );

## UserMergerebuildImages.php file is a maintenance script to update metadata records for images that were manually uploaded to the wiki, for example via FTP.
wfLoadExtension( 'UserMerge' );
$wgGroupPermissions['bureaucrat']['usermerge'] = true;

## TitleKey
wfLoadExtension( 'TitleKey' );

## Variables
# NOTE:  WILL BE INCOMPATIBLE WITH MW SOON
wfLoadExtension( 'Variables' );

## PageNotice
wfLoadExtension( 'PageNotice' );

## AntiSpoof
wfLoadExtension( 'AntiSpoof' );

## RandomSelection
wfLoadExtension( 'RandomSelection' );

## TabberNeue
wfLoadExtension( 'TabberNeue' );

## OpenGraphMeta
wfLoadExtension( 'OpenGraphMeta' );

## Description2
wfLoadExtension( 'Description2' );

## JavascriptSlideshow
//wfLoadExtension( 'JavascriptSlideshow' );

#$wgSpamRegex = "/".                        # The "/" is the opening wrapper
#                "s-e-x|zoofilia|sexyongpin|grusskarte|geburtstagskarten|animalsex|".
#                "sex-with|dogsex|adultchat|adultlive|camsex|sexcam|livesex|sexchat|".
#                "chatsex|onlinesex|adultporn|adultvideo|adultweb.|hardcoresex|hardcoreporn|".
#                "teenporn|xxxporn|lesbiansex|livegirl|livenude|livesex|livevideo|camgirl|".
#                "spycam|voyeursex|casino-online|online-casino|kontaktlinsen|cheapest-phone|".
#                "laser-eye|eye-laser|fuelcellmarket|lasikclinic|cragrats|parishilton|".
#                "paris-hilton|paris-tape|2large|fuel-dispenser|fueling-dispenser|huojia|".
#                "jinxinghj|telematicsone|telematiksone|a-mortgage|diamondabrasives|".
#                "reuterbrook|sex-plugin|sex-zone|lazy-stars|eblja|liuhecai|".
#                "buy-viagra|-cialis|-levitra|boy-and-girl-kissing|". # These match spammy words
#                "dirare\.com|".           # This matches dirare.com a spammer's domain name
#                "nimp\.org".
##                "overflow\s*:\s*auto|".   # This matches against overflow:auto (regardless of whitespace on either side of the colon)
##                "position\s*:\s*(fixed|absolute)|".
##                "height\s*:\s*[0-4]px|".  # This matches against height:0px (most CSS hidden spam) (regardless of whitespace on either side of the colon)
##                "\<\s*a\s*href|".          This blocks all href links entirely, forcing wiki syntax
##                "display\s*:\s*none".     # This matches against display:none (regardless of whitespace on either side of the colon)
#                "/i";                     # The "/" ends the regular expression and the "i" switch which follows makes the test case-insensitive
                                          # The "\s" matches whitespace
                                          # The "*" is a repeater (zero or more times)
                                          # The "\s*" means to look for 0 or more amount of whitespace


# Mobilization
##require_once( "{$IP}/extensions/MobileDetect/MobileDetect.php" );
##require_once( "{$IP}/extensions/MobileFrontend/MobileFrontend.php" );
wfLoadExtension( 'MobileFrontend' );
$wgMFAutodetectMobileView = true;
$wgMFExtendOpenSearchXml = true;
$wgMFDefaultSkinClass = 'SkinMinerva'; // use Vector skin
$wgMFCustomLogos = array( 'site' => 'thwiki', 'copyright' => "$wgStylePath/common/images/touhouwiki-mobile-footer.png" );
$wgMFNamespacesWithLeadParagraphs = false;
#$wgMFShowFirstParagraphBeforeInfobox = false;

## TemplateStyles
wfLoadExtension( 'TemplateStyles' );
$wgTemplateStyleNamespace[828] = true;

## EmbedVideo
wfLoadExtension( 'EmbedVideo' );
# Additional video ser
