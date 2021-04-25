<?php
//This is our html source code 
$htmlSourceCode = '
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PHP: preg_replace - Manual </title>

 <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">
';

//remove www from html source code 
$removeWWW = preg_replace("/(ww[w2-9]\.)/", "", $htmlSourceCode);

//remove https or http from url
preg_match_all("/https?:\/\/([a-z0-9._\-]+)/", $removeWWW, $result);

// creating string of domains
echo implode(';',$result[1]);
