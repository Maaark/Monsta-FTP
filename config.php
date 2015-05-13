<?php

# Open README file for descriptions and help.

$allowedHosts = array(
// add ip address or hostname to array
);

$hostSelectable = true;
$hostCheck = false;
$defaultLang = 'en_us';
$title = 'Monsta FTP';
$showVersion = true;
$skinSelect = true;
$hostInputVisible = true;
$showLogo = false;
$logo = '';


$ftp_host = '';
$ftp_user = '';

if(empty($ftp_host))
$ftp_host = urldecode($_GET['ftp_host']);
		
if(empty($ftp_user))
$ftp_user = urldecode($_GET['ftp_user']);

$ftpPort = "21";
$ftpMode = "1";
$ftpSSL  = "0";
$ftpDir  = "";
$serverTmp = "/tmp";
$editableExts = "asp,ashx,asmx,aspx,asx,axd,cfm,cgi,css,html,htm,jhtml,js,php,phtml,pl,txt,xhtml";
$dateFormatUsa = 0;
$lockOutTime = 5;
$versionCheck = 0;
