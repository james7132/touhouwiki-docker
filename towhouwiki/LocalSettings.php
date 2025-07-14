<?php

$touhouWikiEnv = getenv("TOUHOUWIKI_ENV");
if(!$touhouWikiEnv) {
  echo("No specified deployment environment. Defaulting to DEV. Please set the TOUHOUWIKI_ENV env var to use something else.");
  $touhouWikiEnv = "DEV";
}
$touhouWikiEnv = strtouppper($touhouWikiEnv);

if ($touhouWikiEnv === "PROD") {
  $touhouWikiRootDomain = "touhouwiki.net";
} else if ($touhouWikiEnv === "STAGING") {
  $touhouWikiRootDomain = "touhouwikitest.net";
}

/* TODO: Integrate command-line and web modes cleanly. (non-vital) */
if($wgCommandLineMode) { // running maintenance scripts
	if(!defined('MW_PREFIX') && !defined('MW_DB')) { // no --wiki switch provided
		echo("Wiki ID not specified. Please specify one with the --wiki switch.\n");
		exit(-1);
	}

	if(MW_PREFIX != "") {
		$wgMaintenanceID = MW_DB . "-" . MW_PREFIX;
	} else {
		$wgMaintenanceID = MW_DB;
	}
	echo("Running maintenance script for [" . $wgMaintenanceID . "]\n");

	switch ($wgMaintenanceID)
	{
		case "cs":
			require_once "Settings-CS.php";
			break;

		case "da":
			require_once "Settings-DA.php";
			break;

		case "de":
			require_once "Settings-DE.php";
			break;

		case "en":
			require_once "Settings-EN.php";
			break;

		case "es":
			require_once "Settings-ES.php";
			break;

		case "fr":
			require_once "Settings-FR.php";
			break;

		case "it":
			require_once "Settings-IT.php";
			break;

		case "jp":
			require_once "Settings-JP.php";
			break;

		case "ko":
			require_once "Settings-KO.php";
			break;

		case "ms":
			require_once "Settings-MS.php";
			break;

		case "nl":
			require_once "Settings-NL.php";
			break;

		case "onsen":
			require_once "Settings-ONSEN.php";
			break;

		case "pl":
			require_once "Settings-PL.php";
			break;

		case "pt":
			require_once "Settings-PT.php";
			break;

		case "ru":
			require_once "Settings-RU.php";
			break;

		case "sv":
			require_once "Settings-SV.php";
			break;

		case "tr":
			require_once "Settings-TR.php";
			break;

		case "uk":
			require_once "Settings-UK.php";
			break;

		case "vi":
			require_once "Settings-VI.php";
			break;

		case "zh":
			require_once "Settings-ZH.php";
			break;

		default:
			echo "This wiki is not available. Check configuration.\n";
			exit(-1);
	}
} else { // normal web usage
  if($touhouWikiEnv === "DEV") {
      require_once "Settings-EN.php";
  } else {
    switch ($_SERVER["HTTP_HOST"]) {
      case "cs.touhouwiki.net":
        require_once "Settings-CS.php";
        break;

      case "da.touhouwiki.net":
        require_once "Settings-DA.php";
        break;

      case "de.touhouwiki.net":
        require_once "Settings-DE.php";
        break;

      case "en.touhouwiki.net":
        require_once "Settings-EN.php";
        break;

      case "es.touhouwiki.net":
        require_once "Settings-ES.php";
        break;

      case "fr.touhouwiki.net":
        require_once "Settings-FR.php";
        break;

      case "it.touhouwiki.net":
        require_once "Settings-IT.php";
        break;

      case "jp.touhouwiki.net":
        require_once "Settings-JP.php";
        break;

      case "ko.touhouwiki.net":
        require_once "Settings-KO.php";
        break;

      case "ms.touhouwiki.net":
        require_once "Settings-MS.php";
        break;

      case "nl.touhouwiki.net":
        require_once "Settings-NL.php";
        break;

      case "onsen.touhouwiki.net":
        require_once "Settings-ONSEN.php";
        break;

      case "pl.touhouwiki.net":
        require_once "Settings-PL.php";
        break;

      case "pt.touhouwiki.net":
        require_once "Settings-PT.php";
        break;

      case "ru.touhouwiki.net":
        require_once "Settings-RU.php";
        break;

      case "sv.touhouwiki.net":
        require_once "Settings-SV.php";
        break;

      case "tr.touhouwiki.net":
        require_once "Settings-TR.php";
        break;

      case "uk.touhouwiki.net":
        require_once "Settings-UK.php";
        break;

      case "vi.touhouwiki.net":
        require_once "Settings-VI.php";
        break;

      case "zh.touhouwiki.net":
        require_once "Settings-ZH.php";
        break;

      default:
        echo "This wiki is not available. Check configuration.\n";
        exit(0);
    }
  }
}
