<?php
//ini_set('display_errors', "On");

/* ------------------------------------------------
テンプレートフォルダのパス
--------------------------------------------------- */
$path = dirname(__FILE__).'/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);


/* ------------------------------------------------
メタ情報
--------------------------------------------------- */
//サイト名
$siteTitle = "";

//サイト説明文
$siteDescription = "";

//キーワード
$siteKeywords = "";


/* ------------------------------------------------
ルートフォルダ設定
--------------------------------------------------- */
$root = ""; // rootフォルダを設定する場合は先頭に/をつける ex) /root


/* ------------------------------------------------
ID
--------------------------------------------------- */
$twitterId = ""; //twitterID


/* ------------------------------------------------
バージョン
--------------------------------------------------- */
$cssVer = "2022000001"; //css更新時に書き換え
$jsVer = "2022000001"; //js更新時に書き換え



?>