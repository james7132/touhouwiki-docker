<?php
require_once("/var/www/html/CommonSettings.php");
$wgSitename         = "东方维基";
$wgServer           = "//zh.touhouwiki.net";
$wgLogo             = "$wgScriptPath/skins/common/images/chinalogo.png";
$wgDBprefix         = "thwikiZH_";
$wgLanguageCode = "zh";
#$wgLanguageCode = "zh-hans"; # namespace hack?

$wgLocaltimezone = "Asia/Shanghai";
$oldtz = getenv("TZ");
putenv("TZ=$wgLocaltimezone");
$wgLocalTZoffset = date("Z") / 60;
putenv("TZ=$oldtz");

#$wgCaptchaClass = 'QuestyCaptcha';
#$wgCaptchaQuestions = array(); // Clobber the defaults
#$wgCaptchaQuestions[] = array( 'question' => "TH07的标题名字是东方______", 'answer' => array("妖妖梦","妖妖夢") );
#$wgCaptchaQuestions[] = array( 'question' => "TH08的标题名字是东方______", 'answer' => "永夜抄" );
#$wgCaptchaQuestions[] = array( 'question' => "TH09的标题名字是东方______", 'answer' => "花映塚" );
#$wgCaptchaQuestions[] = array( 'question' => "TH095的标题名字是东方______", 'answer' => "文花帖" );
#$wgCaptchaQuestions[] = array( 'question' => "TH10的标题名字是东方______", 'answer' => array("风神录","風神錄") );
#$wgCaptchaQuestions[] = array( 'question' => "TH06的标题名字是东方______", 'answer' => array("红魔乡","紅魔鄉") );
#$wgCaptchaQuestions[] = array( 'question' => "TH105的标题名字是东方______", 'answer' => array("绯想天","緋想天") );
#$wgCaptchaQuestions[] = array( 'question' => "TH11的标题名字是东方______", 'answer' => array("地灵殿","地靈殿") );
#$wgCaptchaQuestions[] = array( 'question' => "TH12的标题名字是东方______", 'answer' => array("星莲船","星蓮船") );
#$wgCaptchaQuestions[] = array( 'question' => "TH123的标题名字是东方______", 'answer' => array("非想天则","非想天則") );
#$wgCaptchaQuestions[] = array( 'question' => "TH135的标题名字是东方______", 'answer' => array("心绮楼","心綺樓") );

# disable a few variants
$wgDisabledVariants[] = 'zh-mo';
$wgDisabledVariants[] = 'zh-my';

## DiscordNotification
$wgDiscordFromName = "Touhou Wiki (zh)";
$wgWikiUrl            = "https://zh.touhouwiki.net/";
